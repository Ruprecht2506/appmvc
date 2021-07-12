<?php
class Login extends Controller {
    function __construct() {
        parent::__construct();
        error_log('Login::CONSTRUCT-> inicio de login');
    }

    function render(){
        $this->view->render('login/index');
        error_log('Login::render-> Carga el index de login');
    }
}
?>