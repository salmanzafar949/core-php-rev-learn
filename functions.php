<?php

function fetchAllTasks($pdoConn)
{
    $statement = $pdoConn->prepare('select * from todos');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Todo');
}

function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}