<?php

require __DIR__ . '/app/config/config.php';

$users = \App\Models\User::findAll();
var_dump($users);
foreach ($users as $user) {
    echo $user->user_name . ' ' . $user->user_lastname . '<br>';
}
