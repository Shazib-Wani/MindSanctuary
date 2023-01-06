<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$name = $_POST['name'];
$email = $_POST['email'];
$upassword = $_POST['pass'];
//$repassword = $_POST['re-pass'];


$servername = "localhost:3307";
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
     This is an alert box.
   </div>

   ';
   }
   else{
    echo "was not inserted beacuse of".mysqli_error($conn);
   }
}
}
?>
