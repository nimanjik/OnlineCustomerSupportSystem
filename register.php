<!DOCTYPE html>
<html>

<head>
    <script src="Js/script.js"></script>
    <link rel="stylesheet" href="css/register.css">
    <?php include_once("header1.php") ?>
</head>

<body class="body">

    <div class="r123">
        <h2 class="formhed">Get Register Today !</h2>
        <form action="registersubmit.php" method="POST" name="registerForm" class="registerForm">
            <h3>Let's create your account!</h3> <br>
            <div class="textfield">
                <div class="fnameLname">
                    <input type="text" name="firstname" placeholder="  First Name" class="fname" required>
                    <input type="text" name="lastname" placeholder="  Last Name" class="lname" required> <br><br>
                </div>
                <input type="text" name="username" id="uname" placeholder="  Username" class="otherinput" required> <br><br>
                <input type="email" name="email" id="email" placeholder="  Email" class="otherinput" required> <br><br>
                <input type="password" name="password" id="password" placeholder="  Password" class="otherinput" required> <br><br>
                <input type="password" name="repassword" id="repassword" placeholder="  Re-enter Password" class="otherinput" required> <br>
            </div>
            <div class="lasttext">
                <input type="checkbox" name="TandConditions" id="check" onsubmit="return validateForm()">
                I Agree <a href="">Terms and Conditions</a> <br><br>
                <input type="submit" id="sub" name="signupsubmit" value="Sign Up"> <br>
                Already have an account? <a href="Login.php">Login</a>
            </div>
        </form>
    </div>




    <?php include_once("footer.php") ?>