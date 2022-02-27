<?php
    $host = "localhost";
    $user = "root";
    $password = "Judelpogisobra1";
    $database = "covid_case";

    $connect = new mysqli($host, $user, $password);
    $connect->query("CREATE DATABASE $database;");

    $connect = new mysqli($host,$user,$password,$database);
?>