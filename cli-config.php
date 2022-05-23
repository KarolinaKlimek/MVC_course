<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;

require __DIR__ . '/loaders/boot.php';

$paths = [__DIR__ . '/app/Models/'];
$config = ORMSetup::createAnnotationMetadataConfiguration($paths, config('app.debug'));

try {
    $entityManager = EntityManager::create(config('database'), $config);
} catch (ORMException $exception) {
    return $exception->getMessage();
}

ConsoleRunner::run(
    new SingleManagerProvider($entityManager),
);


//Run schema tool update
//For Windows: php vendor/doctrine/orm/bin/doctrine orm:schema-tool:update --force --dump-sql
//For Linux: php vendor/bin/doctrine orm:schema-tool:update --force --dump-sql

