<?php
// test
require_once "base.php";
require "models/pages_model.php";

class Controller extends Base {
    
    public $configDiscPages = array(
        "home" => array("home.php", "Home"),
        "hobby" => array("hobby.php", "Hobby"),
        "language" => array("language.php", "Language"),
        "contact" => array("contact.php", "Contact"),
        "signup" => array("signup.php", "Signup"),
        "login" => array("login.php", "Login"),
        "admin" => array("admin.php", "Admin")
    );

    public $configDBPages = array("aboutme", "diverse", "articles");
    
    public function __construct() {
        $page = 'home';
        // var_dump($pages);
        if(isset($_GET['page'])) {
       		$page = $_GET['page'];	
        }
        
        if(isset($this->configDiscPages[$page])) {
            include $this->configDiscPages[$page][0];
            new $this->configDiscPages[$page][1];
            
        } else if(in_array($page, $this->configDBPages)) {
            // $result = model($page);
            $pages = new Pages_model();
            $result = $pages->get($page);  
            
            if (count($result) > 0) {
                $display = $result[0]['body']; 		
            }
            else {
            	$display = "Error 404";
            }
            
            $data = $result[0];
            
            // $data['title'] = "home page";
            // $data['body'] = "html....";
            
            // $data['menu'] = file_get_contents('views/menu.php');
            // $data['menu1'] =" Ana";
            // $data['menu2'] =" are";
            // $data['menu3'] =" mere";
            
            $this->render('views/top.php', $data);
            $this->render('views/page.php', $data);
            $this->render('views/bottom.php', $data);
        } else {
            echo 'The page doesn\'t exist!';
        }
    }
}
