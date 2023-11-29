<?php

include_once("database.php");
$db = $conn;
define('tableName', 'users');
$userData = $_POST;

registerUser($db, $userData);

function registerUser($db, $userData) {

    $firstName      = $userData['firstName'];
    $lastName       = $userData['lastName'];
    $gender         = $userData['gender'];
    $dob            =$userData['dob'];
    $age            =$userData['age'];
    $contact        =$userData['contact'];
    $emailAddress   = $userData['emailAddress'];
    $password       = $userData['password'];
    $confirmPassword = $userData['confirmPassword'];

    if(!empty($firstName) && !empty($lastName) && !empty($gender) && !empty($emailAddress) && !empty($password)){

       if($confirmPassword === $password) {
        $query = "INSERT INTO ". tableName;
        $query .= " (firstName, lastName, gender, dob, age, contact, emailAddress, password) ";

        $query .= "VALUES ('$firstName', '$lastName', '$gender', '$dob', '$age', '$contact', '$emailAddress', '$password')";
    
        $execute = $db->query($query);
        echo $db->error;
        if($execute) {
        echo "You are registered successfully";
        }
      } else{
        echo "Wrong Confirm password";
      }
   } else {
      echo "All Fields are required";
   }
}