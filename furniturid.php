<?php
require_once 'UI/header.php'; ?>
<?php
$furniture_id = $_GET['furniture_id'];
if (!is_numeric($furniture_id)) exit();

//getting the single furniture post from array
$furniture = get_furniture_by_id($furniture_id);
?>
    <div class="wrap">
        <!--Sidebar connection -->
        <?php require_once 'UI/sidebar.php'?>
        <div class="items">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        <div class="tab-pane active" id="pic-1"><img src="UI/images/<?=$furniture['img']?>" /></div>
                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title"><?=$furniture['name']?></h3>
                        <p class="product-description"><?=$furniture['description']?></p>
                        <h6 class="price">Price: <?=$furniture['price']?><i class="glyphicon-euro"></i></h6>
                        <h6 class="sizes">Height: <?=$furniture['height']?> kg </h6>
                        <h6 class="sizes">Width: <?=$furniture['width']?> kg </h6>
                        <h6 class="sizes">Length: <?=$furniture['length']?> kg </h6>
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