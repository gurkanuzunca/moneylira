<?php

namespace Src\Controllers;


use Slim\Container;

class Controller
{
    private $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function __invoke()
    {
        // $request, $response, $args
        // TODO: Implement __invoke() method.
    }


    protected function get($service)
    {
        return $this->container->get($service);
    }





    protected function render($path, $data = array())
    {
        return $this->container->get('renderer')->render($this->container->get('response'), $path, $data);
    }



}