<?php
namespace Storage;


use Model\Base\ModelInterface;
use Predis\Client;

class Storage {

    /**
     * @var Client
     */
    private $db;

    public function __construct(Client $db) {
        $this->db = $db;
    }

    /**
     * @param ModelInterface $model
     * @param int $id
     * @return ModelInterface|null
     */
    public function getById(ModelInterface $model, $id) {
        $table = $this->getTableName($model);
        $data = $this->db->get($table . ':' . $id);
        if ($data) {
            return $model->fromRaw(json_decode($data));
        }
        return NULL;
    }

    /**
     * @param ModelInterface $model
     * @param array $ids
     * @return array
     */
    public function getMany(ModelInterface $model, array $ids = []) {
        $table = $this->getTableName($model);
        $this->db->multiExec();
        $data = [];
        if (empty($ids)) {
            $keys = $this->db->keys($table . ':*');
            foreach ($keys as $key) {
                $json = $this->db->get($key);
                $data[] = $model->fromRaw(json_decode($json));
            }
        } else {
            foreach ($ids as $id) {
                $data[] = $this->getById($model, $id);
            }
        }
        return $data;
    }

    /**
     * @param ModelInterface $model
     * @return string
     */
    private function getTableName(ModelInterface $model) {
        return strtolower($model->getTableName());
    }

    /**
     * @return Client
     */
    public function getClient() {
        return $this->db;
    }

}