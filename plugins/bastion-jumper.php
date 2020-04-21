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
        
        exec("../decrypt $this->tokens",$ret,$code);
        if ($code != 0) {
            return array('','','');
        }

        $opt=json_decode($ret[0]);
        $args=$opt->{'Arg'};
        $username=$args->{'bastionuser'};
        $accountName=$args->{'accountName'};
        $instanceName=$args->{'instanceName'};
        $password=$args->{'user_password'};
        
        $_GET["username"] = "$username/$accountName@$instanceName";
        $_GET["server"] ='127.0.0.1:9501';

        //$server="127.0.0.1:1433";
        //$username="sa";
        //$password="";
        
       return array($server,$username,$password); 
    }

    function login($login, $password) {
        return true;
    }

}

?>
