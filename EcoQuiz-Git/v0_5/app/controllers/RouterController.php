<?php

require_once '../config/db.php';

class RouterController {
    private $model;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
    }

    public function start() {
        include_once '../app/views/inicio_view.php';
    }

    public function beggin() {
        include_once '../app/views/intro_view.php';
    }

    public function about() {
        include_once '../app/views/sobre_view.php';
    }

    public function support() {
        include_once '../app/views/contato_view.php';
    }

    public function contact() {
        include_once '../app/views/contatar-equipe_view.php';
    }

    public function termUse1() {
        include_once '../app/views/termosdeuso1.php';
    }

    public function termUse2() {
        include_once '../app/views/termosdeuso2.php';
    }

    public function termUse3() {
        include_once '../app/views/termosdeuso3.php';
    }

    public function colab() {
        include_once '../app/views/colaboradores_view.php'; 
    }

    public function privacy() {
        include_once '../app/views/pol-privacidade1.php'; 
    }

    public function privacy2() {
        include_once '../app/views/pol-privacidade2.php'; 
    }

    public function privacy3() {
        include_once '../app/views/pol-privacidade3.php'; 
    }

    public function privacy4() {
        include_once '../app/views/pol-privacidade4.php'; 
    }

    public function privacy5() {
        include_once '../app/views/pol-privacidade5.php'; 
    }
    
    public function privacy6() {
        include_once '../app/views/pol-privacidade6.php'; 
    }

    public function privacy7() {
        include_once '../app/views/pol-privacidade7.php'; 
    }

    public function thanks() {
        include_once '../app/views/agradecimento_view.php';
    }

}