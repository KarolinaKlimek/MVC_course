<?php

namespace Mvc\Providers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFunction;

class TwigServiceProvider extends ServiceProvider
{

    public function provide(array $options = [])
    {
        $loader = new FilesystemLoader($this->config['dir']);
        $twig = new Environment($loader, [
            'cache' => $this->config['cache'],
            'auto_reload' => true
        ]);

        $functionAsset = new TwigFunction('asset', function(string $file) {
            return '/assets/' . $file;
        });

        $functionCurrentYear = new TwigFunction('year', function () {
            return date('Y');
        });

        $functionConfig = new TwigFunction('config', function (string $config) {
            return config($config);
        });

        $twig->addFunction($functionAsset);
        $twig->addFunction($functionCurrentYear);
        $twig->addFunction($functionConfig);

        return $twig;
    }

}
