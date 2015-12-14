<?php
namespace ApiClient;

use VK\VK;
use Model\Album;
use Model\Image;

class Client {

    /**
     * @var int
     */
    private $ownerId;

    /**
     * @var VK
     */
    private $client;

    /**
     * @var array
     */
    private $response;

    public function __construct(array $config) {
        $this->ownerId = $config['owner_id'];
        $this->client = new VK($config['app_id'], $config['app_secret']);
    }

    /**
     * @return array|null
     */
    public function getAlbums() {
        $this->response = $this->client->api('photos.getAlbums', [
            'owner_id' => $this->ownerId,
            'need_system' => 1,
            'need_covers' => 1,
        ]);
        return $this->response();
    }

    /**
     * @param int $albumId
     * @return array|null
     */
    public function getAlbumImages($albumId) {
        $this->response = $this->client->api('photos.get', [
            'owner_id' => $this->ownerId,
            'album_id' => $albumId
        ]);
        return $this->response();
    }

    /**
     * @param int $cityId
     * @return array|null
     */
    public function getCity($cityId) {
        $this->response = $this->client->api('database.getCitiesById', [
            'city_ids' => [$cityId]
        ]);
        return $this->response();
    }

    /**
     * @param int $countryId
     * @return array|null
     */
    public function getCountry($countryId) {
        $this->response = $this->client->api('database.getCountriesById', [
            'country_ids' => [$countryId]
        ]);
        return $this->response();
    }

    /**
     * @return array|null
     */
    public function getGroupInfo() {
        $this->response = $this->client->api('groups.getById', [
            'group_ids' => -$this->ownerId,
            'fields' => 'city,country,place,description,wiki_page,members_count,counters,start_date,
                        finish_date,can_post,can_see_all_posts,activity,status,contacts,links,
                        fixed_post,verified,site,ban_info'
        ]);
        return $this->response();
    }

    /**
     * @return array|null
     */
    private function response() {
        if (isset($this->response['response'])) {
            return $this->response['response'];
        }
        return NULL;
    }

    /**
     * @return array
     */
    public function getLastResponse() {
        return $this->response;
    }


}