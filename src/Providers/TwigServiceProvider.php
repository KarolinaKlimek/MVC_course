<?php

namespace Mvc\Providers;

use Mvc\Messages\Messages;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFunction;


class TwigServiceProvider extends ServiceProvider
{

    private Messages $messages;

    public function __construct($config)
    {
        parent::__construct($config);
        $this->messages = new Messages();
    }

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

        $functionMessage = new TwigFunction('__',function (string $message, array $params = []) {
           return $this->messages->get($message,$params);
        });

        $twig->addFunction($functionAsset);
        $twig->addFunction($functionCurrentYear);
        $twig->addFunction($functionConfig);
        $twig->addFunction($functionMessage);

        return $twig;
    }

}
