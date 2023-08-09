<?php
include 'connection.php';

if (isset($_POST['Email'])) {
  $Email = $_POST['Email'];

  // Check if the email exists in the signup table
  $sql = "SELECT * FROM signup WHERE Email = '$Email'";
  $result = $con->query($sql);

  if ($result->num_rows === 1) {
    // Generate a unique reset token
    $resetToken = uniqid();

    // Store the reset token in a temporary storage (e.g., session variable or separate table)
    $_SESSION['resetToken'] = $resetToken;

    // Send the password reset email to the user
    $resetLink = "http://yourwebsite.com/reset_password.php?token=" . $resetToken;
    // Include code to send the email with the reset link
    echo "<script type='text/javascript'> alert('Password reset email sent. Please check your email')</script>";
    //echo "Password reset email sent. Please check your email.";
  } else {
    echo "Email address not found.";
  }
}

?>



<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <style>
        body {
            font-family: Calibri, Helvetica, sans-serif;
            background-image: url(bg.jpg);
        }
        .container {
            padding: 25px;
            position: absolute;
            top: 25%;
            left: 25%;
            width: 50%;
            background-color: #8a929380;
        }
        .container h1 {
            text-align: center;
        }
        .form-group {
            margin: 8px 0;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 12px 20px;
            display: inline-block;
            border: 2px solid #0D6EFD;
            box-sizing: border-box;
        }
        .form-group button {
            background-color: #0D6EFD;
            width: 100%;
            color: white;
            padding: 15px;
            margin: 10px 0px;
            border: none;
            cursor: pointer;
        }
        .form-group button:hover {
            opacity: 0.7;
        }
        .form-group a {
            color: #0D6EFD;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Forgot Password</h1>
        <form method="post" action="forgot.php">
            <div class="form-group">
                <label>Email:</label>
                <input type="Email" name="Email" required>
                
            </div>
            <div class="form-group">
                <button type="submit" name="reset_password">Reset Password</button>
            </div>
            <div class="form-group">
                <a href="login.php">Go back to login</a>
            </div>
        </form>
    </div>
</body>
</html>
