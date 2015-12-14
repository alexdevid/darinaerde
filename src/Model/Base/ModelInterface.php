<?php
namespace Model\Base;

interface ModelInterface {

    /**
     * @return mixed
     */
    public function getTableName();

    /**
     * @return mixed
     */
    public function getPropertyMap();

    /**
     * @param \stdClass $data
     * @return ModelInterface
     */
    public function fromRaw(\stdClass $data);
}