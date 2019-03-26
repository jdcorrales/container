<?php
/**
 * Created by PhpStorm.
 * User: juand
 * Date: 25/03/2019
 * Time: 4:29 PM
 */

namespace Jdcorrales\Container;

class Application
{
    protected $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }


    public function registerProviders (array $providers)
    {
        foreach ($providers as $provider) {
            $provider = new $provider($this->container);
            $provider->register();
        }
    }
}