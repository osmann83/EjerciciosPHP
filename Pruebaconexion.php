<?php

function Conectarse()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "empresa";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);


    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
    /*echo "Connected successfully<br>";

    if($result = $conn -> query("SELECT DATABASE()"))
    {
        $row = $result -> fetch_row();
        echo "Defaul database is " . $row[0] . "<br>";
        $result -> close();
    }*/

}

/*
$conn -> select_db("test");

if($result = $conn -> query("SELECT DATABASE()"))
{
    $row = $result -> fetch_row();
    echo "Defaul database is " . $row[0];
    $result -> close();
}*/
?>