<?php
require_once 'UI/header.php';
?>
<!--
Empty post for adding new product
-->
<div class="container">
<div class="row masonry" data-columns>
    <div class="item">
        <div class="thumbnail">
           <a href="addproduct.php"> <img src="UI/images/add.jpg" alt="" class="img-responsive"> </a>
            <div class="caption">
                <h4><a href="#">Just click 'Add' to add new Product</a></h4>
                <br>
                <a href="addproduct.php" class="btn btn-success">Add +<i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
<!--
Getting out, products from database, to insert new product you need add this product in DB (Books, dvd, furniture)
-->
        <?php
        $dvddiscs = get_dvddiscs();
        ?>
        <?php
        foreach ($dvddiscs as $dvd):
        ?>
        <div class="item">
            <div class="thumbnail">
                <img src="UI/images/<?=$dvd['img']?>">
                <div class="caption">
                    <h3><a href="/ProductList/dvd.php?book_id=<?=$dvd['id']?>"><?=$dvd['name']?></a></h3>
                    <h6><i class="glyphicon-barcode"></i><a href="/ProductList/dvd.php?book_id=<?=$dvd['id']?>"><?=$dvd['scu']?></a> </h6>
                    <p>
                        <?=$dvd['description']?>
                    </p>
                    <ul class="list-unstyled">
                        <li><?=$dvd['price']?> <i class="glyphicon-euro"></i></li>
                        <li><?=$dvd['capacity']?> MB</li>
                    </ul>
                    <a class="btn btn-success" href="/ProductList/dvd.php?book_id=<?=$dvd['id']?>">More <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
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
                        <h3><a href="/ProductList/furniture.php?book_id=<?=$furnitur['id']?>"><?=$furnitur['name']?></a></h3>
                        <h6><i class="glyphicon-barcode"></i><a href="/ProductList/furniture.php?book_id=<?=$furnitur['id']?>"><?=$furnitur['sku']?></a> </h6>
                        <p>
                            <?=$furnitur['description']?>
                        </p>
                        <ul class="list-unstyled">
                            <li><?=$furnitur['price']?> <i class="glyphicon-euro"></i></li>
                            <li><?=$furnitur['height']?> cm</li>
                            <li><?=$furnitur['width']?>  cm</li>
                            <li><?=$furnitur['length']?> cm</li>
                        </ul>
                        <a class="btn btn-success" href="/ProductList/furniture.php?book_id=<?=$furnitur['id']?>">More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php
        $books = get_books();
        ?>
        <?php
        foreach ($books as $book):
        ?>

                <div class="item">
                    <div class="thumbnail">
                        <img src="UI/images/<?=$book['img']?>">
                        <div class="caption">
                            <h3><a href="/ProductList/books.php?book_id=<?=$book['id']?>"><?=$book['name']?></a></h3>
                            <h6><i class="glyphicon-barcode"></i><a href="/ProductList/books.php?book_id=<?=$book['id']?>"><?=$book['scu']?></a> </h6>
                            <p>
                                <i><?=$book['author']?></i>
                                <br>
                                <?=$book['description']?>
                            </p>
                            <ul class="list-unstyled">
                                <li><?=$book['price']?> <i class="glyphicon-euro"></i></li>
                                <li><?=$book['weight']?> kg</li>
                            </ul>
                            <a class="btn btn-success" href="/ProductList/books.php?book_id=<?=$book['id']?>">More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>
<!--
End
-->

<!--
Small footer menu
-->
</div>
    <div class="row">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="index.php"> New Products <span class="badge">18</span></a>
                </li>
                <li>
                    <a href="books.php">Books <span class="badge">12</span></a>
                </li>
                <li>
                    <a href="dvd.php">DVD-disc <span class="badge">28</span></a>
                </li>
                <li>
                    <a href="furniture.php">Furniture <span class="badge">28</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- menu end -->

<?php
require_once 'UI/footer.php';
?>
