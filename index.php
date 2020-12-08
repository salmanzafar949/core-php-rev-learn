<?php

require "Todo.php";
require "database/Connection.php";
require "database/QueryBuilder.php";

$greeting = "Hello World";

$pdoConn = Connection::make();
$query = new QueryBuilder($pdoConn);
$todos = $query->all('todos');

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