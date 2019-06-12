<?php

require_once('Models/Todo.php');

$task = $_POST['task'];
$id = $_POST['id'];

$todo = New Todo;

$todo->update($task, $id);

header('Location: index.php');