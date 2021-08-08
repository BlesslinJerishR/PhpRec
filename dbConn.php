<?php

$db = mysqli_connect("localhost","root","","testDB");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
