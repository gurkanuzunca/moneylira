<?php
namespace Src\Controllers;


class HomeController extends Controller
{

    public function indexAction($request, $response, $args)
    {
        print_r($args);
        return $this->render('index.php', array('a' => 'sdasds'));
    }

}