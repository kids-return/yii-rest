<?php

return [
    'aliases' => [
        '@web' => '/',
    ],
    'app' => [
        '__class' => yii\rest\Application::class,
    ],
    'urlManager' => [
        '__class' => yii\rest\UrlManager::class,
    ],
    'urlNormalizer' => [
        '__class' => yii\rest\UrlNormalizer::class,
    ],
    'request' => [
        '__class' => yii\rest\Request::class,
        // 'cookieValidationKey' => $params['request.cookieValidationKey'],
    ],
    'response' => [
        '__class' => yii\rest\Response::class,
        'formatters' => [
            yii\rest\Response::FORMAT_HTML => [
                '__class' => yii\rest\formatters\HtmlResponseFormatter::class,
            ],
            yii\rest\Response::FORMAT_XML => [
                '__class' => yii\rest\formatters\XmlResponseFormatter::class,
            ],
            yii\rest\Response::FORMAT_JSON => [
                '__class' => yii\rest\formatters\JsonResponseFormatter::class,
            ],
            yii\rest\Response::FORMAT_JSONP => [
                '__class' => yii\rest\formatters\JsonResponseFormatter::class,
                'useJsonp' => true,
            ],
        ],
    ],

    \yii\rest\CheckAccessInterface::class => [
        '__class' => \yii\rest\DenyAll::class,
    ],

    \yii\rest\User::class => \yii\di\Reference::to('user'),
    'user' => [
        '__class' => yii\rest\User::class,
    ],

    'errorHandler' => [
        '__class' => yii\rest\ErrorHandler::class,
        'errorAction' => 'site/error',
    ],
];
