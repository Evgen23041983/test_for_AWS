<?php
class Mather extends Model
{
    

    public static function GetInfo()
    {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM `tasks` WHERE `member`="mather"';
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

    
    
}
?>