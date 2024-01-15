<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result</title>
  <style>
     body {
      background-image: url(img/student_back.jpg);
      background-size: 100% 100%;
      background-position: center;
      background-repeat: no-repeat;
      color: white;
      height: 100vh;
      align-items: center;
    }
    table{
      transform: translate(60vh,12vw);
      text-align: center;
     /* background-color: black; */
     background: rgba(10, 9, 9, 0.5);
     /* opacity: 0.5; */
     /* border-radius: 3vh; */
    }
    th,td{
      padding: 3vh;
      margin: 1vh;
      font-size: 20px;
    }
  </style>
</head>

<body>
  <!-- <form method="post">
    <label for="res">Enter the transaction Password to view result : </label>
    <input type="Password" name="tspswd" required> <br>
    <button name=result1>Publish Result</button>
  </form> -->
  <div class=display>
    <table cellspacing="0" cellpadding="10">
      <tr>
        <th>S.No</th>
        <!-- <th>UID</th> -->
        <th>Full Name</th>
        <th>Course</th>
        <th>Image</th>
        <th>Votes</th>
      </tr>
  </div>

</body>

</html>
<?php

include 'Connect.php';
// $query = "SELECT UID, fstname, course, vote, image FROM add_candidate";

$query = "SELECT * FROM add_candidate
ORDER BY vote DESC";

$result = mysqli_query($connection, $query);



$res = mysqli_query($connection, $query);
$c = mysqli_num_rows($res);
if ($c > 0) {
  // echo "Login successfull";

  if (mysqli_num_rows($result) > 0) {
    $sn = 1;
    while ($data = mysqli_fetch_assoc($result)) {
      echo "
          <tr>
          <td>
          " . $sn . " 
          </td>
              <td>
                   " . $data['fstname'] . "
              </td>
              <td>
                   " . $data["course"] . "
              </td>
              <td><img src=./image/" . $data['image'] . " height='100px' width='100px'></td>

              <td> " . $data['vote'] . " </td>
          </tr> ";
      $sn++;
    }
  } else {
    echo '
  <tr>
  <td colspan="8">No data found</td>
  </tr>
  ';

  }
} else {
  echo "login unsuccessfull";
}


?>