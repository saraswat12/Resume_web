<?php
include 'connection.php';
session_start();

if (isset($_POST['Use_Name']) && isset($_POST['Password'])) {
  function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $Use_Name = validate($_POST['Use_Name']);
  $Password = validate($_POST['Password']);

  // Perform any necessary form validation here

  // Query the database to check the user's credentials
  $sql = "SELECT * FROM signup WHERE (Use_Name = '$Use_Name' OR Email = '$Use_Name') AND Password = '$Password'";
  $result = $con->query($sql);

  if ($result === false) {
    // Display the error message
    echo "Query error: " . $con->error;
  } else {
    if ($result->num_rows === 1) {
      $row = $result->fetch_assoc();
      $_SESSION['Use_Name'] = $Use_Name;
      // Login successful
      echo "<script>alert('Login successful');</script>";
      header('location:source.php');
      exit();
    } else {
      // Login failed
      echo "<script>alert('Invalid username/email or password');</script>";
      header('location:login.php');
    }
  }
}
?>
<html>
    <head>
        <title> Login page</title>
        <style> Body {
font-family: Calibri, Helvetica, sans-serif;
background-image: url(bg.jpg);
}
button {
background-color: #0D6EFD;
width: 100%;
color: white;
padding: 15px;
margin: 10px 0px;
border: none;
cursor: pointer;
}
form {
    padding: 20%;


}
input[type=text], input[type=password] {
width: 100%;
margin: 8px 0;
padding: 12px 20px;
display: inline-block;
border: 2px solid #0D6EFD;
box-sizing: border-box;
}
button:hover {
opacity: 0.7;
}
.cancelbtn {
width: auto;
padding: 10px 18px;
margin: 10px 5px;
}

.container {
padding: 25px;
position: absolute;
top: 25%;
left: 25%;
width: 50%;
background-color: #8a929380;
}
.error{
  background: #F2DEDE;
  color: #A94442;
  padding: 10px;
  width: 95%;
  border-radius: 5px;
  margin: 20px auto;

}
</style>
    </head>
    <body>
        <form  action="login.php" method="post">
            <div class="container">
                <h1 style="text-align: center;"> Login Form </h1>

                

                <label>Username : </label> 
                <input type="text" placeholder="Enter Username or Email" name="Use_Name" required>
                <label>Password : </label>
                <input type="password" placeholder="Enter Password" name="Password" required>
                <button type="submit">Login</button>
                <input type="checkbox" checked="checked"> Remember me
                <button type="button" class="cancelbtn"> Cancel</button>
                Forgot <a href="forgot.php"> password? </a><br>
                <a href="logout.php">Logout</a> <!-- Add this line for the logout link -->
            </div>
        </form> 
    </body>
     </html>