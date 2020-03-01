<?php
class UserController
{

    

    public function actionRegister()
{
    $index['title'] = 'Регистрация';
    // Объявим переменые, что не возникало ошибок
    $login = false;
    $email = false;
    $password = false;
    // Обработка формы
    if (isset($_POST['submit']))
    {
        $login = $_POST['login'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (!User::checkPassword($password)) $errors[] = 'Вы не ввели пароль, пароль меньше 6-х символов';
        if (!User::checkName($login)) $errors[] = 'Логин меньше 3-х символов';
        if (!User::checkEmail($email)) $errors[] = 'Не верно указан E-mail';
        else
        {
            // Проверяем существует ли пользователь
            $checkEmail = User::checkUserEmail($email);
            $checkLogin = User::checkUserLogin($login);
            if ($checkLogin == true) $errors[] = 'Пользователь с таким Логином, уже зарегистрирован, введите другой Логин';
            if ($checkEmail == true) $errors[] = 'Пользователь с таким E-mail, уже зарегистрирован, введите другой E-mail';
            else
            {
                $hashed_password = User::generateHash($password); // Сохраняем Хеш пароля
                if (!User::register($login, $email, $hashed_password)) $errors[] = 'Ошибка Базы Данных';
            }
        }
    }
    // Подключаем вид
    require_once(ROOT . '/views/user/register.php');
    return true;
}


    public function actionLogin()
    {
        $email = false;
        $password = false;
        if (isset($_POST['submit'])) 
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $errors = false;
            $errors[] = 'Неправильный email';
        }
        
        if (!User::checkPassword($password)) 
        {
            $errors[] = 'Пароль не должен быть короче 6-ти символов';
        }

        $check = User::checkUserDataHash($email);
        $hashed_password = $check['password'];
        $userId = $check['id'];
        if ($this->verify($password, $hashed_password) ) 
        {
            User::auth($userId);
            require_once(ROOT . '/views/site/index.php');
            return true;
        }
        else { $errors[] = 'Неправильные данные для входа на сайт';
        }
    require_once(ROOT . '/views/user/login.php');
    return true;
    }   


    public function actionLogout()
    {
        unset($_SESSION["user"]);
        session_destroy();
        header("Location: /");
        return true;
    }

    function verify($password, $hashedPassword) {
        return crypt($password, $hashedPassword) == $hashedPassword;
    }

    

}
?>