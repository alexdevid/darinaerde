<?php
namespace Model;

use Model\Base\Model;

/**
 * Class Image
 * @package Model
 */
class Image extends Model {

    public $id;
    public $albumId;
    public $src;
    public $srcBig;
    public $srcSmall;
    public $srcXBig;
    public $srcXXBig;
    public $srcXXXBig;
    public $text;
    public $created;

    /**
     * @return array
     */
    public function getPropertyMap() {
        return [
            'pid' => 'id',
            'aid' => 'albumId',
            'src' => 'src',
            'src_big' => 'srcBig',
            'src_small' => 'srcSmall',
            'src_xbig' => 'srcXBig',
            'src_xxbig' => 'srcXXBig',
            'src_xxxbig' => 'srcXXXBig',
            'text' => 'text',
            'created' => 'created',
        ];
    }

    public function getOriginalSrc() {
        $srcs = ['srcXXXBig', 'srcXXBig', 'srcXBig', 'srcBig'];
        foreach ($srcs as $srcProperty) {
            if (isset($this->$srcProperty)) {
                return $this->$srcProperty;
            }
        }
        return NULL;
    }

    public function getTableName() {
        return 'image';
    }
}