<?php
session_start();
include 'connection.php';

if (isset($_GET['token'])) {
  $resetToken = $_GET['token'];

  // Retrieve the reset token from the temporary storage (e.g., session variable or separate table)
  if (isset($_SESSION['resetToken']) && $_SESSION['resetToken'] === $resetToken) {
    // Reset token is valid, allow the user to reset their password
    if (isset($_POST['password'])) {
      $password = $_POST['password'];

      // Update the password in the signup table for the corresponding user
      $sql = "UPDATE signup SET Password = '$password' WHERE Email = '$email'";
      $result = $con->query($sql);

      if ($result === true) {
        echo "Password reset successfully.";
        // Clean up the temporary reset token storage
        unset($_SESSION['resetToken']);
      } else {
        echo "Failed to reset password. Please try again.";
      }
    }
  } else {
    echo "Invalid reset token.";
  }
}
?>






<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
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
        <h1>New  Password</h1>
        <form method="post" action="reset_password.php">
            <div class="form-group">
                <label>New Password</label>
                <input type="Password" name="Password" required>
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