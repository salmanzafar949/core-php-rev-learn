<?php

$query = require "bootstrap.php";

$greeting = "Hello World";

$todos = $query->all('todos');

require "index.view.php";