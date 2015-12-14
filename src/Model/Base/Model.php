<?php
namespace Model\Base;

abstract class Model implements ModelInterface {

    public function __construct() {
    }

    /**
     * @param \stdClass $data
     * @return $this
     */
    public function fromRaw(\stdClass $data) {
        $model = new $this;
        $propertyMap = $this->getPropertyMap();
        foreach ($data as $key => $value) {
            $property = isset($propertyMap[$key]) ? $propertyMap[$key] : NULL;
            if ($property) {
                $model->$property = $value;
            }
        }
        return $model;
    }
}