<?php
require_once 'UI/header.php';
?>

    <!-- Empty post for adding new dvd -->

<div class="container">
    <div class="row masonry" data-columns>
        <div class="item">
            <div class="thumbnail">
                <a href="adddvd.php"> <img src="UI/images/add.jpg" alt="" class="img-responsive"> </a>
                <div class="caption">
                    <h4><a href="#">Just click 'Add' to add new DVD-disc</a></h4>
                    <br>
                    <a href="addproduct.php" class="btn btn-success">Add +<i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <!-- End -->
        <!-- DVD's from table (dvd-discs) -->
        <?php
    $dvddiscs = get_dvddiscs();?>
        <?php
    foreach ($dvddiscs as $dvd):
        ?>
    <div class="item">
        <div class="thumbnail">
            <img src="UI/images/<?=$dvd['img']?>">
            <div class="caption">
                <h3><?=$dvd['name']?></h3>
                <h6><i class="glyphicon-barcode"></i><?=$dvd['scu']?> </h6>
                <p>
                    <?=$dvd['description']?>
                </p>
                <ul class="list-unstyled">
                    <ul class="list-group-item-info">
                        <li><?=$dvd['price']?> <i class="glyphicon-euro"></i></li>
                        <li><?=$dvd['capacity']?> MB</li>
                    </ul>
                </ul>
            </div>
        </div>
    </div>
<?php endforeach;?>
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
                <li class="active">
                    <a href="dvd.php">DVD-disc <span class="badge">28</span></a>
                </li>
                <li>
                    <a href="furniture.php">Furniture <span class="badge">28</span></a>
                </li>
            </ul>
        </div>
    </div>
    </div>

<?php
require_once 'UI/footer.php';
?>