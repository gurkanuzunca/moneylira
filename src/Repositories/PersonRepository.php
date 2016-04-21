<?php

namespace Src\Repositories;

use Src\Support\Repository;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;


class PersonRepository extends Repository
{
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