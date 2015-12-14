<?php
namespace Controller;

use Model\Album;
use Model\Image;

class PortfolioController extends Controller {

    /**
     * @param int $albumId
     */
    public function albumAction($albumId) {
        $album = \Portfolio::$app->getStorage()->getById(new Album(), $albumId);
        $this->getSlim()->render('portfolio/album.twig', ['Album' => $album, 'Images' => $album->getImages()]);
    }

    /**
     * @param int $albumId
     * @param int $imageId
     */
    public function imageAction($albumId, $imageId) {
        $image = \Portfolio::$app->getStorage()->getById(new Image(), $imageId);
        $album = \Portfolio::$app->getStorage()->getById(new Album(), $albumId);
        $images = $album->getImages();

        $currentIndex = array_search($image, $images);
        $next = isset($images[$currentIndex + 1]) ? $images[$currentIndex + 1] : $images[0];
        $prev = isset($images[$currentIndex - 1]) ? $images[$currentIndex - 1] : $images[count($images) - 1];
        $this->getSlim()->render('portfolio/image.twig', [
            'Image' => $image,
            'Prev' => $prev,
            'Next' => $next
        ]);
    }
}