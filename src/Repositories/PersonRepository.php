<?php

namespace Src\Repositories;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;

use Src\Models\Person;

class PersonRepository
{
    private $model;

    public function __construct()
    {
        $this->model = new Person();
    }

    public function getAll()
    {
        return $this->model->all();
    }


    public function createPersonTable()
    {
        Manager::schema()->create('persons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
        });
    }



}