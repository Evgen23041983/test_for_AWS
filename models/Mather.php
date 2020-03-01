<?php
class Mather
{
    public static function InsertInfo($task)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO `tasks`(`task`) VALUES (:task_bind)';
        $result = $db->prepare($sql);
        $result->bindParam(':task_bind',$task, PDO::PARAM_STR);;
        return $result->execute();
    }

    public static function GetInfo()
    {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM `tasks`';
        $result = $db->query($sql);
        $index = array();
        $i=0;
        while($row=$result->fetch()) {
            $index[$i]['id'] = $row['id'];
            $index[$i]['task'] = $row['task'];
            $i++;
        }
        return $index;
    }

    public static function UpdateInfo($id, $task)
    {
        $db = Db::getConnection();
        $sql = 'UPDATE `tasks` SET name=:task_bind WHERE id=:id_bind';
        $result = $db->prepare($sql);
        $result->bindParam(':id_bind',$id, PDO::PARAM_INT);
        $result->bindParam(':task_bind',$task, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function DeleteInfo($id)
    {
        $db = Db::getConnection();
        $sql = 'DELETE FROM `tasks` WHERE id=:id_bind';
        $result = $db->prepare($sql);
        $result->bindParam(':id_bind',$id, PDO::PARAM_INT);
        return $result->execute();
    }
}
?>