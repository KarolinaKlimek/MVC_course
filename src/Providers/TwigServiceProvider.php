<?php

namespace Mvc\Providers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TwigServiceProvider extends ServiceProvider
{

    public function provide(array $options = [])
    {
        $loader = new FilesystemLoader($this->config['dir']);
        return new Environment($loader, [
            'cache' => $this->config['cache'],
            'auto_reload' => true
        ]);
    }
}
