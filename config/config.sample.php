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
    ]
];