<?


class MatherController
{
    public function actionAdd()
    {
        if(isset($_POST['submitadd'])) {
            $task = $_POST['task'];
            Mather::InsertInfo($task);
            
    }

        if(isset($_POST['done']) && $_POST['done'] == 'yes') {
            $idd = $_POST['idd'];
            $done = 'Yes';
            Mather::CheckboxInfo($idd, $done);
        } else {
            $idd = $_POST['idd'];
            $done = 'No';
            Mather::CheckboxInfo($idd, $done);
    }

        
        require_once(ROOT . '/views/user/mather.php');
        return true;
    }
 }
?>