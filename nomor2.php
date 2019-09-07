<?php
    function is_username_valid($username) {
        return preg_match('/^[a-z][a-z]{5,9}+$/',$username);
    }
    function is_password_valid($password) {
        return preg_match("#.*^(?=.{8})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#",$password);
    }
   
    $username = "Xrutaf8$";
    if (is_username_valid($username)) {
        echo "Username Is Valid <br>" ;
    } else {
        echo "Username Is Invalid <br>" ;
    }
    $username = "eliana";
    if (is_username_valid($username)) {
        echo "Username Is Valid <br>" ;
    } else {
        echo "Username Is Invalid <br>" ;
    }
    $password = "Azaajj7$";
    if (is_password_valid($password)) {
        echo "Password Is Valid <br>" ;
    } else {
        echo "Password Is Invalid <br>" ;
    }
    
    $password = "C0d1ngyour";
    if (is_password_valid($password)) {
        echo "Password Is Valid <br>" ;
    } else {
        echo "Password Is Invalid <br>" ;
    }
?>