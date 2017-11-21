<?php
require_once 'UI/header.php';
?>

<!-- Empty post for adding new furniture -->

<div class="container">
    <div class="row masonry" data-columns>
        <div class="item">
            <div class="thumbnail">
                <a href="addfurniture.php"> <img src="UI/images/add.jpg" alt="" class="img-responsive"> </a>
                <div class="caption">
                    <h4><a href="#">Just click 'Add' to add new Furniture</a></h4>
                    <br>
                    <a href="addproduct.php" class="btn btn-success">Add +<i class="fa fa-arrow-right"></i></a>
                </div>
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
            <div class="item">
                <div class="thumbnail">
                    <img src="UI/images/<?=$furnitur['img']?>">
                    <div class="caption">
                        <h3><?=$furnitur['name']?></h3>
                        <h6><i class="glyphicon-barcode"></i><?=$furnitur['sku']?> </h6>
                        <p>
                            <?=$furnitur['description']?>
                        </p>

                        <ul class="list-unstyled">
                            <li><?=$furnitur['price']?><i class="glyphicon-euro"></i></li>
                            <li>Height: <?=$furnitur['height']?> cm</li>
                            <li>Width: <?=$furnitur['width']?>  cm</li>
                            <li>Length: <?=$furnitur['length']?> cm</li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- End -->
<!-- Footer menu -->
<div class="row">
    <div class="container">
        <ul class="nav nav-tabs">
            <li>
                <a href="index.php"> New Products <span class="badge">18</span></a>
            </li>
            <li>
                <a href="books.php">Books <span class="badge">12</span></a>
            </li>
            <li>
                <a href="dvd.php">DVD-disc <span class="badge">28</span></a>
            </li>
            <li class="active">
                <a href="furniture.php">Furniture <span class="badge">28</span></a>
            </li>
        </ul>
    </div>
</div>
<?php
require_once 'UI/footer.php';
?>


