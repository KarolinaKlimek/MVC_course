<?php

namespace Mvc\Providers;

abstract class ServiceProvider
{
    protected array $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    abstract public function provide (array $options = []);
}
