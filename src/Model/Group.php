<?php
namespace Model;

use Model\Base\Model;

/**
 * Class Group
 * @package Model
 */
class Group extends Model {

    public $id;
    public $name;
    public $city;
    public $country;
    public $description;
    public $status;
    public $contacts;
    public $photo_big;
    public $place;

    /**
     * @return array
     */
    public function getPropertyMap() {
        return [
            'gid' => 'id',
            'name' => 'name',
            'city' => 'city',
            'country' => 'country',
            'description' => 'description',
            'status' => 'status',
            'contacts' => 'contacts',
            'photo_big' => 'image',
            'place' => 'place',
        ];
    }

    /**
     * @return array
     */
    public function getContacts() {
        $data = [];
        foreach ($this->contacts as $contact) {
            if (isset($contact->user_id)) {
                $data[] = ['type' => 'vkontakte', 'value' => 'ВКонтакте', 'link' => 'https://vk.com/id' . $contact->user_id];
            }
            if (isset($contact->email)) {
                $data[] = ['type' => 'mail', 'link' => 'mailto:' . $contact->email, 'value' => $contact->email];
            }
            if (isset($contact->phone)) {
                $data[] = ['type' => 'phone-squared', 'value' => $contact->phone];
            }
        }
        return $data;
    }

    public function getTableName() {
        return 'group';
    }
}