<!-- HTML-разметка для формы редактирования задачи -->
<form method="post" action="/tasks/<?php echo $task['id']; ?>">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
    <input type="text" name="title" placeholder="Заголовок" value="<?php echo $task['title']; ?>" required><br>
    <textarea name="description" placeholder="Описание"><?php echo $task['description']; ?></textarea><br>
    <button type="submit">Сохранить</button>
</form>
