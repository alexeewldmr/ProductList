<!--
Parameters for AddProduct.php for adding new furniture into DB in table `furniture`
 -->
<?php
require_once '../database.php';
global $link;
$sku = $_REQUEST['sku'];
$name = $_REQUEST['name'];
$description = $_REQUEST['description'];
$price = $_REQUEST['price'];
$height = $_REQUEST['height'];
$width = $_REQUEST['width'];
$length = $_REQUEST['length'];
$sql = "INSERT INTO `furniture` (sku, name, description, price, height, width, length)" .
    "VALUES ('{$sku}','{$name}','{$description}','{$price}','{$height}','{$width}','{$length}');";
mysqli_query($link,$sql);?>
<!--Successful query single page -->
<style>
    body {
        background: url("../../UI/images/gifs/popupfurni.gif");
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

    <h3 class="cover-heading">Thank you, for adding new furniture, <br> into our storage.</h3>
    <p class="lead"><a class="btn btn-lg btn-info" href="../../furniture.php">Go and check your furniture</a></p>
</div>
