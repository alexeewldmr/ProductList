<?php
require_once 'UI/header.php';
?>

<!-- Empty post for adding new furniture -->
<div class="wrap">
    <?php require_once 'UI/sidebar.php'?>
    <div class="items">
        <div class="item">
            <a href="AddProduct.php"> <img src="UI/images/add.jpg" alt="" class="product"> </a>
            <div class="caption">
                <h3><a href="#">Just click to add new Product</a></h3>
                <p class="descroption"> Simple add your <br> favorite product </p>
            </div>
        </div>
        <!-- End -->
        <!-- Furniture from table (furniture) -->
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
    </div>
</div>
<!-- End -->
<!-- Footer menu -->
<?php
require_once 'UI/footer.php';
?>


