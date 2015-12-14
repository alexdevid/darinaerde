<?php
namespace Model;

use Model\Base\Model;

/**
 * Class Album
 * @package Model
 */
class Album extends Model {

    public $id;
    public $title;
    public $description;
    public $created;
    public $updated;
    public $length;
    public $thumb;
    public $thumbId;

    /**
     * @return array
     */
    public function getPropertyMap() {
        return [
            'aid' => 'id',
            'title' => 'title',
            'description' => 'description',
            'created' => 'created',
            'updated' => 'updated',
            'size' => 'length',
            'thumb_src' => 'thumb',
            'thumb_id' => 'thumbId',
        ];
    }

    /**
     * @return Base\ModelInterface|null
     */
    public function getThumbnail() {
        $storage = \Portfolio::$app->getStorage();
        return $storage->getById(new Image(), $this->thumbId);
    }

    /**
     * @return array
     */
    public function getImages() {
        $storage = \Portfolio::$app->getStorage();
        $images = $storage->getMany(new Image());
        $data = [];
        foreach ($images as $image) {
            if ($image->albumId == $this->id) {
                $data[] = $image;
            }
        }
        return $data;
    }

    public function getTableName() {
        return 'album';
    }
}