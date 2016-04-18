<?php


namespace Src\Support;


use Slim\Container;

class RepositoryManager
{

    private $container;


    public function __construct(Container $container)
    {
        $this->container = $container;
    }


    public function get($name)
    {
        $repository = "\\Src\\Repositories\\{$name}Repository";
        $db = $this->container->get('database');

        if ($this->container->has($repository)) {
            echo 1;
            return $this->container->get($repository);

        }
        echo 'new';
        return $this->container[$repository] = new $repository();
    }



}