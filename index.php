<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MIND SANCTUARY</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h1> Welcome to Mind Sanctuary</h1>
                        <h2 class="form-title">Register</h2>
                        <form action = "index.php" method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="Signin.php" class="signup-image-link">Already Registered?</a>
                    </div>
                </div>
            </div>
        </section>

        

    </div>
    <?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$name = $_POST['name'];
$email = $_POST['email'];
$upassword = $_POST['pass'];
//$repassword = $_POST['re-pass'];


$servername = "localhost";
$username = "root";
$password = "";
$database = "users";
$conn = mysqli_connect($servername, $username,$password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
   $sql = "INSERT INTO `userss` (`name`, `email`, `password`) VALUES ('$name', '$email', '$upassword')";
   $result = mysqli_query($conn,$sql);
   if($result){
    echo '
     <link rel="stylesheet" href="q.css">
<div class="alert">
     <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
     Registered Successfully.
   </div>     

   ';
   }
   else{
    echo "was not inserted beacuse of".mysqli_error($conn);
   }
}
}
?>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>


