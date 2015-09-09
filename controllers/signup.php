<?php
// test
require_once "base.php";
require_once "models/users_model.php";
require_once "models/Model.php";

class Signup extends Base {
    public function __construct() {
        //encryption
        require_once "encryption.php";
        
        // $data['invalidEmailPass'] = "<br />";
        //Authentication logic
        // $error = [];
  //      $data['unErrorFirstName'] = "<p><p/>";
		// $data['unErrorLastName']  = "<p><p/>";
		// $data['unErrorEmail']     = "<p><p/>";
		// $data['unErrorPassword']  = "<p><p/>";
		
  //      $data['unFormFirstName'] = "";
  //      $data['unFormLastName']  = "";
  //      $data['unFormEmail']     = "";

        $data['errorFirstName'] = "<p></p>";
        $data['errorLastName']  = "<p></p>";
        $data['errorEmail']     = "<p></p>";
        $data['errorPassword']  = "<p></p>";
        
        // $data['formFirstName'] = "";
        // $data['formLastName']  = "";
        // $data['formEmail']     = "";

        if (isset($_POST["signup"])) {
        	
        // 	$hasErrors = FALSE;
        
            $form["first_name"] = isset($_POST["first_name"]) ? $_POST["first_name"] : null;
            $form["last_name"] = isset($_POST["last_name"]) ? $_POST["last_name"] : null;
            $form["email"] = isset($_POST["email"]) ? $_POST["email"] : null;
            $form["password"] = isset($_POST["password"]) ? $_POST["password"] : null;
            $form["repassword"] = isset($_POST["repassword"]) ? $_POST["repassword"] : null;
            
            $modelObj = new Model();
            
            $countErrors = 0;
            if (!$modelObj->validator($form["first_name"], 'name')) {
            // 	$hasErrors = TRUE;
                $data['errorFirstName'] = 'Invalid first name! Please insert at least 4 characters!';
                $countErrors++;
            }
            
            if (!$modelObj->validator($form["last_name"], 'name')) {
                $data["errorLastName"] = 'Invalid last name! Please insert at least 4 characters!';
                $countErrors++;
            }
            
            if (!$modelObj->validator($form["email"], 'email')) {
                $data["errorEmail"] = 'Invalid email format!';
                $countErrors++;
            }
        
            // check for duplicate emails - the beginning 		
            $sql = 'SELECT email FROM logins WHERE email = "'.$form['email'].'"';
            $result = $modelObj->makeSql($sql, TRUE);
            $db_email = null;
            foreach ($result as $row) {
                $db_email = isset($row['email']) ? $row['email'] : null;
            }
            
            if ($db_email === $form['email']) {
                $data["errorEmail"] = "Sorry! The email already exists!";
                $countErrors++;
            }
            // check for duplicate emails - the end 		
            
            if (!$modelObj->validator($form["password"], 'password')) {
                $data["errorPassword"] = 'Invalid password! It should contain at least 10 characters <br /> with one number and one special character.';
                $countErrors++;
            }
            
            if ($form["password"] !== $form["repassword"]) {
                //Validate pass contain at least one digit
                $data["errorPassword"] = "Passwords don't match!";
                $countErrors++;
            }
            
            if ($countErrors == 0) {
             //TODO insert user (email) and pass into db
                $sql_insert = 'INSERT INTO logins (email, password, first_name, last_name) VALUES ("'.$form["email"].'", "'.encrypt_password($form["password"]).'", "'.$form["first_name"].'", "'.$form["last_name"].'")';
                $modelObj->makeSql($sql_insert, FALSE);
                // echo "New record created successfully";
                // redirect to LoginPage
                header("Location: http://188.166.119.187/workspace/ilear/MVC/part4/index.php?page=login");
            }
            // else {
        		// $data['condition'] = (isset($error["first_name"]));
          //      $data['errorFirstName'] = $error["first_name"];
          //      $data['unErrorFirstName'] = "<p></p>";

        		// $data['condition'] = (isset($error["last_name"]));
          //      $data['errorLastName'] = $error["last_name"];
          //      $data['unErrorLastName'] = "<p></p>";

        		// $data['condition'] = (isset($error["email"]));
          //      $data['errorEmail'] = $error["email"];
          //      $data['unErrorEmail'] = "<p></p>";

        		// $data['condition'] = (isset($error["password"]));
          //      $data['errorPassword'] = $error["password"];
          //      $data['unErrorPassword'] = "<p></p>";

                // $data['errorFirstName'] = $error["first_name"];
                // $data['errorLastName']  = $error["last_name"];
                // $data['errorEmail']     = $error["email"];
                // $data['errorPassword']  = $error["password"];
                
        		// $data['condition'] = (isset($form["first_name"]));
          //      $data['formFirstName'] = $form["first_name"];
          //      $data['unFormFirstName'] = "";
                
          //      $data['condition'] = (isset($form["last_name"]));
          //      $data['formLastName'] = $form["last_name"];
          //      $data['unFormLastName'] = "";
                
          //      $data['condition'] = (isset($form["email"]));
          //      $data['formEmail'] = $form["email"];
          //      $data['unFormEmail'] = "";
                
                // $data['formFirstName'] = $form["first_name"];
                // $data['formLastName']  = $form["last_name"];
                // $data['formEmail']     = $form["email"];
            // }
            
        }
        
// 		$data['condition'] = (isset($_SESSION['logged']) && $_SESSION['logged'] ===  TRUE);
// 		$data['logged'] = "You are logged in!";
// 		$data['unlogged'] = "";
		
		$data['logged'] = (isset($_SESSION['logged']) && $_SESSION['logged'] ===  TRUE) ? "You are logged in!" : "";
		
		$data['formFirstName'] = isset($form["first_name"]) ? $form["first_name"] : "";
		$data['formLastName']  = isset($form["last_name"])  ? $form["last_name"]  : "";
		$data['formEmail']     = isset($form["email"])      ? $form["email"] : "";
		
		
		
		
		$data['title'] = "SignupPage";
		// $data['mailSent'] = "Note that only phone number is optional!";
		$this->render('views/top.php', $data);
		$this->render('views/menu.php', $data);
		$this->render('views/signup.php', $data);
		$this->render('views/bottom.php', $data);
    }
}
?>
