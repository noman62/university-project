<!DOCTYPE HTML>
<html>

<head>
    <style>
        .error {
            color: #FF0000;
        }
        .form-style{
            border: 1px solid black;
            margin: 10%;
            width: 400px;
            
        }
      
    </style>
</head>

<body>
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
            echo "Sign up successful";
        } else {
            die(mysqli_error($conn));
        }
    }

    ?>
    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <div class="form-style">
        <h2>PHP Form Validation </h2>
        <p><span class="error">* required field</span></p>
        <form method="post" action="">
            Name: <input type="text" name="name" value="<?php echo $name; ?>">
            <span class="error">* <?php echo $nameErr; ?></span>
            <br><br>
            E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
            <span class="error">* <?php echo $emailErr; ?></span>
            <br><br>
            Password: <input type="password" name="password">
            <br><br>
            <input style="margin-left: 100px;"  type="submit" name="submit" value="Submit">

        </form>
    </div>

</body>

</html>