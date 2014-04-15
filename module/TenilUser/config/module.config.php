<?php

namespace TenilUser;

return array(
    'router' => array(
        'routes' => array(
            'tenil-user-register' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/register',
                    'defaults' => array(
                        '__NAMESPACE__' => 'TenilUser\Controller',
                        'controller' => 'Index',
                        'action' => 'register'
                    )
                )
            ),
            'tenil-user-activate' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/register/activate[/:key]',
                    'defaults' => array(
                        '__NAMESPACE__' => 'TenilUser\Controller',
                        'controller' => 'Index',
                        'action' => 'activate'
                    )
                )
            ),
            'tenil-user-admin' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/admin',
                    'defaults' => array(
                        '__NAMESPACE__' => 'TenilUser\Controller',
                        'controller' => 'Users',
                        'action' => 'Index'
                    )
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:controller[/:action[/:id]]]',
                            'constraints' => array(
                                'contronller' => '[a-zA-Z][a-zA-z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-z0-9_-]*',
                                'id' => '\d+',
                            ),
                            'defaults' => array(
                                '__NAMESPACE__' => 'TenilUser\Controller',
                                'controller' => 'Users',
                            )
                        )
                    ),
                    'paginator' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:controller[/page/:page]]',
                            'constraints' => array(
                                'contronller' => '[a-zA-Z][a-zA-z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-z0-9_-]*',
                                'page' => '\d+',
                            ),
                            'defaults' => array(
                                '__NAMESPACE__' => 'TenilUser\Controller',
                                'controller' => 'Users',
                            )
                        )
                    )
                )
            ),
//            'tenil-user' => array(
//                'type' => 'Segment',
//                'options' => array(
//                    'route' => '/user[/][:action][/:id]',
//                    'constraints' => array(
//                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
//                        'id' => '[a-zA-Z][a-zA-Z0-9_-]*',
//                    ),
//                    'defaults' => array(
//                        '__NAMESPACE__' => 'TenilUser\Controller',
//                        'controller' => 'Users',
//                        'action' => 'Index'
//                    )
//                ),
//                'may_terminate' => TRUE,
//                'child_routes' => array(
//                    'paginator' => array(
//                        'type' => 'Segment',
//                        'options' => array(
//                            'route' => '[/page/:page]',
//                            'constraints' => array(
//                                'page' => '\d+'
//                            ),
//                            'defaults' => array(
//                                '__NAMESPACE__' => 'TenilUser\Controller',
//                                'controller' => 'Users'
//                            )
//                        )
//                    )
//                )
//            ),
        )
    ),
    'controllers' => array(
        'invokables' => array(
            'TenilUser\Controller\Index' => 'TenilUser\Controller\IndexController',
            'TenilUser\Controller\Users' => 'TenilUser\Controller\UsersController'
        )
    ),
    'view_manager' => array(
        // O módulo pode ter um layout específico
        /*
          'display_not_found_reason' => true,
          'display_exceptions'       => true,
          'doctype'                  => 'HTML5',
          'not_found_template'       => 'error/404',
          'exception_template'       => 'error/index',
          'template_map' => array(
          'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
          'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
          'error/404'               => __DIR__ . '/../view/error/404.phtml',
          'error/index'             => __DIR__ . '/../view/error/index.phtml',
          ),
         */
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__ . '_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                )
            )
        )
    ),
    'data-fixture' => array(
        'TenilUser_fixture' => __DIR__ . '/../src/' . __NAMESPACE__ . '/Fixture'
    )
);
