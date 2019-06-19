<?php
namespace application\controller;

use application\core\Controller;

class AccountController extends Controller {

    public function loginAction() {
        $this->view->render('Login');
    }

    public function registerAction() {
        $this->view->render('sign up');
    }
}