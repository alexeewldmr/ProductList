<?php
require_once 'UI/header.php'; ?>
<!-- Empty post for adding new book -->
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
    <!-- Books from table (Books) -->
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
<!-- End -->
<!-- Footer menu -->
<?php
require_once 'UI/footer.php';
?>



