<?php
require_once '../model/db_connection.controller.php';
class registration{
    public $username;
    public $password;
    public $email;
    public $phone_number;
    public $image;
    public $user_type;

    function __construct(){
        $this->username='NULL';
        $this->password='NULL';
        $this->email='NULL';
        $this->phone_number='NULL';
        $this->image='NULL';
        $this->user_type='NULL';

    }

    function user_add($username,$password,$email,$phone_number,$image,$user_type){
        $db = new Mysqli();
        $db->insertInto('users',$username );
        $db->insertInto('users',$password );
        $db->insertInto('users',$phone_number );
        $db->insertInto('users',$email );
        $db->insertInto('users',$image );
        $db->insertInto('users',$user_type );
    }

}