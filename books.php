<?php
require_once 'UI/header.php'; ?>
<!-- Empty post for adding new book -->
<div class="container">

<div class="row masonry" data-columns>
    <div class="item">
        <div class="thumbnail">
           <a href="addproduct.php"> <img src="UI/images/add.jpg" alt="" class="img-responsive"> </a>

            <div class="caption">
                <h4><a href="#">Just click 'Add' to add new Book</a></h4>
                <br>
                <a href="addproduct.php" class="btn btn-success">Add +<i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <!-- End -->
    <!-- Books from table (Books) -->
<?php $books = get_books();
foreach ($books as $book):
    ?>
        <div class="item">
            <div class="thumbnail">
                <img src="UI/images/<?=$book['img']?>">

                <div class="caption">

                    <h3><?=$book['name']?></h3>
                    <h6><i class="glyphicon-barcode"></i><?=$book['scu']?> </h6>
                    <p>
                        <i><?=$book['author']?></i>
                        </br>
                        <?=$book['description']?>
                    </p>
                    <ul class="list-unstyled">
                        <li><?=$book['price']?> <i class="glyphicon-euro"></i></li>
                        <li><?=$book['weight']?> kg</li>
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
            <li class="active">
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
<?php
require_once 'UI/footer.php';
?>



