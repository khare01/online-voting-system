<?php
session_start();
error_reporting(0);
if ($_SESSION['em'] != "") {
  header("Location: Student_Dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    html {
      height: 100%;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background-image: url("img/st_background.jpg");
      background-size: 110%;
    }

    .login-box {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 400px;
      padding: 40px;
      transform: translate(-50%, -50%);
      background: rgba(10, 9, 9, 0.5);
      box-sizing: border-box;
      box-shadow: 0 15px 25px rgba(16, 16, 16, 0.6);
      border-radius: 10px;
    }

    .login-box h2 {
      margin: 0 0 30px;
      padding: 0;
      color: #fff;
      text-align: center;
    }

    .login-box .user-box {
      position: relative;
    }

    .login-box .user-box input {
      width: 100%;
      padding: 10px 0;
      font-size: 16px;
      color: #fff;
      margin-bottom: 30px;
      border: none;
      border-bottom: 1px solid #fff;
      outline: none;
      background: transparent;
    }

    .login-box .user-box label {
      position: absolute;
      top: 0;
      left: 0;
      padding: 10px 0;
      font-size: 16px;
      color: #fff;
      pointer-events: none;
      transition: .5s;
    }

    .login-box .user-box input:focus~label,
    .login-box .user-box input:valid~label {
      top: -20px;
      left: 0;
      color: #000000;
      font-size: 12px;
    }


    /* CSS */
    #btt {
      appearance: none;
      background-color: #fcfcfc;
      border: 2px solid #ffffff;
      border-radius: 15px;
      box-sizing: border-box;
      color: #000000;
      cursor: pointer;
      display: inline-block;
      font-family: Roobert, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
      font-size: 16px;
      font-weight: 600;
      line-height: normal;
      margin: 0;
      min-height: 60px;
      min-width: 0;
      outline: none;
      padding: 16px 24px;
      text-align: center;
      text-decoration: none;
      transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      width: 100%;
      will-change: transform;
    }

    .btt:disabled {
      pointer-events: none;
    }

    #btt:hover {
      box-shadow: rgba(255, 255, 255, 0.25) 0 8px 15px;
      transform: translateY(-2px);
    }

    #btt:active {
      box-shadow: none;
      transform: translateY(0);
    }

    .nacc {
      color: white;
    }

    .nacc a {
      color: orange;
    }

    .error {
      color: red;
    }
  </style>
</head>

<body>
  <div class="login-box">
    <h2>Login</h2>
    <?php if (isset($_GET['error'])) { ?>
      <span class="error">
        <?php echo $_GET['error']; ?>
      </span>
    <?php } ?>
    <form action="Login_Validation.php" method="post">
      <div class="user-box">
        <input type="email" name="email" required />
        <label>Email</label>
      </div>
      <div class="user-box">
        <input type="password" name="pass" required />
        <label>Password</label>
      </div>
      <button id="btt" type="submit" name="sub">LOG-IN</button>
    </form>
    <p class="nacc">
      Not have an account? <a href="Student_SignUP.php">Sign Up Here</a>
    </p>
  </div>
</body>

</html>