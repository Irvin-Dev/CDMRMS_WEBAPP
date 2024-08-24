<?php
// Database credentials

function connection(){
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cdmregistrarmanagementsystem";

    // Create connection
    $con = new mysqli($host,$username, $password, $dbname);

    // Check connection
    if ($con->connect_error){
        echo $con->connect_error;
    }
    else{
        return $con;
    }

}

