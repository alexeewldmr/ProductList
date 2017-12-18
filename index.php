<?php
require_once 'UI/header.php';?>

<!--
This is the main page of Product list web-project with all information from tables (Books, dvd-discs, furniture)
-->
<div class="wrap">
    <?php require_once 'UI/sidebar.php'?>

    <div class="items">
        <div class="item">
            <img src="UI/images/add.jpg" alt="" class="product">
            <div class="caption">
                <h3><a href="AddProduct.php">Just click to add new Product</a></h3>
                <p class="descroption"> Simple add your <br> favorite product </p>
            </div>
        </div>
        <!-- Getting all DVD discs from DB `ProductList` table `dvd-discs`  -->
        <?php
        $dvddiscs = get_dvddiscs();
        ?>
        <?php
        foreach ($dvddiscs as $dvd):
            ?>
            <div data-price="<?=$dvd['price']?>"  class="item">
                <a href="dvdid.php?dvd_id=<?=$dvd['id']?>"><img class="product" src="UI/images/<?=$dvd['img']?>"> </a>
                <div class="info">

                    <h6 align="center"> <a href="dvdid.php?dvd_id=<?=$dvd['id']?>"><?=$dvd['name']?></a></h6>
                    <p class="descroption">ID number: <?=$dvd['id']?></p>
                    <p class="descroption">SKU number: <?=$dvd['scu']?></p>
                    <p class="descroption">Price: <?=$dvd['price']?><i class="glyphicon-euro"></i></p>
                    <p class="descroption">Capacity: <?=$dvd['capacity']?> MB </p>

                </div>
            </div>
        <?php endforeach; ?>
        <!-- Getting all Furniture from DB `ProductList` table `furniture` -->
        <?php
        $furniture = get_furniture();
        ?>
        <?php
        foreach ($furniture as $furnitur):
            ?>
            <div data-price="<?=$furnitur['price']?>"  class="item">
                <a href="furniturid.php?furniture_id=<?=$furnitur['id']?>"><img class="product" src="UI/images/<?=$furnitur['img']?>"></a>
                <div class="info">
                    <h6 align="center"><a href="furniturid.php?furniture_id=<?=$furnitur['id']?>"><?=$furnitur['name']?></a></h6>
                    <p class="descroption">ID number: <?=$furnitur['id']?></p>
                    <p class="descroption">SKU number: <?=$furnitur['sku']?></p>
                    <p class="descroption">Price: <?=$furnitur['price']?><i class="glyphicon-euro"></i></p>

                    <p class="descroption">
                        <?=$furnitur['height']?> cm /
                        <?=$furnitur['width']?> cm /
                        <?=$furnitur['length']?> cm
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- Getting all Books from DB `ProductList` table `Books`  -->
        <?php
        $books = get_books();
        ?>
        <?php
        foreach ($books as $book):
            ?>
            <div data-price="<?=$book['price']?>"  class="item">
                <a href="bookid.php?book_id=<?=$book['id']?>"><img class="product" src="UI/images/<?=$book['img']?>"></a>
                <div class="info">
                    <h6 align="center"> <a href="bookid.php?book_id=<?=$book['id']?>"><?=$book['name']?></a></h6>
                    <p class="descroption">ID number: <?=$book['id']?></p>
                    <p class="descroption">SKU number: <?=$book['scu']?></p>
                    <p class="descroption">Price: <?=$book['price']?><i class="glyphicon-euro"></i></p>
                    <p class="descroption">Weight: <?=$book['weight']?> kg</p>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>

<?php
require_once 'UI/footer.php';
?>





