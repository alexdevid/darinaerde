<?php
namespace Controller;

use Model\Album;
use Model\Image;

class IndexController extends Controller {

    public function indexAction() {
        $storageAlbums = \Portfolio::$app->getConfig()['vk']['storage_albums'];
        $albums = \Portfolio::$app->getStorage()->getMany(new Album(), $storageAlbums);
        $this->getSlim()->render('index.twig', ['Albums' => $albums, 'indexPage' => true]);
    }
}