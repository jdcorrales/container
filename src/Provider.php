<?php
/**
 * Created by PhpStorm.
 * User: juand
 * Date: 25/03/2019
 * Time: 6:10 PM
 */

namespace Jdcorrales\Container;

abstract class Provider
{

    /**
     * @var Container
     */
    protected $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    abstract public function register ();
}