<?php

    $database= new mysqli("localhost","root","","health");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>