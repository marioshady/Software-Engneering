<?php
require_once '../model/db_connection.controller.php';
require_once '../model/user.controller.class.php';
class login{
    public $username;
    public $password;
    

    function __construct(){
        $this->username='NULL';
        $this->password='NULL';
     
    }

    function user_login($username,$password){
        $db = new Mysqli();
        $n = $db->selectWhere('users','username','=',$username,'char');
        $p = $db->selectWhere('users','password','=',$password,'char');
    }

}