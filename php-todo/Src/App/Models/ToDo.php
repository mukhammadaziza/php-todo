<?php

namespace Src\App\Models;

use Src\Core\Database;

/**
 * ToDo model
 */
class ToDo {
    /**
     * Database object
     */
    protected $database;
    /**
     * PDO object
     */
    protected $pdo;

    public function __construct()
    {
        $this->database = new Database();
        $this->pdo = $this->database->getConnection();
    }

    /**
     * Create a task
     */
    public function create($data)
    {
        $sql = "INSERT INTO todos (title, completed) VALUES (:title, :completed)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':title', $data['title']);
        $stmt->bindValue(':completed', $data['completed']);
        return $stmt->execute();
    }

    /**
     * Update a task
     */
    public function update($id, $data)
    {
        $sql = "UPDATE todos SET title = :title WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':title', $data['title']);
        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function completed($id, $data)
    {
        $sql = "UPDATE todos SET completed = :completed WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':completed', $data['completed']);
        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }

    /**
     * Delete a task
     */
    public function delete($id)
    {
        $sql = "DELETE FROM todos WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }

    /**
     * Get all tasks
     */
    public function getAllToDo()
    {
        $sql = "SELECT * FROM todos ORDER BY id DESC";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    /**
     * Get task by id
     */
    public function getToDoById($id)
    {
        $sql = "SELECT * FROM todos WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }
}