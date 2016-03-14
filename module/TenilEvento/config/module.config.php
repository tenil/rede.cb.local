<?php

namespace TenilEvento;

use Zend\Mvc\Router\Http\Segment;

return array(
    'router' => array(
        'routes' => array(

            'tenil-evento' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/eventos[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-z0-9_-]*',
                        'id' => '[a-zA-z0-9_-]*',
                       // 'id' => '\d+',
                    ),
                    'defaults' => array(
                        '__NAMESPACE__' => 'TenilEvento\Controller',
                        'module' => 'TenilEvento',
                        'controller' => 'eventos',
                        'action' => 'list'
                    )
                ),
            )
        )
    ),
    'controllers' => array(
        'invokables' => array(
            'TenilEvento\Controller\Eventos' => 'TenilEvento\Controller\EventosController',
            'TenilEvento\Controller\Inscricoes' => 'TenilEvento\Controller\InscricoesController',
        )
    ),
    'view_manager' => array(
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
);