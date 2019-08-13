<?php
class User{
  private $userid;
  private $firstname;
  private $password;

  public function __construct(){

  }

  public function getUserId(){
    return $this->userid;
  }

  public function setUserId($userid){
    $this->userid = $userid;
  }

  public function getFirstname(){
    return $this->firstname;
  }

  public function setFirstname($firstname){
    $this->firstname = $firstname;
  }

  public function getPassword(){
    return $this->password;
  }

  public function setPassword($password){
    $this->password = $password;
  }

}

 ?>
