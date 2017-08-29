<?php

require __DIR__ . '/app/config/config.php';


use app\Db;


$db = new Db();
//$res = $db->execute("INSERT INTO `Users` (user_name, user_lastname) VALUES ('Дима', 'Димитрий')");
$arr = $db->query('SELECT user_name FROM Users');
//var_dump($arr);
foreach ($arr as $name) {
    echo $name . '<br>';
}
