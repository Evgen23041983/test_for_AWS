<?php foreach (Page::GetInfo() AS $index): ?> 
    id: <?=$index['id']?>
    task: <?=$index['task']?>
<?php endforeach; ?>


</table>

<form action="" method="post" > 
Форма добавления строки в БДll 
    <input name="task1" type="text" value="task" />
    <input name="submitadd1" type="submit" />
</form>