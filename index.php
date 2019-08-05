<?php
include_once 'vendor/autoload.php';

$builder = new \DI\ContainerBuilder();
$builder->useAutowiring(false);
$builder->addDefinitions('config.php');


$container = $builder->build();

echo '<pre>';
var_dump($container->get('Date2'));