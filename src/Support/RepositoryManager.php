<?php


namespace Src\Support;


use Slim\Container;

class RepositoryManager
{

    private $container;
    private $settings;


    public function __construct(Container $container, array $settings)
    {
        $this->container = $container;
        $this->settings = $settings;
    }


    public function get($name)
    {
        $repositoryName = "{$name}Repository";
        $repository = "{$this->settings['repositoryNamespace']}\\$repositoryName";
        $model = "{$this->settings['modelNamespace']}\\$name";

        $db = $this->container->get('database');

        if ($this->container->has($repository)) {
            return $this->container->get($repository);
        }

        $class = new $repository();
        $class->setModel(new $model());

        return $this->container[$repository] = $class;

    }



}