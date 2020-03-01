<?php foreach (Page::GetInfo() AS $index): ?> 
    id: <?=$index['id']?>
    task: <?=$index['task']?>
<?php endforeach; ?>

<form action="" method="post" > 
Форма добавления строки в БД 
    <input name="task" type="text" value="task" />
    <input name="submitadd" type="submit" />
</form>

<form action="" method="post" >
    Форма редактирования строки БД
    <input name="id" type="text" value="id" />
    <input name="task" type="text" value="task" />
    <input name="submitupd" type="submit" />
</form>

<a href="user/login">Mather</a>