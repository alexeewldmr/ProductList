<!--
Parameters for AddProduct.php for adding new book into DB in table `Books`
 -->
<?php
require_once '../database.php';
global $link;
$scu = $_POST['scu'];
$name = $_POST['name'];
$author = $_POST['author'];
$description = $_POST['description'];
$price = $_POST['price'];
$weight = $_POST['weight'];

$sql = "INSERT INTO `Books` (scu, name, author, description, price, weight)" .
    "VALUES ('{$scu}','{$name}','{$author}','{$description}','{$weight}','{$price}');";
mysqli_query($link,$sql); ?>
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

    <h3 class="cover-heading">Thank you, for adding new book, <br> into a library.</h3>
    <p class="lead"><a class="btn btn-lg btn-info" href="../../books.php">Check your book</a></p>
</div>
