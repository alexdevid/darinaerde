<?php
return [
    'debug' => true,
    'twig' => [
        'cacheDir' => __DIR__ . '/../templates_cache',
        'templatesDir' => __DIR__ . '/../templates/'
    ],
    'redis' => ['database' => 5],
    'vk' => [
        'owner_id' => -96426820,
        'app_id' => 3478449,
        'app_secret' => 'NsXaEklrBXQIoGbsCJaJ',
        'index_album' => 217116046,
        'storage_albums' => [224745347, 224724077]
    ]
];