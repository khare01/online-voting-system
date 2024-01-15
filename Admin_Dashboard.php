<?php
session_start();
if ($_SESSION['Admin'] == "") {
    header("Location: Admin_login.php?error= Login required");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <link href=img/bundelkhand-university-logo.png rel="icon">
    <style>
        #content {
            color: white;
            border-radius: 5px;
            background-color: rgb(0 0 0 / 50%);
            position: absolute;
        }

        main {
            background-image: url(img/admin_back3.jpg);
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            height: 100vh;
            align-items: center;
        }

        #content {
            position: absolute;
            transform: translate(40vw, 35vh);
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <?php
        include "Admin_Header.php";
        ?>
    </header>
    <main>
        <div id=content>
            <h1>Welcome to the Voting Portal!</h1>
        </div>
    </main>
    <script>
        function showContent(contentId) {
            // Hide all content sections
            var contentSections = document.getElementsByClassName("content-section");
            for (var i = 0; i < contentSections.length; i++) {
                contentSections[i].style.display = "none";
            }

            // Show the selected content section
            document.getElementById(contentId).style.display = "block";
        }
    </script>
</body>