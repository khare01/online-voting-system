<?php
//1 is result is published 0 is not published
include 'Connect.php';
error_reporting(0);
session_start();
if ($_SESSION['Admin'] == "") {
    header("Location: Admin_login.php?error= Login required");
}
$isResultPublished;
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        main {
            position: transform;
            transform: translate(17vw, 17vh);
            background-image: url(img/admin_back3.jpg);
            height: 100vh;

        }

        #block-1 {
            position: relative;
            top: 4vh;
            left: 15vw;
            width: 60vw;
            background-color: rgba(0, 0, 0, 0.5);
            margin-bottom: 5vh;
            padding-left: 5vw;
            border-radius: 25px;
        }

        #block-1 label {
            padding: 3vh;
            color: #06fd98;
            font-size: 20px;
        }

        #block-2 {
            position: relative;
            transform: translate(1vw, 0vw);

            width: 80vw;
            background-color: rgba(0, 0, 0, 0.5);
            margin-bottom: 5vh;
            border-radius: 25px;

        }

        input {
            color: white;
            background-color: transparent;
            border: none;
            border-bottom: 2px solid white;
        }

        textarea:focus,
        input:focus {
            outline: none;
        }

        button {
            margin-left: 13vw;
            margin-bottom: 5vh;
            width: 10vw;
            background-color: #06fd98;
            border: none;
            border-radius: 10px;
            font-size: 30px;
        }

        table {
            border: none;
            font-size: 20px;
            color: white;
            /* background-color: rgba(0, 0, 0, 0.5); */
            /* width: 65vw; */
            text-align: center;
        }

        table img {
            margin: 5px 0;
        }

        table #del {
            width: 50px;
        }

        th {
            padding: 0 60px;
        }

        .display {
            margin: 20px;
            border-radius: 5px;
        }

        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            z-index: 9999;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        /* Animation for pop-up box */
        @keyframes slideUp {
            0% {
                opacity: 0;
                transform: translate(-50%, -50%) scale(0.8);
            }

            100% {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1);
            }
        }

        @keyframes slideDown {
            0% {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1);
            }

            100% {
                opacity: 0;
                transform: translate(-50%, -50%) scale(0.8);
            }
        }
    </style>
</head>
<script>
    function closePopup() {
        var popup = document.getElementById('popupBox');
        popup.style.animation = 'slideDown 0.5s ease';

        setTimeout(function () {
            popup.style.display = 'none';
        }

            , 500);
    }

    setTimeout(function () {
        closePopup();
    }

        , 3000);
</script>

<body>
    <?php if (isset($_GET['error'])) { ?>
        <div id="popupBox" class="popup">
            <span class="close" onclick="closePopup()">x</span>
            <?php echo $_GET['error']; ?>
        </div>
    <?php } ?>
    <header>
        <?php include "Admin_Header.php" ?>
    </header>
    <main>
        <div id="block-1">
            <form method="post">
                <label for="res">Enter the Admin Pass Code : </label>
                <input type="Password" name="tspswd" required> <br>
                <button name=result1>
                    <?php
                    $que = "SELECT * FROM `settings`";
                    $re = mysqli_query($connection, $que);
                    while ($data = mysqli_fetch_assoc($re)) {
                        if ($data['isVotingStarted'] == '1') {
                            $isVotingStarted = 1;
                            echo "Stop Voting";
                        } else {
                            echo "Start Voting";
                            $isVotingStarted = 0;
                        }
                    }
                    ?></button>
            </form>
        </div>
    </main>
</body>

</html>
<?php

if (isset($_POST["result1"])) {
    $ps = $_POST['tspswd'];
    $email = $_SESSION['Admin'];
    $query = "SELECT `Email`, `Password`, `Trans_passwd` FROM `admin_login` WHERE `Email` = '$email' AND `Trans_passwd`= $ps";
    $res = mysqli_query($connection, $query);
    $c = mysqli_num_rows($res);
    if ($c > 0) {
        if ($isVotingStarted == 0) {
            $query_for_setting = "UPDATE `settings` SET `isVotingStarted`='1' where 1";
        } else {
            $query_for_setting = "UPDATE `settings` SET `isVotingStarted`='0' where 1";
        }
        mysqli_query($connection, $query_for_setting);
        header("Location: result.php");
    } else {
        header("Location: result.php?error= Wrong Pass");
    }
}

?>