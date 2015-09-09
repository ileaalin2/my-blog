<?php
require_once "base.php";

class Hobby extends Base {
    function __construct() {
        // $data['condition'] = (isset($_SESSION['logged']) && $_SESSION['logged'] ===  TRUE);
        // $data['logged'] = "You are logged in!";
        // $data['unlogged'] = "";
        $data['logged'] = (isset($_SESSION['logged']) && $_SESSION['logged'] ===  TRUE) ? "You are logged in!" : "";

        $data['title'] = "HobbyPage";
        $this->render('views/top.php', $data);
        $this->render('views/menu.php', $data);
        $this->render('views/hobby.php');
        $this->render('views/bottom.php', $data);
    }
}
?>
