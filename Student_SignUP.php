<!DOCTYPE html>

<head>
  <title>SignUP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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

    .list {
      padding-left: 30vw;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

  </style>
</head>

<body>
  <div class="login-box">
    <h2>Sign Up</h2>
    <form method="post" action="Send_OTP.php">
      <div class=signup>
        <div class="user-box">
          <input type="text" id="fname" name="fname" required>
          <label>Full Name</label>
        </div>
        <div class="user-box">
          <input type="number" id="rollno" name="rollno" required>
          <label>Roll No.</label>
        </div>
        <div class="user-box" class="list">
          <select name="course" id="course" required class="form-select form-select-lg mb-3"
            aria-label=".form-select-lg example">
            <option value="course">Select course</option>
            <option value="BCA">BCA</option>
            <option value="MCA">MCA</option>
            <option value="B.S.C">Bsc</option>
            <option value="M.S.C">Msc</option>

          </select>
        </div>
        <div class="user-box" class="list">
          <select name="semester" id="semester" required class="form-select form-select-lg mb-3"
            aria-label=".form-select-lg example">
            <option value="semester">Select option</option>
            <option value="first semester">First Semester</option>
            <option value="second semester">Second Semester</option>
            <option value="third semester">Third Semester</option>
            <option value="fourth semester">Fourth Semester</option>
            <option value="fifth semester">Fifth Semester</option>
            <option value="sixth semester">Sixth Semester</option>
          </select>
        </div>
        <div class="user-box">
          <input type="text" id="email" name="email" required>
          <label>Email</label>
        </div>
        <?php if (isset($_GET['error'])) { ?>
          <span class="error">
            <?php echo $_GET['error']; ?>
          </span>
        <?php } ?>
        <div class="user-box">
          <input type="password" id="password" name="password" required>
          <label>Password</label>
        </div>
        <div class="user-box">
          <input type="password" required>
          <label>Confirm Password</label>
        </div>
        <button id="btt" type="submit">Send OTP</button>
      </div>

    </form>
    <p class="nacc">
      Already have an account? <a href="Student_Login.php">Login here</a>
    </p>
  </div>
</body>

</html>