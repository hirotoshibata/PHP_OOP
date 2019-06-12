<?php

require_once('config/dbconnect.php');

class Todo
{
    private $table = 'tasks';
    private $db_manager;


    public function __construct()
    {
        $this->db_manager = New DbManager();
        $this->db_manager->connect();
    }

    public function all()
    {
        $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table);
        $stmt->execute();
        $tasks = $stmt->fetchAll();

        return $tasks;
    }
}