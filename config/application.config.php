<?php
/**
 * Configuration file generated by ZFTool
 * The previous configuration file is stored in application.config.old
 *
 * @see https://github.com/zendframework/ZFTool
 */
return array(
    'modules' => array(
        'Application',
        'DoctrineModule',
        'DoctrineORMModule',
        'DoctrineDataFixtureModule',
        'TenilBase',
        'TenilUser',
        'TenilUserRest',
        'TenilAcl',
        'TenilEvento',
        'PhpBoletoZf2',
        'Cocur\Slugify\Bridge\ZF2',
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor',
        ),
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
    ),
);
