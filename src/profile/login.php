<?php

include_once("database.php");
$db = $conn;

define('tableName', 'users');
$userData = $_POST;

loginUser($db, $userData);

function loginUser($db, $userData) {

    $emailAddress   = $userData['emailAddress'];
    $password       = $userData['password'];
   

    if(!empty($emailAddress) && !empty($password)){

        
        $query = "SELECT emailAddress, password FROM ".tableName;
        $query .= " WHERE emailAddress = '$emailAddress' AND password = '$password'";
        $result = $db->query($query);
        if($result->num_rows > 0) {
           session_start();
           $_SESSION['userId'] = $emailAddress;
           echo "success";
        } else {
            echo "Wrong email and password";
        }
     
   } else {
      echo "All Fields are required";
   }
}