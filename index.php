<?php
include_once 'vendor/autoload.php';

$builder = new \DI\ContainerBuilder();
$builder->useAutowiring(false);
$builder->addDefinitions('config.php');


$container = $builder->build();


var_dump($container->get('boob'));