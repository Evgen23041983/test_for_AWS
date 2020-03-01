<?
/**
 * Контроллер SiteController
 */

class SiteController
{
    public function actionIndex()
    {
        if(isset($_POST['submitadd'])) {
            $task = $_POST['task'];
            Page::InsertInfo($task);
        }

        if(isset($_POST['submitupd'])) {
            $id = $_POST['id'];
            $task = $_POST['task'];
            Page::UpdateInfo($id,$task);
        }

        if(isset($_POST['submitdel'])) {
            $id = $_POST['id'];
            Page::DeleteInfo($id);
        }
        require_once(ROOT . '/views/site/index.php');
        return true;
    }
 }
?>
