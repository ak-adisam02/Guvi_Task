<?php
session_start();
$userId = $_SESSION['userId'];

include_once("database.php");
$db = $conn;

define('tableName', 'users');

if(!$userId){
  header("location:index.php");
}

function getUserbyId(){
    
    global $db;
    $userId = $_SESSION['userId'];
    $data = [];

    $query = "SELECT firstName, lastName, gender, dob, age, contact FROM ".tableName;
    $query .= " WHERE emailAddress = '$userId'";

    $result = $db->query($query);
    
    if($result->num_rows > 0) {
      $data = $result->fetch_assoc(); 
    } else {
       header("location:index.php");
    }

    return $data;
}