<?php
require_once 'UserDataAccessObject.php';
require_once 'User.php';
if(!empty($_POST['firstName'])){
  $newUser = new User;
  $newUser->setUserId($_POST['uid']);
  $newUser->setFirstname($_POST['firstName']);
  $newUser->setPassword($_POST['password']);
  $DAO = new UserDAO;
  $DAO->insertUser($newUser);
  //$DAO->SelectAll();
}
include('indexui.php');
 ?>
