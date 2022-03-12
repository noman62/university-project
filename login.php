<?php
include("connection.php");
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  if (!empty($email) && !empty($password)) {
    $sql = "SELECT id FROM login WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $mysqli_num_rows = mysqli_num_rows($result);

    if ($mysqli_num_rows ) {
      
        header('location:index.php');
    } else {
      echo "invalid user name or password";
    }
  }
} 
?>




<!DOCTYPE html>
<html>
<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  * {
    box-sizing: border-box
  }

  /* Full-width input fields */
  input[type=text],
  input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }

  input[type=text]:focus,
  input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }

  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }

  /* Set a style for all buttons */
  button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }

  button:hover {
    opacity: 1;
  }

 
  /* Add padding to container elements */
  .container {
    padding: 16px;
  }

  /* Clear floats */
  .clearfix::after {
    content: "";
    clear: both;
    display: table;
  }

  .form-style {
    border: 1px solid #ccc;
    margin-left: 30%;
    margin-top: 5%;
    width: 30%;

  }
</style>

<body>

  <form class="form-style" method="POST">
    <div class="container">
      <h1>Login</h1>
      <p>Please fill in this form to Login.</p>
      <hr>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <div class="clearfix">
        <button type="submit" class="signupbtn" name="submit">Sign Up</button>
      </div>
    </div>
  </form>

</body>

</html>