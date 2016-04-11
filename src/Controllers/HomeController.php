<?php
namespace Src\Controllers;


class HomeController extends Controller
{

    public function indexAction($request, $response, $args)
    {
        $table = array(
            'checkbox' => true,
            'cells' => array(
                array(
                    'caption' => 'İsim',
                    'column' => 'fullname'
                ),
                array(
                    'caption' => 'Tutar',
                    'class' => 'text-right',
                    'column' => 'price'
                ),
                array(
                    'caption' => 'Durum',
                    'column' => 'status',
                    'callable' => function ($value) {
                        if ($value == 'alacak') {
                            return sprintf('<span class="label label-success">%s</span>', 'Alacak');
                        } elseif ($value == 'borc') {
                            return sprintf('<span class="label label-purple">%s</span>', 'Borç');
                        }
                    }
                )
            )

        );
        return $this->render('index.html.twig', array(
            'pageTitle' => 'Önizleme',
            'table' => $table,
            'records' => array(
                array('fullname' => 'Hasan Ballı', 'price' => '150.00 TL', 'status' => 'alacak')
            )
        ));
    }

    public function customerAction($request, $response, $args)
    {
        return $this->render('customer.php', array('a' => 'sdasds'));
    }

}