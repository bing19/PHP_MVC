<?php
/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 27.08.17
 * Time: 15:41
 */

namespace App;

use PDO;

class Db
{
    protected $dbh;

    /**
     * Db constructor.
     */
    public function __construct()
    {
        try {
            $this->connect();

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

    }

    /**
     * @return $this
     */
    private function connect() {
        $dsn = 'mysql:host=' . DB_HOST .';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;

        $options = [
//            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
            PDO::ATTR_PERSISTENT => true

        ];

        $this->dbh = new PDO($dsn, DB_USER, DB_PASS, $options);

        return $this;
    }

    /**
     * @param $sql
     * @return mixed
     */
    public function execute($sql, array $param = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        return $res;
    }

    /**
     * @param $sql
     * @return array
     */
    public function query($sql, array $param = [], $class = null)
    {
        $result;

        if(empty($param)) {
            $sth = $this->dbh->prepare($sql);
            $res = $sth->execute();
            if(false !== $res) {
                return $sth->fetchAll(PDO::FETCH_CLASS, $class);
            } else {
                return [];
            }
        } else {

            for ($i = 0; $i < count($param); $i++){
                $sth = $this->dbh->prepare($sql);
                $res = $sth->execute([':id' => $param[$i]]);

                if (false !== $res) {
                    $result[] = $sth->fetchAll(PDO::FETCH_CLASS, $class)[0];
                } else {
                    $result = [];
                }
            }

            return $result;
        }
    }
}