<?php
namespace application\controller;

use application\core\Controller;

class MainController extends Controller {

    public function indexAction() {
        $vars =[
            'name' => 'Jhon',
            'age' => '22'
        ];
        $this->view->render('indexaction',$vars);
        echo 'home page';
    }

}