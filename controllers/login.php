<?php
require_once "base.php";
require_once "models/users_model.php";

class Login extends Base {
    function __construct() {
        //encryption
        require_once "encryption.php";
        
        if(isset($_GET['logout']) && $_GET['logout']) {
            $_SESSION['logged'] = FALSE;
            session_destroy();
        }
        $data['invalidEmailPass'] = "<br />";
        //Authentication logic
        if(isset($_POST['login'])) {
            //store form email and pass
            $email = $_POST['email'];
            $enc_password = encrypt_password($_POST['password']);
            $usersObj = new Users_model();
            if($usersObj->login($email, $enc_password)) {
                $_SESSION['logged'] = TRUE;
                $_SESSION['email'] = $email;
                // $_SESSION['name'] = 'Alin';
                header('Location: http://188.166.119.187/workspace/ilear/MVC/part4/index.php?page=admin');
            } else {
                $data['invalidEmailPass'] = "Invalid email and/or password!";
            }
        }
        
        // $data['condition'] = (isset($_SESSION['logged']) && $_SESSION['logged'] ===  TRUE);
        // $data['logged'] = "You are logged in!";
        // // $data['unlogged'] = "";
        $data['logged'] = (isset($_SESSION['logged']) && $_SESSION['logged'] ===  TRUE) ? "You are logged in!" : "";
        // $data['logged'] = "You are logged in!";

    
        $data['title'] = "LoginPage";
        
        // $data['mailSent'] = "Note that only phone number is optional!";
        $this->render('views/top.php', $data);
        $this->render('views/menu.php', $data);
        $this->render('views/login.php', $data);
        $this->render('views/bottom.php', $data);
    }
}
?>
