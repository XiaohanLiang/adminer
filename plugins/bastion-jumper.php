<?php

/*
 *  Bastion cake
 *
 * */

class BastionJumper{

    var $tokens;

    function __construct() {
        // error_log(print_r($some, TRUE)); 
        $this->tokens = $_GET["setting"];
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
    
        // error_log(print_r(SERVER, TRUE)); 
        
        // $password="my-secret-pw";
        // $_GET["username"] = "$username/$accountName@$instanceName";
        // $_GET["username"] = "xiaohan/mysql-root@delete_me";
        // $_GET["username"] = "root";
        // $_GET["server"] ='10.226.211.165:9501';
        // $_GET["server"] ='127.0.0.1:3306';

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
