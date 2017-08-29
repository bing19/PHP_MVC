<?php

//namespace App\Controller;
use App\Core\Controller;

class Home extends Controller
{
    public function index () {

        $users = $this->model('Users');
        $latestUsers = $users->latestUsers();
        require 'app/view/home/index.php';
    }

    public function add ($a)
    {
        $model = $this->model('CalcModel');
        $result = $model->add($a[0], $a[1]);

        include 'app/view/home/add.php';
    }

    public function contact () {
        $model = $this->model('Contact');
        $contact = $model->showContact();
        require 'app/view/home/contact.php';
    }
}