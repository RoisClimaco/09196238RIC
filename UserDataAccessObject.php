<?php
  require_once 'User.php';
  class UserDAO{
  private $host = null; //'35.197.165.173';
  private $username = 'root';
  private $password = 'ric09196238';
  private $database = 'dbcustomerregistrationsystem';
  private $port = null;
  private $instanceId = '/cloudsql/ric09196238:australia-southeast1:ric09196238';

  public function __construct(){

  }

  public function insertUser(User $user){
    $connection = mysqli_connect($this->host, $this->username, $this->password, $this->database, $this->port, $this->instanceId);
    $statement = "INSERT INTO `dbcustomerregistrationsystem`.`tblusers` (`userid`, `firstname`, `password`) VALUES ('". $user->getUserId() ."', '". $user->getFirstname() ."', '". $user->getPassword(  ) ."')";
    echo mysqli_error($connection);
    echo $statement;
    $result = mysqli_query($connection,$statement);
    mysqli_close($connection);
  }

  private function SelectAll(){
  $connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);//, $this->port, $this->instanceId);
  $statement = "SELECT * FROM tblusers";
  $result = mysqli_query($connection,$statement);

  while($row = mysqli_fetch_row($result)){
    echo $row[1];
  }
//password_hash(,PASSWORD_DEFAULT)
//password_verify(password phrase,hashed password)
  mysqli_close($connection);
  }

  }
 ?>
