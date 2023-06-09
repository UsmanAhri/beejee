<!-- HTML-разметка для отображения списка задач -->
<ul>
    <?php foreach ($tasks as $task): ?>
        <li><?php echo $task['title']; ?></li>
    <?php endforeach; ?>
</ul>
