<?php
namespace Sena\controllers;

use Sena\libs\Controller;

class MainController extends Controller{
    public function __construct(){}
    public function index(){

        $data = [
            'title' => "Portada del proyecto"
        ];
        $this->view('home', $data ,'app');
    }
}