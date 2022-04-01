<?php
class DBConfig extends model
{
  protected $servername;
  protected $username;

  protected $password;
  protected $dbname;

  public function __construct()
  {

  }

  public function dbConfig()
  {
    //*****
  }

}

class mysqli extends DBConfig
{
  protected $connectionstring;
  protected $dataset;
  protected $subqeury;
  protected $dbname; //inherited
  protected $hostname;
  protected $username;
  protected $password; //user or db??

  public function __construct()
  {

  }

  public function mysqli()
  {
    //*****
  }


  public function dbconnect()
  {
    //*****
  }

  public function dbdisconnect()
  {
    //*****
  }

  public function selectall()
  {
    //*****
  }


  public function selectwhere()
  {
    //*****
  }


  public function insertinto()
  {
    //*****
  }

}


public class registeration extends model
{
  protected $username;
  protected $password;
  protected $email;
  protected $phonenumber;
  protected $image;
  protected $usertype;


  public function __construct()
  {

  }

  public function useradd()
  {

  }


}


public class login extends model
{
  protected $email;
  protected $password;

  public function __construct()
  {

  }


  public function userlogin()
  {

  }


}



public class logout extends model
{
  protected $email;
  protected $password;

  public function __construct()
  {

  }


  public function userlogout()
  {

  }

}


public class product extends registeration
{
  protected $productid;
  protected $companyno;
  protected $image;
  protected $description;
  protected $username;

  public function addproduct()
  {

  }

  public function deleteproduct()
  {

  }

  public function modifyproduct()
  {

  }


}


public class usermodify extends registeration
{
  public function modifyuser()
  {

  }
}


public class deleteuser extends registeration
{
  public function deleteuser()
  {

  }
}
