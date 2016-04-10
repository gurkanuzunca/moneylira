<?php
namespace Src\Controllers;


class HomeController extends Controller
{

    public function indexAction($request, $response, $args)
    {
        return $this->render('index.html.twig', array(
            'title' => 'Önizleme',
            'hideCheckbox' => true,
        ));
    }

    public function customerAction($request, $response, $args)
    {
        return $this->render('customer.php', array('a' => 'sdasds'));
    }

}