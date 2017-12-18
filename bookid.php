<?php
require_once 'UI/header.php'; ?>
<?php
$book_id = $_GET['book_id'];
if (!is_numeric($book_id)) exit();

//getting the single furniture post from array
$book = get_book_by_id($book_id);
?>

<div class="wrap">
    <!--Sidebar connection -->
    <?php require_once 'UI/sidebar.php' ?>
    <div class="items">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    <div class="tab-pane active" id="pic-1"><img src="UI/images/<?=$book['img']?>" /></div>
                </div>
                <div class="details col-md-6">
                    <h3 class="product-title"><?=$book['name']?></h3>
                    <p class="product-description"><?=$book['description']?></p>
                    <h6 class="price">Price: <?=$book['price']?><i class="glyphicon-euro"></i></h6>
                    <h6 class="sizes">Weight: <?=$book['weight']?> kg </h6>
                    <div class="action">
                        <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                        <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require_once 'UI/footer.php';
?>
