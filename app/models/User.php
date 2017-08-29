<?php
/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 29.08.17
 * Time: 22:08
 */

namespace App\Models;


use App\Db;

class User
{
    const TABLE = 'Users';
    public $user_name;
    public $user_lastname;

    public static function findAll ()
    {
        $db = new Db();
        return $db->query(
            'SELECT user_name, user_lastname FROM ' . self::TABLE,
            self::class
        );
    }


}