
<html lang="en">
<head>
  <title>Welcome To Your GUVI Task Profile !</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<style>
  html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
   h1 {
    color: #333; /* Text color */
      font-size: 36px; /* Font size */
      font-family: Arial, sans-serif; /* Font family */
      font-weight: bold; /* Font weight */
      text-align: center; /* Text alignment */
      margin-top: 20px; /* Top margin */
    }
    h2{
      color: #333;
      font-family: Arial, sans-serif; /* Font family */
      font-weight: bold; /* Font weight */
      text-align: center; /* Text alignment */
    }
    body{
        background-image: url('assets/bg_guvi.png');
     }
   
</style>
<body>
<div class="alert alert-success" role="alert">
  <h1 class="alert-heading">Welcome to Your Guvi Task Profile!</h1>
</div>
<?php
include("user-details.php");

$userDetails = getUserbyId();

$firstName = $userDetails['firstName'];
$lastName = $userDetails['lastName'];
$gender=$userDetails['gender'];
$dob=$userDetails['dob'];
$age=$userDetails['age'];
$contact=$userDetails['contact'];
$fullName = $firstName." ".$lastName;
?>
<h2>Name        : <?php echo $fullName; ?></h2>
<h2>Age             : <?php echo $age; ?></h2>
<h2>Gender          : <?php echo $gender; ?></h2>
<h2>Contact         : <?php echo $contact; ?></h2>
<h2>Date Of Birth   : <?php echo $dob; ?></h2>

<div class="container">
        <div class="row align-items-end justify-content-center">
            <div class="col text-center">
              
              <button class="btn btn-primary mx-2" onclick="location.href='logout.php'">Logout</button>
            </div>
        </div>
    </div>

</body>
</html>