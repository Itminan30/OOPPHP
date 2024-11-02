<?php

class signup extends Dbh
{

    private $name;
    private $password;

    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = $password;
    }

    private function insertUser()
    {
        $query = "INSERT INTO users(username, password) VALUES (:name, :password);";
        $stmt = parent::connect()->prepare($query);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":password", $this->password);
        $stmt->execute();
    }

    private function isInputEmpty()
    {
        if (isset($this->name) && isset($this->password))
            return false;
        else
            return true;
    }

    public function signupUser()
    {
        // Error Handling
        if ($this->isInputEmpty()) {
            header("Location: " . $_SERVER["DOCUMENT_ROOT"] . "/index.php");
            die();
        }

        // no errors insert user
        $this->insertUser();
    }
}
