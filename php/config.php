<!-- Theme Name: Nano Team Join Form
Theme URI: https://iqbalhasan.gitghub.oi/nanoteamsignup
Author: IQBA HASAN
Author URI: https://www.github.com/iqbalhasandev
Author Social URI: https://www.facebook.com/iqbalhasan.dev
Description:This template is designed for the registration form of the nano team only..
Version: 1.0 -->

<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "ourteam";

$conn = new mysqli($server, $user, $password, $db);
if($conn->connect_error){
  die("Error Connecting to the db");
}else{
//  echo "The connection was made";
}
