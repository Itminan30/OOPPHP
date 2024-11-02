<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Acquire form data
    $name = $_POST["name"];
    $password = $_POST["password"];

    // require files
    require_once "../Classes/Dbh.php";
    require_once "../Classes/Signup.php";

    $signup = new Signup($name, $password);
    $signup->signupUser();
} else {
}
