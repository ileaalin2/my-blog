<?php
    define('SALT', 'weryosloku'); 
    function encrypt_password($password) {
        return (sha1($password.SALT));
    }
?>
