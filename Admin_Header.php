<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    * {
      margin: 0%;
      padding: 0%;
    }

    header {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 100;
      display: flex;
      backdrop-filter: blur(10px);
      justify-content: space-between;
    }

    .logo {
      width: 100vw;
      display: flex;
      align-items: center;
      color: black;
      padding: 3vh 0;
      padding-left: 34vw;
      background-image: linear-gradient(20deg, rgb(13, 13, 13), rgb(48, 48, 48));
      backdrop-filter: blur(10%);
      color: #f8f9fa;

      box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px,
        rgba(0, 0, 0, 0.12) 0px -12px 30px,
        rgba(0, 0, 0, 0.12) 0px 4px 6px,
        rgba(0, 0, 0, 0.17) 0px 12px 13px,
        rgba(0, 0, 0, 0.09) 0px -3px 5px;

    }


    .logo .imga {
      width: 70px;
      height: 70px;
      margin-right: 30px;
      
    }
    
    .stu .imag {
      margin-right: 0px;
      margin-left: 8px;
    }

    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      width: 250px;
      background-color: rgb(13, 13, 13);
      padding: 20px;
      padding-top: 20vh;
      font-size: 20px;
    }

    li {
      margin: 2vh;
      border: white solid 2px;
    }

    li:hover {
      border: black solid 2px;
      background-color: white;

    }

    .stu {
      align-items: center;
      padding-left: 30vw;
    }

    a {
      transition: ease-out;
      color: white;
    }

    a:hover {
      transition: ease-in;
      color: #000;
    }
  </style>
</head>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>const $button = document.querySelector('#sidebar-toggle');
  const $wrapper = document.querySelector('#wrapper');

  $button.addEventListener('click', (e) => {
    e.preventDefault();
    $wrapper.classList.toggle('toggled');
  });</script>
<body>
    <header>
        <div class="logo">
            <img class="imga" src="img/bundelkhand-university-logo.png" alt="University Logo">
            <h1>Admin Dashboard</h1>
            <div class="stu">
                <img class="imag" src="img/user.png" alt="student logo">
                <h4>Admin
                </h4>
            </div>
        </div>
    </header>
    <div class="sidebar">
    <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link" href="Admin_Dashboard.php">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="Add_Candidate.php">Add Candidate</a></li>
            <li class="nav-item"><a class="nav-link" href="result.php">Results</a></li>
            <li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="Voting.php">Voting</a></li>
            <li class="nav-item"><a class="nav-link" href="logout.php?id=0">Logout</a></li>
        </ul>
    </div>
</body>