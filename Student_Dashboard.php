<?php
session_start();
if ($_SESSION['em'] == '') {
  header("Location: Student_Login.php?error=Login first");
}
?>
<!DOCTYPE html>
<html>

<head>

  <title>Student Dashboard</title>
  <style>
    #content {

      position: absolute;
      transform: translate(20vw, 20vh);
    }

    main {
      background-image: url(img/student_back.jpg);
      background-size: 100% 100%;
      background-position: center;
      background-repeat: no-repeat;
      color: white;
      height: 100vh;
      align-items: center;
    }

    #content {
      position: absolute;
      transform: translate(40vw, 30vh);
      color: black;
      text-align: center;
    }
  </style>
</head>

<body>
  <header>
    <?php include "Student_header.php"; ?>
  </header>
  <main>
    <div id=content>
      <h1>Welcome to the Voting Portal!</h1>
      <p>Thank you for participating in the democratic process.</p>
    </div>
  </main>
</body>

</html>