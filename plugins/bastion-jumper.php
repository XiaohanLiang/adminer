<?php

/*
 *  Bastion and his friends :)
 *
 * */

class BastionJumper{

    function __construct() {
        $_GET['username']='root';
    }

    function credentials() {
            return array(SERVER, 'root','my-secret-pw');
    }

    function login($login, $password) {
        return true;
    }

}

?>
