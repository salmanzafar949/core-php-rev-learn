<?php

require "functions.php";
require "Todo.php";


$greeting = "Hello World";

$pdoConn = connectToDb();
$todos = fetchAllTasks($pdoConn);

var_dump($todos);
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