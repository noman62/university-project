<?php
include("connection.php");
if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "insert into `login` (name,email,password) 
    values('$name','$email','$password')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "Data inserted successfully";
    header('location:login.php');
  } else {
    die(mysqli_error($conn));
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

  /* Extra styles for the cancel button */
  .cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
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

  .error {
    color: #FF0000;
  }
</style>

<body>
  
  <form class="form-style" method="POST">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Your Name" name="name">
    

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email">
    
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <div class="clearfix">
        <button type="submit" class="signupbtn" name="submit" >Sign Up</button>
      </div>
    </div>
  </form>

</body>

</html>