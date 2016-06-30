<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' => 'en',
    'bootstrap' => ['languagepicker'],
    'components' => [
        'languagepicker' => [
        'class' => 'lajax\languagepicker\Component',
        'languages' => ['en', 'de', 'fr']                   // List of available languages (icons only)
         ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
            'admins' => ['seyid'],
        ],
    ],
];
