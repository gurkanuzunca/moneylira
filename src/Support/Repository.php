<?php


namespace Src\Support;


abstract class Repository
{

    protected $model;


    public function setModel($model)
    {
        if (is_string($model)) {
            $this->model = new $model();
        } else {
            $this->model = $model;
        }
    }


}