<!-- HTML-разметка для формы входа -->
<form method="post" action="/login">
    <input type="text" name="username" placeholder="Имя пользователя" required><br>
    <input type="password" name="password" placeholder="Пароль" required><br>
    <button type="submit">Войти</button>
    <?php if (isset($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
</form>
