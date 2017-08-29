<?php

namespace App\Core;
use PDO;

class Controller
{
    public $db = null;
    public $model = null;
    function __construct() {
         $this->openDatabaseConnection();
        // $this->loadModel();
    }
    private function openDatabaseConnection() {
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
        $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);
    }
    public function model($model)
    {
        require_once 'app/models/' . ucfirst($model) . '.php';
        return new $model($this->db);
    }
}