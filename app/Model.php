<?php

namespace App;

abstract class Model
{
    const TABLE = '';

    public static function findAll ()
    {
        $db = new Db();
        return $db->query(
            'SELECT user_name, user_lastname FROM ' . static::TABLE,
            static::class
        );
    }

}