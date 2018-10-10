<?php
namespace Article;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\ArticleController::class => InvokableFactory::class,
            Controller\CategoryController::class => InvokableFactory::class,
        ],
    ],

    'router' => [
        'routes' => [
            'article' => [
                'type'    => 'segment',
                'options' => [
                    'route' => '/article[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\ArticleController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'category' => [
                'type'    => 'segment',
                'options' => [
                    'route' => '/category[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\CategoryController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],

    'view_manager' => [
        'template_path_stack' => [
            'article' => __DIR__ . '/../view',
        ],
    ],
];