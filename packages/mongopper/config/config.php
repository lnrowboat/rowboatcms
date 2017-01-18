<?php
return [
    'documentsPath'      => 'Documents',
    'mapping'            => 'php',
    'mapping_files_path' => 'Mappings',
    'host'               => env('MONGO_HOST', 'localhost'),
    'database'           => env('MONGO_DATABASE', 'rowboatcms'),
    'password'           => env('MONGO_PASSWORD', ''),
    'port'               => env('MONGO_PORT', '27017'),
    'username'           => env('MONGO_USERNAME', ''),
];