<?


class FatherController
{
    public function actionAdd()
    {
        if(isset($_POST['submit'])) {
           
            $member = $_POST['member'];
            $id = $_POST['id'];
            Father::UpdateInfo($id, $member);
    }
        if(isset($_POST['done']) && $_POST['done'] == 'yes') {
                $idd = $_POST['idd'];
                $done = 'Yes';
                Father::CheckboxInfo($idd, $done);
        } else {
                $idd = $_POST['idd'];
                $done = 'No';
                Father::CheckboxInfo($idd, $done);
        }
            
    

        
        require_once(ROOT . '/views/user/father.php');
        return true;
    }
 }
?>