<?php
require_once 'UserDataAccessObject.php';
require_once 'User.php';
if(!empty($_POST['firstName'])){
  $newUser = new User;
  $newUser->setUserId($_POST['uid']);
  $newUser->setFirstname($_POST['firstName']);
  $newUser->setPassword(password_hash($_POST['password'].$_POST['uid'],PASSWORD_DEFAULT));
  $DAO = new UserDAO;
  $DAO->insertUser($newUser);
  //$DAO->SelectAll();
}
include('indexui.php');
 ?>
