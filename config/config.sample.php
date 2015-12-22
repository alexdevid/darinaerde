<?php
return [
    'debug' => false,
    'twig' => [
        'cacheDir' => __DIR__ . '/../templates_cache',
        'templatesDir' => __DIR__ . '/../templates/'
    ],
    'redis' => ['database' => 5],
    'vk' => [
        'owner_id' => null,
        'app_id' => null,
        'app_secret' => null,
        'index_album' => null,
        'storage_albums' => []
    ],
    'meta' => [
        'title' => 'Darina Erde - Живопись / Графика',
        'description' => 'Darina Erde - Живопись / Графика',
        'keywords' => 'Darina Erde - Живопись / Графика',
        'image' => 'http://cs630921.vk.me/v630921253/57a9/fFbnb-pdmOg.jpg',
    ]
];