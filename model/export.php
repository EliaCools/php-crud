<?php
require 'PDO.php';
            //student export
if(isset($_POST['studentExport']))
{
    $e = openConnection()->query('SELECT studentID, firstName,lastName, email, phone FROM student');

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');
    $output = fopen("php://output", 'wb');

    while($row = $row = $e->fetch(PDO::FETCH_ASSOC)){
        fputcsv($output,$row);
    }
    fclose($output);
}
            //teacher export
if(isset($_POST['teacherExport']))
{
    $e = openConnection()->query('SELECT teacherID, firstName, lastName, email, phone FROM teacher');

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');
    $output = fopen("php://output", 'wb');

    while($row = $e->fetch(PDO::FETCH_ASSOC)){
        fputcsv($output,$row);
    }
    fclose($output);
}
            //class export
if(isset($_POST['classExport']))
{
    $e = openConnection()->query('SELECT classID, className, location FROM class');

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');
    $output = fopen("php://output", 'wb');

    while($row = $e->fetch(PDO::FETCH_ASSOC)){
        fputcsv($output,$row);
    }
    fclose($output);
}
?>
