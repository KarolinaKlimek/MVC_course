<?php
use Mvc\Exceptions\ExceptionHandler;

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
        if(isset($configs[$configArray[0]])) {
            $fromConfig = $configs[$configArray[0]];
            if(isset($fromConfig[$configArray[1]]))
                return $fromConfig[$configArray[1]];
        }

        throw new ExceptionHandler('Config ' . $config . ' does not exists.');
    } catch (ExceptionHandler $exception) {
        exit($exception->report());
    }
}
