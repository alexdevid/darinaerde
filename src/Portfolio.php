<?php

class Portfolio {

    /**
     * @var \Slim\Slim
     */
    private $slim;

    /**
     * @var \ApiClient\Client
     */
    private $client;

    /**
     * @var \Storage\Storage
     */
    private $storage;

    /**
     * @var array
     */
    private $config;

    /**
     * @var Portfolio
     */
    public static $app;

    /**
     * Portfolio constructor.
     * @param array $config
     */
    public function __construct(array $config) {
        Portfolio::$app = $this;
        $this->config = $config;
        $this->slim = new \Slim\Slim(['view' => new \Slim\Views\Twig()]);
        $this->slim->view()->parserOptions = array(
            'debug' => $config['debug'],
            'cache' => $config['twig']['cacheDir']
        );
        $this->slim->view()->parserExtensions = array(
            new \Slim\Views\TwigExtension(),
        );
        $this->slim->view()->setTemplatesDirectory($config['twig']['templatesDir']);

        $this->client = new \ApiClient\Client($config['vk']);
        $this->storage = new \Storage\Storage(new \Predis\Client($config['redis']));
        $group = $this->storage->getById(new \Model\Group(), -$config['vk']['owner_id']);
        $this->slim->view()->appendData(['Group' => $group]);
        $this->slim->view()->appendData(['Meta' => $this->getMetaData($config['meta'])]);
    }

    public function run() {
        if (isset($_GET['refresh'])) {
            $this->import();
        }
        $this->slim->get('/', function () {
            $controller = new \Controller\IndexController();
            $controller->indexAction();
        })->name('index');
        $this->slim->get('/portfolio/:album', function ($album) {
            $controller = new \Controller\PortfolioController();
            $controller->albumAction($album);
        })->name('album');
        $this->slim->get('/portfolio/:album/:image', function ($album, $image) {
            $controller = new \Controller\PortfolioController();
            $controller->imageAction($album, $image);
        })->name('image');
        $this->slim->run();
    }

    private function getMetaData(array $data) {
        return [
            'title' => $data['title'],
            'keywords' => $data['keywords'],
            'description' => $data['description'],
            'canonical' => ''
        ];
    }

    /**
     *
     */
    public function import() {
        $vk = $this->getClient();
        $db = $this->getStorage()->getClient();
        $db->flushdb();
        $albums = $vk->getAlbums();
        $db->multiExec();
        foreach ($albums as $album) {
            $db->set('album:' . $album['aid'], json_encode($album, JSON_PRETTY_PRINT));
            $photos = $vk->getAlbumImages($album['aid']);
            foreach ($photos as $photo) {
                $db->set('image:' . $photo['pid'], json_encode($photo, JSON_PRETTY_PRINT));
            }
        }
        $groupInfo = $vk->getGroupInfo();
        $city = $vk->getCity($groupInfo[0]['city']);
        $country = $vk->getCountry($groupInfo[0]['country']);
        $groupInfo[0]['place'] = $city[0]['name'] . ', ' . $country[0]['name'];
        $db->set('group:' . $groupInfo[0]['gid'], json_encode($groupInfo[0], JSON_PRETTY_PRINT));
    }

    /**
     * @return \ApiClient\Client
     */
    public function getClient() {
        return $this->client;
    }

    /**
     * @return \Slim\Slim
     */
    public function getSlim() {
        return $this->slim;
    }

    /**
     * @return \Storage\Storage
     */
    public function getStorage() {
        return $this->storage;
    }

    /**
     * @return array
     */
    public function getConfig() {
        return $this->config;
    }
}