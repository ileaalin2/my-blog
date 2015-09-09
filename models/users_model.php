<?php
require_once "Model.php";

class Users_model extends Model {
    public function login($email, $enc_password) {
        //check if email exists in db
        $sql = 'SELECT `email`, `password` FROM logins WHERE `email` = "' . $email . '"';
        $req = $this->makeSql($sql, TRUE);
        if(count($req) < 1) {
            return FALSE;
        } else {
            //retrieve email and password from db by email
            return $req;
        }
        $db_password = '';
        foreach ($req as $row) {
            $db_password = isset($row['password']) ? $row['password'] : null;
        }

        //used for obtain enc value of the password
        // 	$pass = ['1234', 'qwer', 'asdf', '!@#$'];
        // 		foreach($pass as $value) {
        // 	}
    
        if ($enc_password === $db_password) {
            // $logged = 1;
            return TRUE;
        } else {
            return FALSE; //'Passwords don't match!';
        }
    // some magic ...
    // return true|false
    }
    
    public function create(/*?*/) {

        // some magic ...
        // return true|false    
    }
    
    public function del(/*?*/) {
        // some magic ...
        // return true|false    
    }
}
