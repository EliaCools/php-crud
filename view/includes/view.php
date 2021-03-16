<?php
require '../../model/PDO.php';

$pdo = openConnection();
$resultStudents= $pdo->query('select * from person
    inner join student s on person.ID = s.personID');

require 'header.php';










require 'footer.php';

