<?php

class AuthController {
    public function login() {
        require '../views/login.php';
    }

    public function authenticate() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Проверка логина и пароля, обработка ошибок
        if ($username === 'admin' && $password === 'password') {
            // Если аутентификация успешна, перенаправляем на главную страницу
            header('Location: /');
            exit();
        } else {
            // Аутентификация не удалась, показываем сообщение об ошибке
            $error = 'Неправильное имя пользователя или пароль';
            require '../views/login.php';
        }
    }

    public function logout() {
        // Логика для выхода пользователя из системы
        // Уничтожение сессии, очистка кук, сброс данных пользователя и т.д.
        // Пример:
        session_start();
        session_destroy();
        setcookie('user', '', time() - 3600);
        header('Location: /login');
        exit();
    }
}
?>
