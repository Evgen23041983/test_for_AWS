<?php
class Father extends Model
{
    

    public static function UpdateInfo($id, $member)
    {
        $db = Db::getConnection();
        $sql = 'UPDATE `tasks` SET member=:member_bind WHERE id=:id_bind';
        $result = $db->prepare($sql);
        $result->bindParam(':id_bind',$id, PDO::PARAM_INT);
        $result->bindParam(':member_bind',$member, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function GetInfo()
    {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM `tasks`';
        $result = $db->query($sql);
        $indexx = array();
        $i=0;
        while($row=$result->fetch()) {
            $indexx[$i]['id'] = $row['id'];
            $indexx[$i]['task'] = $row['task'];
            $indexx[$i]['member'] = $row['member'];
            $indexx[$i]['done'] = $row['done'];
            $i++;
        }
        return $indexx;
    }

   
    
}
?>