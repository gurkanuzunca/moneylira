<?php
namespace Src\Controllers;


class HomeController extends Controller
{

    public function indexAction($request, $response, $args)
    {


        $personRepository = $this->getRepository('Person');
        $records = $personRepository->getAll();


        $table = array(
            'checkbox' => true,
            'update' => true,
            'delete' => true,
            'cells' => array(
                array(
                    'caption' => 'İsim',
                    'column' => 'name'
                ),
                array(
                    'caption' => 'Soyisim',
                    'column' => 'surname'
                ),
                /*array(
                    'caption' => 'Durum',
                    'column' => 'status',
                    'callable' => function ($value) {
                        return $this->checkStatus($value);
                    }
                )*/
            )

        );
        return $this->render('index.twig', array(
            'title' => 'Önizleme',
            'panelTable' => $table,
            'records' => $records
        ));
    }

    public function checkStatus($value){
        if ($value == 'alacak') {
            return sprintf('<span class="label label-success">%s</span>', 'Alacak');
        } elseif ($value == 'borc') {
            return sprintf('<span class="label label-purple">%s</span>', 'Borç');
        }
    }

    public function customerAction($request, $response, $args)
    {
        return $this->render('customer.php', array('a' => 'sdasds'));
    }

}