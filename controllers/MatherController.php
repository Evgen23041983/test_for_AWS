<?


class MatherController
{
    public function actionAdd()
    {
        if(isset($_POST['submitadd1'])) {
            $task = $_POST['task1'];
            Mather::InsertInfo($task);
            
        }

        
        require_once(ROOT . '/views/user/index.php');
        return true;
    }
 }
?>