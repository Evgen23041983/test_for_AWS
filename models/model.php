<?php
class Model
{
    

    public static function InsertInfo($task)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO `tasks` VALUES (NULL, "", :task_bind, "")';
        $result = $db->prepare($sql);
        $result->bindParam(':task_bind',$task, PDO::PARAM_STR);
        return $result->execute();
    }

   

    public static function GetInfoUsers()
    {
        $db = Db::getConnection();
        $sql = 'SELECT `login` FROM `users` ';
        $result = $db->query($sql);
        $index = array();
        $i=0;
        while($row=$result->fetch()) {
            $index[$i]['login'] = $row['login'];
            
            $i++;
        }
        return $index;
    }


    public static function CheckboxInfo($idd, $done)
    {
        $db = Db::getConnection();
        $sql = 'UPDATE `tasks` SET done=:done_bind WHERE id=:idd_bind';
        $result = $db->prepare($sql);
        $result->bindParam(':idd_bind',$idd, PDO::PARAM_INT);
        $result->bindParam(':done_bind',$done, PDO::PARAM_STR);
        return $result->execute();
    }
    
    
}
?>