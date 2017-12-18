<?php
require_once 'UI/header.php';
?>

    <!-- Empty post for adding new dvd -->

    <div class="wrap">
        <?php require_once 'UI/sidebar.php'?>



        <div class="items">

            <div class="item">


                 <img  src="UI/images/add.jpg" alt="" class="product">
                <div class="caption">
                    <h3><a href="AddProduct.php">Just click to add new Product</a></h3>
                    <p class="descroption"> Simple add your <br> favorite product </p>
                </div>

            </div>
        <!-- End -->
        <!-- DVD's from table (dvd-discs) -->
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
    <!-- End -->
        </div>
    </div>
    <!-- Footer menu -->
<?php
require_once 'UI/footer.php';
?>