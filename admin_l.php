<?php
//to connect with database
session_start();
include 'Connect.php';
//for verification 
if (isset($_POST['sub1'])) {
    $email = $_POST['email'];
    $pass = $_POST['pswd'];
    $query = "Select * from admin_login where Email='$email' and password='$pass'";
    $res = mysqli_query($connection, $query);
    $c = mysqli_num_rows($res);
    if ($c > 0) {
        $_SESSION['Admin'] = $email;
        header("Location: Admin_Dashboard.php");
    } else {
        header("Location: Admin_Login.php?error= Wrong Credentials");
    }
}
?>