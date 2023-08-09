<?php
    include 'connection.php';
    if (isset($_POST['Full_Name'])){
    $Full_Name = $_POST['Full_Name'];
    $Use_Name = $_POST['Use_Name'];
    $Email = $_POST['Email'];
    $Phone_Number = $_POST['Phone_Number'];
    $Password = $_POST['Password'];
    $Confirm_Password = $_POST['Confirm_Password'];
    $Gender = $_POST['Gender'];

    $sql = "INSERT INTO signup (Full_Name, Use_Name, Email, Phone_Number, Password, Confirm_Password, Gender) VALUES ('$Full_Name', '$Use_Name', '$Email', '$Phone_Number', '$Password', '$Confirm_Password', '$Gender')";

    if ($con->query($sql) === true) {
      header("Location: source.php");
      exit();
        // echo "Successfully inserted";
    } else {
        echo "ERROR: " . $sql . "<br>" . $con->error;
    }
  }

    $con->close();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
     <link rel="stylesheet" href="signup.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Enter your Details </title>
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="signup.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="Full_Name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text"  placeholder="Enter your username" name="Use_Name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="Email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="Phone_Number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password"  name="Password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password"  name="Confirm_Password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="Gender" id="dot-1" value="Male">
          <input type="radio" name="Gender" id="dot-2" value="Female">
          <input type="radio" name="Gender" id="dot-3" value="Prefer not to say">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <button class="btn"> SUBMIT </button> 
          
        </div>
      </form>
    </div>
  </div>
</body>
</html>