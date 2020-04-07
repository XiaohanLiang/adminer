<?php

/*
 *  Bastion and his friends :)
 *
 * */

class BastionJumper{

    var $tokens;

    function __construct($raw) {
        $this->tokens = $raw;
    }

    function credentials() {
    
        $args=decrypt($this->raw);
        if ($args == false) {
            return array('','','');
        }

        $username=$ret->{'bastionuser'};
        $accountName=$ret->{'accountName'};
        $instanceName=$ret->{'instanceName'};
        $password=$args->{'user_password'};
        
        return array(
            "127.0.0.1:9501", 
            "$username/$accountName@$instanceName",
            $password,
        ); 
    }

    function login($login, $password) {
        return true;
    }

    function decrypt($raw) {
        exec("./decrypt $raw",$ret,$code);
        if ($code != 0) {
            return false;
        }
        $opt=json_decode($ret[0]);
        return $opt->{'Arg'};
    }

}

?>
