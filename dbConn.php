<?php

$server = "sql207.epizy.com";
$username = "epiz_29372159";
$password = "kLHc4RXEr75JF";
$dbname = "epiz_29372159_tblemp";

$db = mysqli_connect($server, $username, $password, $dbname);

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
