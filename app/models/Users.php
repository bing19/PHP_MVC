<?php

/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 23.08.17
 * Time: 00:00
 */
class Users
{
    public function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            die ($e);
        }
    }

    public function latestUsers()
    {

        $sql = 'SELECT * FROM users ORDER BY createdate DESC';
        $query = $this->db->query($sql);
        return $query->fetchAll();
    }
}