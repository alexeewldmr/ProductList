<?php
require_once 'UI/header.php'; ?>
<?php
$dvd_id = $_GET['dvd_id'];
if (!is_numeric($dvd_id)) exit();

//getting the single dvd disc from array
$dvd = get_dvd_by_id($dvd_id);
?>

    <div class="wrap">
        <!--Sidebar connection -->
        <?php require_once 'UI/sidebar.php'?>
        <div class="items">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        <div class="tab-pane active" id="pic-1"><img src="UI/images/<?=$dvd['img']?>" /></div>
                    </div>
                    <div class="details col-md-6">
                        <h4 class="product-title"><?=$dvd['name']?></h4>
                        <p class="product-description"><?=$dvd['description']?></p>
                        <br>
                        <h6 class="price">Price: <?=$dvd['price']?><i class="glyphicon-euro"></i></h6>
                        <h6 class="sizes">Capacity: <?=$dvd['capacity']?> MB </h6>
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