<?php

class Dbh
{
    private $host = "localhost";
    private $dbname = "test";
    private $dbuser = "root";
    private $dbpassword = "";

    protected function connect()
    {
        try {
            // create pdo object
            $pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->dbuser, $this->dbpassword);

            // set pdo attribute
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // return new pdo object
            return $pdo;
        } catch (PDOException $e) {
            die("Connection Faild: " . $e->getMessage());
        }
    }
}
