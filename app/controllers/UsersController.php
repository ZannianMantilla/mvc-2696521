<?php
namespace Sena\controllers;

use Sena\libs\Controller;

class UsersController extends Controller{
    protected $model = "";
    public function __construct()
    {
        $this->model = $this->model('User');
    }

    public function index(){
        $users = $this->model->getUsers();
        $data = [
            'title' => 'Listado de usuarios',
            'users' => $users,
        ];

        $this->view('/users/index', $data, 'app');
    }
    public function edit($id){
        $user = $this->model->getUser($id);
        $data = [
            'title' => 'Editar usuario',
            'user' => $user,
            ];
            $this->view('users/edit', $data, 'app');
    }   
    public function update(){
        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";
    }
}