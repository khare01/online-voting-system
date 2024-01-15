<style>
      body {
      background-image: url(img/student_back.jpg);
      background-size: 100% 100%;
      background-position: center;
      background-repeat: no-repeat;
      color: white;
      height: 100vh;
    }
    #res{
        text-align: center;
       color: #fd2d2ded;
    }
    #code{
        position: absolute;
        transform: translate(40vw,40vh);
        background-color:rgb(0,0,0,0.5);
        height: 10vh;
        width: 45vw;
        border-radius: 20px;
    }

</style>
<?php
include "Connect.php";
session_start();
if ($_SESSION['em'] == '') {
    header("Location: Student_Login.php?error= Login first");
}
include "Student_Header.php";
$que = "SELECT * FROM `settings`";
$re = mysqli_query($connection, $que);
while ($data = mysqli_fetch_assoc($re)) {
    if ($data['IsResultPublished'] == '1') {
        include "resultdisplay.php";
    } else {
        echo "<div id=code ><h1 id=res>Result is not published</h1></div>";
    }
}
?>