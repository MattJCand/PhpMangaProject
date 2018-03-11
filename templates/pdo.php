<?php
 $pdo= new PDO( 'mysql:host=localhost;dbname=planetemanga','root','root', array( PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
// try{
//     $dbh = new pdo( 'mysql:host=localhost;dbname=planetemanga',
//                     'root',
//                     'root',
//                     array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
//     die(json_encode(array('outcome' => true)));
// }
// catch(PDOException $ex){
//     die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
// }
?>

