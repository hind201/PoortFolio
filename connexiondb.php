<?php
$host ="localhost";
$user = "root";
$password = "" ;
$dbname = "portfolio";
$connection = mysqli_connect($host,$user,$password,$dbname);
if(mysqli_connect_error()) {
    die("Failed to connect with MySQLI:". mysqli_connect_error() );
}

?>


<!-- // $dsn = 'mysql:host=localhost; dbname=portfolio';
// $user = 'root';
// $pass = '';
// $options = array(
//     PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8', // pour provient les infos a un form d'array
// );

// try{
//     $db = new PDO($dsn, $user, $pass, $options);
//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     // echo "connection seccess";

// }
// catch(PDOExeption $e)
// {
//     echo 'Failed!' . $e->getMessage(); -->