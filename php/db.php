<?php
  function CreateDB(){
    // CONNECTION PROPERTIES
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="library";
    // CONNECT TO DB
    $con=mysqli_connect($servername,$username,$password,$dbname);
    // IF NOT CONNECTED DISPLAY ERROR
    if(!$con){
      die("Connection Failed: ".mysqli_connect_error());
    }

    $sql="CREATE DATABASE IF NOT EXISTS $dbname";
    // CREATED DB IF NOT EXIST
    if(mysqli_query($con,$sql)){
      $con=mysqli_connect($servername,$username,$password,$dbname);
      $sql = "CREATE TABLE IF NOT EXISTS books(
              id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
              book_name VARCHAR(255) NOT NULL,
              book_publisher VARCHAR(255) NOT NULL,
              book_price FLOAT
              );
            ";

      if(mysqli_query($con,$sql)){
        return $con;
      }else{
        echo "Cannot create table!";
      }
    }else{
      echo "ERROR WHILE CREATING DATABASE".mysqli_error($con);
    }
  }
?>