<?php


class GroupLoader
{
    public function fetchGroup()
    {
        $pdo = openConnection();

        $sql = 'SELECT * FROM class';
        $handle = $pdo->prepare($sql);
        return $handle->execute();
    }

//$selectedUser['sports'] = [];
//$handle = $pdo->prepare('SELECT sport FROM sport where user_id = :id GROUP BY user_id');
//$handle->bindValue(':id', $_GET['id']);
//
//foreach ($handle->fetchAll() as $sport) {
//$selectedUser['sports'][] = $sport['sport'];
//
//
//}
//$handle->execute();
}