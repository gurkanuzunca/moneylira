<?php


namespace Src\Support;


use Slim\Container;

class RepositoryManager
{

    private $container;
    private $settings;


    /**
     * RepositoryManager constructor.
     *
     * @param Container $container
     * @param array $settings
     */
    public function __construct(Container $container, array $settings)
    {
        $this->container = $container;
        $this->settings = $settings;
    }


    /**
     * @param $name Repository adı.
     * @return Repository objesi döner.
     *
     * @todo Modelin ve repository'nin varlığı kontrol edilecek. Exception fırlatılacak.
     */
    public function get($name)
    {
        $repositoryName = "{$name}Repository";
        $repository = "{$this->settings['repositoryNamespace']}\\$repositoryName";
        $model = "{$this->settings['modelNamespace']}\\$name";

        $db = $this->container->get('database');

        // Obje mevcutsai mevcut objeyi döndürür.
        if ($this->container->has($repository)) {
            return $this->container->get($repository);
        }

        // Objeyi oluşturup model tanımlamasını yapar.
        $class = new $repository();
        $class->setModel(new $model());

        return $this->container[$repository] = $class;

    }



}