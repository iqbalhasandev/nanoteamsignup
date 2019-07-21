<!-- Theme Name: Nano Team Join Form
Theme URI: https://iqbalhasan.gitghub.oi/nanoteamsignup
Author: IQBA HASAN
Author URI: https://www.github.com/iqbalhasandev
Author Social URI: https://www.facebook.com/iqbalhasan.dev
Description:This template is designed for the registration form of the nano team only..
Version: 1.0 -->

<?php
include_once('php/config.php');

$fullname = $_POST['fullname'];
$semester = $_POST['semester'];
$shift = $_POST['shift'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$addres = $_POST['address'];
$terms = $_POST['terms'];

$sql = "SELECT * FROM user WHERE email='$email' Xor phone='$phone' LIMIT 1";
    $query = $conn->query($sql);
    $row= mysqli_num_rows($query);
    if($row > 0){        
      header("Location: error.html");

      exit();
    }else{
        $sql = "INSERT INTO user(fullname, semester, shift, email, phone, addres, terms) VALUES ('$fullname', '$semester', '$shift', '$email', '$phone', '$addres', '$terms')";
        $query = $conn->query($sql);
      if($query === TRUE){
        header("Location: thanks.html");
      }else{
        echo "Error while signing";
        exit();
      }
    }
?>
    