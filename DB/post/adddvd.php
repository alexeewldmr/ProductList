<!--
Parameters for AddProduct.php for adding new DVD into DB in table `dvd-discs`
 -->
<?php
require_once '../database.php';
global $link;
$scu = $_REQUEST['scu'];
$name = $_REQUEST['name'];
$description = $_REQUEST['description'];
$price = $_REQUEST['price'];
$capacity = $_REQUEST['capacity'];

$sql = "INSERT INTO `dvd-discs` (scu, name, description, price, capacity)" .
    "VALUES ('{$scu}','{$name}','{$description}','{$price}','{$capacity}');";
mysqli_query($link,$sql);?>

<!--Successful query single page -->
<style>
body {
    background: url("../../UI/images/gifs/roll.gif");
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

    <h3 class="cover-heading">Thank you, for adding new DVD disc, <br> into a collection.</h3>
    <p class="lead"><a class="btn btn-lg btn-info" href="../../dvd.php">Go and check your dvd</a></p>
</div>