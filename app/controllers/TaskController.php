<?php

class TaskController {
    public function index() {
        $taskModel = new TaskModel();
        $tasks = $taskModel->getAllTasks();
        require '../views/index.php';
    }

    public function create() {
        require '../views/create.php';
    }

    public function store() {
        $taskModel = new TaskModel();
        $data = $_POST;
        $taskModel->createTask($data);
        header('Location: /');
    }

    public function edit($id) {
        $taskModel = new TaskModel();
        $task = $taskModel->getTaskById($id);
        require '../views/edit.php';
    }

    public function update($id) {
        $taskModel = new TaskModel();
        $data = $_POST;
        $taskModel->updateTask($id, $data);
        header('Location: /');
    }

    public function complete($id) {
        $taskModel = new TaskModel();
        $taskModel->completeTask($id);
        header('Location: /');
    }
}
?>
