<?php

try
{
    $pdoConn = new PDO('mysql:localhost=127.0.0.1;dbname=mytodo','sam','123456');
}
catch (PDOException $exception)
{
    die($exception->getMessage());
}

require "functions.php";
require "Todo.php";

$greeting = "Hello World";

$statement = $pdoConn->prepare('select * from todos');
$statement->execute();
$todos = $statement->fetchAll(PDO::FETCH_OBJ);

/*$todos  = [
    new Todo('Learn Core Php'),
    new Todo('Learn Laravel', true),
    new Todo('Learn Go'),
    new Todo('Learn Python'),
    new Todo('Learn Django'),
    new Todo('Learn React Js', true),
    new Todo('Learn Vue Js', true),
];*/
//dd($greeting);

require "index.view.php";