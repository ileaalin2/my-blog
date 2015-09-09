<?php
// test
require_once "base.php";
require_once "models/pages_model.php";

class Contact extends Base {
    function __construct() {
        if(isset($_POST['submit'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $phone = $_POST['phone'];
            $email = $_POST['emailaddress'];
            $message = $_POST['message'];
            
            // send an e-mail to my address
            if($firstname != '' && $lastname != '' &&  $email != '' &&  $message != '') {
                // Before setting any variabile  check if the value that you need are set, alse no need to store them line 55-60
                $to = "ilea.alin@yahoo.com";
                $subject = "Message from one of your blog's visitors";
                $header = "From: " . $lastname . " " . $firstname . " <" . $email . ">";
                // $content = $firstname . ' ' . $lastname .  ' ' . $phone . ' '  . $email . ' ' . $message;
                $content = "\nThis message has been sent from:\nFirstname: " . $firstname . "\nLastname: " . $lastname . "\nPhone: " . $phone . "\nE-mail: " . $email . "\nMessage:\n" . $message . "\n";
                $mailSent = mail($to, $subject, $content, $header);
                if($mailSent) {
                  //  $data['mailSent'] = 'Your message has been sent!';
                    // $this->render('views/contact.php', $data);
                    // echo nl2br($body);
                } else { 
                    echo '<p>Something went wrong, please try again!</p>';
                    print_r(error_get_last());
                }
            } else {
                echo '<p>You need to fill in all required fields!!</p>';
            }
            // save form data in public/files/text.txt
            // 	$file = "public/files/text.txt";
            // 	file_put_contents($file, $content, FILE_APPEND);
            
            // save contact form fields in the DB, table contactForm
            $param = array($firstname, $lastname, $phone, $email, $message);
            $mailStore = new Pages_model;
            $mailStore->storeContactForm($param);
        }

        // $data['condition'] = (isset($_SESSION['logged']) && $_SESSION['logged'] ===  TRUE);
        // $data['logged'] = "You are logged in!";
        // $data['unlogged'] = "";

        $data['logged'] = (isset($_SESSION['logged']) && $_SESSION['logged'] ===  TRUE) ? "You are logged in!" : "";

        // $data['condition'] = (isset($_SESSION['logged']) && $_SESSION['logged'] ===  TRUE);
        // $data['no'] = "No";
        // $data['yes'] = "Yes";

        $data['title'] = "ContactPage";
        // $data['mailSent'] = "Note that only phone number is optional!";
        // $this->render('views/top.php', $data);
        $this->render('views/top.php', $data);
        $this->render('views/menu.php', $data);
        $this->render('views/contact.php', $data);
        $this->render('views/bottom.php', $data);

        
        // $data["team"] = array(
        //             'ilear'    => 'My site',
        //             'ciosanp'  => 'Ciosan Paul',
        //             'mocans'   => 'Mocan Daniel',
        //             'hacicua'  => 'Hacicu Alex',
        //             'lazurcaa' => 'Lazurca Andrei',
        //             'fatig'    => 'Fati Romeo',
        //             'echertr'  => 'Echert Robert',
        //             'hadarigd' => 'Hadarig Dan',
        //             'hanganut' => 'Hanganu Dora',
        //             'prodans'  => 'Prodan Sergiu',
        //             'girdanr'  => 'Girdan Roxana',
        //             'tanasea'  => 'Tanase Andrei',
        //             'simonv'   => 'Simon Daniel',
        //             'vomveab'  => 'Vomvea Bogdan');
        
        
        
        // $data["team"] = array(
        //     array("username" => "ilear", "name" => "Alin Ilea"), 
        //     array("username" => "aaa", "name" => "Paul")
        // );
        // $this->render('views/bottom.php', $data);
    }
}

?>
