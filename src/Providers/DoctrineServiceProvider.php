<?php

declare(strict_types=1);

namespace Mvc\Providers;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\ORMSetup;

class DoctrineServiceProvider extends ServiceProvider
{

    public function provide(array $options = [])
    {
        $config = ORMSetup::createAnnotationMetadataConfiguration([],config('app.debug'));
        try {
            return EntityManager::create($this->config, $config);
        } catch (ORMException $e) {
            $e->getMessage();
        }
    }
}
