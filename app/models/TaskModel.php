<?php

class TaskModel {
    private $db;

    public function __construct() {
        // Создание соединения с базой данных
        $dsn = 'mysql:host=localhost;dbname=your_database_name';
        $username = 'your_username';
        $password = 'your_password';

        try {
            $this->db = new PDO($dsn, $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            exit;
        }
    }

    public function getAllTasks() {
        // Логика для получения всех задач из базы данных
        $query = "SELECT * FROM tasks";
        // Выполнение запроса к базе данных и получение результатов

        // Пример кода для получения данных из базы данных
        $tasks = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);

        return $tasks;
    }

    public function createTask($data) {
        // Логика для создания новой задачи с данными из формы
        $title = $data['title'];
        $description = $data['description'];

        // Пример кода для вставки данных в базу данных
        $query = "INSERT INTO tasks (title, description) VALUES ('$title', '$description')";
        // Выполнение запроса к базе данных для создания новой задачи
    }

    public function getTaskById($id) {
        // Логика для получения задачи по указанному идентификатору ($id) из базы данных
        $query = "SELECT * FROM tasks WHERE id = $id";
        // Выполнение запроса к базе данных и получение результата

        // Пример кода для получения данных из базы данных
        $task = $db->query($query)->fetch(PDO::FETCH_ASSOC);

        return $task;
    }

    public function updateTask($id, $data) {
        // Логика для обновления задачи с указанным идентификатором ($id) и данными из формы
        $title = $data['title'];
        $description = $data['description'];

        // Пример кода для обновления данных в базе данных
        $query = "UPDATE tasks SET title = '$title', description = '$description' WHERE id = $id";
        // Выполнение запроса к базе данных для обновления задачи
    }

    public function completeTask($id) {
        // Логика для отметки задачи как выполненной
        $query = "UPDATE tasks SET status = 'completed' WHERE id = $id";
        // Выполнение запроса к базе данных для обновления статуса задачи
    }

    public function deleteTask($id) {
        // Логика для удаления задачи с указанным идентификатором ($id) из базы данных
        $query = "DELETE FROM tasks WHERE id = $id";
        // Выполнение запроса к базе данных для удаления задачи
    }
}
?>
