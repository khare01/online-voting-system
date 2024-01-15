<?php
include 'Connect.php';
session_start();
if ($_SESSION['Admin'] == "") {
    header("Location: Admin_login.php?error= Login required");
}
$query = "SELECT UID, fstname, course, image FROM add_candidate";
$result = mysqli_query($connection, $query);
?>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Add candidate</title>
    <style>
        .nav-link{
            color: white;
        }
        .nav-link:hover{
            color: black;
        }
        #main {
            background-image: url(img/admin_back3.jpg);
            width: 81.7vw;
            position: absolute;
            transform: translate(17vw,17vh);
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
            padding: 1vh;
            color: #06fd98;
            font-size: 20px;
        }

        #block-1 input {
            color: white;
            background-color: transparent;
            border: none;
            border-bottom: 2px solid white;
        }

        textarea:focus,
        input:focus {
            outline: none;
        }

        #block-1 input[type=file] {
            display: inline-block;
            width: 30%;
            padding: 60px 0 0 0;
            height: 20px;
            overflow: hidden;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            background: url('https://cdn1.iconfinder.com/data/icons/hawcons/32/698394-icon-130-cloud-upload-512.png') center center no-repeat #e4e4e4;
            border-radius: 20px;
            background-size: 60px 60px;
        }

        #block-1 input[type=submit] {
            margin-left: 13vw;
            margin-bottom: 2vh;
            width: 10vw;
            background-color: #06fd98;
            border: none;
            border-radius: 10px;
            font-size: 30px;
        }

        #block-1 select {
            width: 20vw;
        }
        #block-2 {
            position: relative;
            transform: translate(1vw,0vw);

            width: 80vw;
            background-color: rgba(0, 0, 0, 0.5);
            margin-bottom: 5vh;
            border-radius: 25px;

        }
        table{
            border: none;
            font-size: 20px;
            color: white;
            /* background-color: rgba(0, 0, 0, 0.5); */
            width: 65vw;
            text-align: center;
        }
        table img{
            margin: 5px 0;
        }
        table #del{
            width: 50px;
        }
        th{
            padding: 0 60px;
        }
        .display{
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
    <?php if (isset($_GET['done'])) { ?>
        <div id="popupBox" class="popup">
            <span class="close" onclick="closePopup()">x</span>
            <?php echo $_GET['done']; ?>
        </div>
    <?php } ?>
    <?php if (isset($_GET['add'])) { ?>
        <div id="popupBox" class="popup">
            <span class="close" onclick="closePopup()">x</span>
            <?php echo $_GET['add']; ?>
        </div>
    <?php } ?>
    <?php
    include 'Admin_header.php';
    
    echo '<div id="main">
        <div id="block-1">
            <form method="post" enctype="multipart/form-data" action="Add_Candidate_php.php">

            <label for="uid"> UID : </label>
            <input type="TEXT" name="uid" id="uid" required> <br>
                <label for="fstname"> Name : </label>
                <input type="text" name="fstname" id="fstname" required> <br>
                <label>Choose your course:</label>
                <select name="cors" id="course" required  class="form-select form-select-lg mb-3"
                aria-label=".form-select-lg example">
                    <option value="course">Select course</option>
                    <option value="bca">BCA</option>
                    <option value="b.sc">B.Sc</option>
                    <option value="mca">MCA</option>
                    <option value="m.sc">M.Sc</option>
                </select>
                <label for="img">Upload image</label><br>
                <input type="file" name="uploadfile" accept=".jpg, .png, .jpeg" > <br><br>
                <input type="submit" name="submitimg" id="submit" value="ADD" >
            </form>
        </div>
        <div id="block-2">
            <div class=display>
                <table border="1" cellspacing="0" cellpadding="10" >
                    <tr>
                        <th>S.No</th>
                        <th>UID</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>Image</th>
                        <th>Remove</th>
                    </tr>';
    ?>
    <?php
    if (mysqli_num_rows($result) > 0) {
        $sn = 1;
        while ($data = mysqli_fetch_assoc($result)) {
            echo "
            <tr>
            <td>
            " . $sn . " 
            </td>
            <td>
            " . $data['UID'] . " 
                </td>
                <td>
                     " . $data['fstname'] . "
                </td>
                <td>
                     " . $data["course"] . "
                </td>
                <td><img src=./image/" . $data['image'] . " height='100px' width='100px'></td>

                <td> <a href='delete.php?fname=" . $data['UID'] . "'><img id=del src=img/delete.png </a> </td>
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
    ?>
</body>

</html>