<?php
// test
class Model {
	public function makeSql($sql, $boolean) {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=ilear", "ilear", "raeli");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $doSql = $conn->prepare($sql);
            $doSql->execute();
            if($boolean) {
               $result = $doSql->fetchAll(PDO::FETCH_ASSOC);
               $conn = null;
               return $result;//returns the result of the sql even if its empty
            } else {
                $conn = null;
                return $count = $doSql->rowCount();//returns the number of rows affected by the sql
            }
            //var_dump($result);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    
    public function validator($value, $type) {
        switch ($type) {
         	case "email":
                $pattern = '/[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[c][o][m]$/';
                $result = preg_match($pattern, $value, $matches, PREG_OFFSET_CAPTURE, 0);
                break;
            case "password":
                $pattern1 = '/[a-zA-Z._#$%^&*0-9+-]{10,}/';
                $pattern2 = '/[0-9]{1,}/';
                $pattern3 = '/[#$%^&*]{1,}/';
                $result = preg_match($pattern1, $value) && preg_match($pattern2, $value) && preg_match($pattern3, $value);
                break;
             case "name":
                $pattern = '/[a-zA-Z0-9._%+-]{4,}/';
                $result = preg_match($pattern, $value, $matches, PREG_OFFSET_CAPTURE, 0);
                break;
             default: 
             	$result =  FALSE;
        }
        // $hasErrors = ($result === TRUE) ? TRUE : FALSE;  
        return $result;
    }
}
?>
