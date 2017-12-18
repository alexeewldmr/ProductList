<!--
 Deleting DVD disc by ID from DB table `dvd-discs`
 -->
<?php
require_once '../database.php';
global $link;
$id = $_POST['id'];
$delete_sql = "DELETE FROM `dvd-discs` WHERE `dvd-discs`.`id` = $id";
mysqli_query($link,$delete_sql);
?>
<!--Successful query single page -->
<style>
    body {
        background: url("../../UI/images/gifs/library.gif");
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

    <h3 class="cover-heading">Thank you! You have been deleted DVD disc, <br> from collection.</h3>
    <p class="lead"><a class="btn btn-lg btn-info" href="../../books.php"><button type="submit">Check others DVD discs</button></a></p>
</div>