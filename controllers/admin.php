<?php
// test
require_once "base.php";

class Admin extends Base {
    function __construct() {
        if(isset($_SESSION['logged']) && $_SESSION['logged']) {
            // $data['condition'] = (isset($_SESSION['logged']) && $_SESSION['logged'] ===  TRUE);
            // $data['logged'] = "You are logged in!";
            // $data['unlogged'] = "";

            $data['logged'] = "You are logged in!";    

            $data['title'] = "AdminPage";
            $this->render('views/top.php', $data);
            $this->render('views/menu.php', $data);
            $this->render('views/admin.php', $data);
            $this->render('views/bottom.php', $data);
        } else {
            $data['logged'] = "";
            header('Location: http://188.166.119.187/workspace/ilear/MVC/part4/index.php?page=login');
        }
    }
}
?>
