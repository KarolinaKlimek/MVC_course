<?php
use Mvc\Exceptions\ExceptionHandler;
use Mvc\Http\Response\Response;
use Mvc\Providers\DoctrineServiceProvider;

function env(string $key, $default)
{
    if(isset($_ENV[$key]))
        return $_ENV[$key];

    return $default;
}

function config(string $config)
{
    $configs = require __DIR__ . '/../loaders/config.php';
    $configArray = explode( '.', $config);

    try {
        if (isset($configs[$configArray[0]])) {
            $fromConfig = $configs[$configArray[0]];
            if (isset($configArray[1])) {
                if (isset($fromConfig[$configArray[1]]))
                    return $fromConfig[$configArray[1]];
            } else
                return $fromConfig;
        }

        throw new ExceptionHandler('Config ' . $config . ' does not exists.');
    } catch (ExceptionHandler $exception) {
        exit($exception->report());
    }
}

function response()
{
    return new Response();
}

function getEntityManager()
{
    $doctrine = new DoctrineServiceProvider(config('database'));
    return $doctrine->provide();
}
