<?php


namespace Src\Support;


abstract class Repository
{

    /**
     * @var Model objesi.
     */
    protected $model;


    /**
     * Repository model tanımlamasını yapar.
     *
     * @param string|object $model Model adı veya objesi.
     * @return void
     */
    public function setModel($model)
    {
        if (is_string($model)) {
            $this->model = new $model();
        } else {
            $this->model = $model;
        }
    }


}