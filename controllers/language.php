<?php
// test
require_once "base.php";

class Language extends Base {
    function __construct() {
        // $data['condition'] = (isset($_SESSION['logged']) && $_SESSION['logged'] ===  TRUE);
        // $data['logged'] = "You are logged in!";
        // $data['unlogged'] = "";
        $data['logged'] = (isset($_SESSION['logged']) && $_SESSION['logged'] ===  TRUE) ? "You are logged in!" : "";

        $data['title'] = "LanguagePage";
        $this->render('views/top.php', $data);
        $this->render('views/menu.php', $data);
        $this->render('views/language.php');
        $this->render('views/bottom.php', $data);
    }
}
?>
