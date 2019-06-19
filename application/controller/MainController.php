<?php
namespace application\controller;

use application\core\Controller;
use application\lib\Db;

class MainController extends Controller {

    public function indexAction() {
        $vars =[
            'name' => 'Jhon',
            'age' => '22'
        ];
        $db = new Db;
        $this->view->render('indexaction',$vars);
    }

}