
<!-- Database and functions connection-->
<?php
    require_once 'DB/database.php';
    require_once 'DB/function.php';
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product list</title>

    <!-- Bootstrap Template -->
    <link href="UI/bootstrap3/css/bootstrap.css" rel="stylesheet">
    <link href="UI/bootstrap3/css/font-awesome.css" rel="stylesheet">
    <link href="UI/bootstrap3/css/style.css" rel="stylesheet">
    <!-- End of Bootstrap Template -->
</head>
<body>
<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Product List</a>
        </div>
        <div class="collapse navbar-collapse" id="responsive-menu">
            <ul class="nav navbar-nav">
<!--
This Product list categories, to add new or change them you need do this in database. ProductList/category
-->
                <?php
                    $category = get_category();
                ?>
                <?php foreach ($category as $category): ?>
                <li><?=$category["path"]?>">
                    <?=$category["name"]?></a></li>
                <?php endforeach; ?>

            </ul>
        </div>
    </div>
</div>