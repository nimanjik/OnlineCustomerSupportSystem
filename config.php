<?php
    $servername = "localhost";
    $username= "root";
    $passwoed = "";
    $dbname = "HelpDesk";

    $con = new mysqli($servername , $username ,$passwoed, $dbname);

    if($con -> connect_error)
    {
        die("Connection Faild.." . $con->connect_error);
    }
?>