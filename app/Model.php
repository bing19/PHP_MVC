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
            [],
            static::class
        );
    }

    public static function findById($id)
    {
        $db = new Db();
        $sql = 'SELECT user_name, user_lastname FROM ' . static::TABLE . ' WHERE id = :id';
        $data = $db->query($sql, $id, static::class);
        return $data ? $data : false;
    }


}