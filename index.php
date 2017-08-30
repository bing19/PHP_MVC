<?php

require __DIR__ . '/app/config/config.php';

$users = \App\Models\User::findById([1,2,12]);
foreach ($users as $user) {
    echo $user->user_name . ' ' . $user->user_lastname . '<br>';
}


