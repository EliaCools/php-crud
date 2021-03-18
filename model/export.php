<?php

        //student export function
if(isset($_POST['studentExport'])){
    require 'StudentLoader.php';
    $loader = new StudentLoader();
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');
    $output = fopen("php://output", 'wb');

    while($row = $loader->exportAll()){
        fputcsv($output,$row);
    }
    fclose($output);
}
//if(isset($_POST['teacherExport'])){ ---------------adjust for teacher overview!
//
//    $e = openConnection()->prepare('SELECT studentID, firstName,lastName, email FROM student');
//    $e->execute();
//
//    header('Content-Type: text/csv; charset=utf-8');
//    header('Content-Disposition: attachment; filename=data.csv');
//    $output = fopen("php://output", 'wb');
//
//    while($row = $e->fetch(PDO::FETCH_ASSOC)){
//        fputcsv($output,$row);
//    }
//    fclose($output);
//}
?>

