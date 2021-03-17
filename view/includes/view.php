<?php
require '../../model/PDO.php';
require 'header.php' ;
$pdo = openConnection();
$handle = $pdo->prepare( "SELECT * FROM person INNER JOIN student AS s ON person.ID = s.personID");
$handle->bindValue(':id',3);
$handle->execute();
$result = $handle->fetchAll();
//pre_r($resultStudents);
var_dump($result['firstName']);

