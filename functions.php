<?php

function connectToDb()
{
    try
    {
         return new PDO('mysql:localhost=127.0.0.1;dbname=mytodo','sam','123456');
    }
    catch (PDOException $exception)
    {
        die($exception->getMessage());
    }
}

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