<!--
Parameters for sidebar.php `Get Updates` form, for adding email into DB into table `Subscribe`
 -->
<?php
require_once '../database.php';
global $link;
$email = $_POST['email'];
$sql = "INSERT INTO `Subscribe` (email)" . "VALUES ('{$email}');";
$result = mysqli_query($link, $sql);
?>
<!--Successful query single page -->
<style>
    body {
        background: url("../../UI/images/support.png");
        background-size: cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;

        height: 100%;
        text-align: center;
        color: #fff;
        text-shadow: 0 1px 3px rgba(0,0,0,.5);
    }
    /*Padding for spacing*/
    .container {
        padding: 30px;
        display: table;
        width: 100%;
        height: 100%; /* For at least Firefox */
        min-height: 100%;
        -webkit-box-shadow: inset 0 0 100px rgba(0,0,0,.5);
        box-shadow: inset 0 0 100px rgba(0,0,0,.5);
    }
</style>
<div class="container">
    <h3 class="cover-heading">You have successfully subscribed to the newsletter. <br>
        The newsletter about new out products will be sent to your e-mail address.</h3>
    <p class="lead"><a class="btn btn-lg btn-info" href="../../index.php">Go back to main page</a></p>
</div>


