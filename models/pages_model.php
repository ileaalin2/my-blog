<?php
include "Model.php";

class Pages_model extends Model {
	
	public function get($param) {
	    if($param == 'all'){
	       $sql = 'SELECT * FROM pages'; // we select all pages form the database
	    } else {
	        $sql = 'SELECT * FROM pages WHERE `key` = "' . $param . '"'; // we select a specific page from the db
	    }
	    $result = $this->makeSql($sql, TRUE);
	    //var_dump($result);
	    if(count($result) > 0) { // we check if we get a result
	        return $result;
	    } else {
	        return 'This page doesn\'t exist!'; // no result in the database
	    }
	    // some magic ...
        // return a page or a list of pages
    }
	
    public function create($param) {
        $sql = "SELECT `key` FROM pages WHERE `key` = '" . $param['key'] . "'";    
        $result = $this->makeSql($sql, TRUE);
        if(count($result) < 1) {
            $sql = "INSERT INTO pages (`key`,`title`,`body`) VALUES ('" . $param['key'] . "', '" . $param['title'] . "', '" . $param['body'] . "' )";
            $this->makeSql($sql, FALSE);
            return TRUE;
        } else {
            return FALSE;
        }
        // some magic ...
        // return true|false
    }
    
    public function storeContactForm($param) {
        $sql = "INSERT INTO contactForm (`first_name`,`last_name`,`phone`, `email`, `message`) VALUES ('".$param[0]."', '".$param[1]."', '".$param[2]."', '".$param[3]."', '".$param[4]."' )";
        if($this->makeSql($sql, FALSE)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function modify($param, $old_key) {
        
        if($param['key'] == $old_key) {
            $sql = "UPDATE pages SET `title` = '" . $param['title'] . "', `body` = '" . $param['body'] . "' WHERE `key` = '" . $param['key'] . "'";
            $this->makeSql($sql, FALSE); 
            return TRUE;
        } else {
            $sql = "SELECT `key` FROM pages WHERE `key` = '" . $param['key']. "'";
            $result = makeSql($sql, TRUE);
            if(count($result) > 0) {
                return FALSE;
            } else {
                $sql = "UPDATE pages SET `key` = '" . $param['key'] . "', `title` = '" . $param['title'] . "', `body` = '" . $param['body'] . "' WHERE `key` = '" . $old_key . "'";
                $this->makeSql($sql, FALSE);
                return TRUE;
            }
        }
        // some magic ...
        // return true|false    
    }
    
    public function del($param) {
            $sql = "SELECT * FROM pages WHERE `key` = '" . $param . "'";
            $result = $this->makeSql($sql, TRUE);
            if (count($result) > 0) {
                $sql = " DELETE FROM pages WHERE `key` = '" . $param . "'";
                $this->makeSql($sql, FALSE);
                return TRUE;
            } else {
                return FALSE;
            }
        // some magic ...
        // return true|false    
    }
}
