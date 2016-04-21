<?php

namespace Src\Controllers;


use Slim\Container;

class Controller
{
    /**
     * @var Container Slim container
     */
    protected $container;

    /**
     * Controller constructor.
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function __invoke()
    {
        // $request, $response, $args
        // TODO: Implement __invoke() method.
    }

    /**
     * Containerdaki servisi döndürür.
     *
     * @param string $service Servis adı
     * @return mixed
     */
    protected function get($service)
    {
        return $this->container->get($service);
    }

    /**
     * View render edilir.
     *
     * @param string $path View dosyası.
     * @param array $data Veri dizisi.
     * @return mixed
     */
    protected function render($path, $data = array())
    {
        return $this->container->get('renderer')->render($this->container->get('response'), $path, $data);
    }

    /**
     * Repository objesini döndürür.
     *
     * @param string $name Repository adı. "Repository" son eki kullanılmadan yazılmalı.
     * @return mixed
     */
    protected function getRepository($name)
    {
        return $this->container->get('repository')->get($name);
    }





}