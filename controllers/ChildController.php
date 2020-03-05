<?


class ChildController
{
    public function actionAdd()
    {
        
        if(isset($_POST['done']) && $_POST['done'] == 'yes') {
            $idd = $_POST['idd'];
            $done = 'Yes';
            Child::CheckboxInfo($idd, $done);
        } else {
            $idd = $_POST['idd'];
            $done = 'No';
            Child::CheckboxInfo($idd, $done);
    }

        
        require_once(ROOT . '/views/user/child.php');
        return true;
    }
 }
?>