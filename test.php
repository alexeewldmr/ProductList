<?php
require_once "UI/header.php";

/**
 * This function is for adding book to database from html form on site, but this function didn't not work
 */
function add_book($name, $scu, $info, $price, $weight){
    global $link;
    $scu = mysqli_real_escape_string($link, $name ,$scu, $info, $price, $weight);

    $sql = "SELECT * FROM `Books`";

    $result = mysqli_query($link, $sql);

    if(!mysqli_num_rows($result)){
        $sql = "INSERT INTO `Books` (`id`, `scu`, `name`, `description`, `weight`, `price`) VALUES (NULL, '$name\', '$scu\', '$info\', '$price\', '$weight\')";

        $result = mysqli_query($link, $sql);
        if ($result) {
            return 'created';
        } else {
            return 'fail';
        }

    } else {
        return 'book already exist!';
    }
}
if (isset($_POST['submit'])){
    echo '<ul>';
    $scu = $_POST['scu'];
    $name = $_POST['name'];
    $info = $_POST['description'];
    $price = $_POST['price'];
    $weight = $_POST['weight'];

    echo '<li>',$name,'</li>','<li>',$scu,'</li>','<li>',$info,'</li>','<li>',$price,'</li>','<li>',$weight,'</li>';
    echo '</ul>';

    $name = addslashes( trim($_POST['name']));
    $scu = addslashes( trim($_POST['scu']));
    $info = addslashes( trim($_POST['description']));
    $price = addslashes( trim($_POST['price']));
    $weight = addslashes( trim($_POST['weight']));

    $result = add_book($scu);

    $header = 'Location: /ProductList/addproduct.php';
    $header .= $result;
    header($header);
}
else {
    header('Location: /ProductList/books.php');
}
?>


<?php
/**
 * This function is for adding dvd to database from html form on site, but this function didn't not work
 */
function add_dvd($name, $scu, $info, $price, $capacity){
    global $link;
    $scu = mysqli_real_escape_string($link, $name ,$scu, $info, $price, $capacity);

    $sql = "SELECT * FROM `dvd-discs`";

    $result = mysqli_query($link, $sql);

    if(!mysqli_num_rows($result)){
        $sql = "INSERT INTO `dvd-discs` (`id`, `scu`, `name`, `description`,`price`, `capacity`) VALUES (NULL, '$name\', '$scu\', '$info\', '$price\', '$capacity\')";

        $result = mysqli_query($link, $sql);
        if ($result) {
            return 'created';
        } else {
            return 'fail';
        }

    } else {
        return 'disc already exist!';
    }
}
if (isset($_POST['submit'])){
    echo '<ul>';
    $scu = $_POST['scu'];
    $name = $_POST['name'];
    $info = $_POST['description'];
    $price = $_POST['price'];
    $capacity = $_POST['capacity'];

    echo '<li>',$name,'</li>','<li>',$scu,'</li>','<li>',$info,'</li>','<li>',$price,'</li>','<li>',$capacity,'</li>';
    echo '</ul>';

    $name = addslashes( trim($_POST['name']));
    $scu = addslashes( trim($_POST['scu']));
    $info = addslashes( trim($_POST['description']));
    $price = addslashes( trim($_POST['price']));
    $capacity = addslashes( trim($_POST['capacity']));

    $result = add_dvd($scu);

    $header = 'Location: /ProductList/adddvd.php';
    $header .= $result;
    header($header);
}
else {
    header('Location: /ProductList/dvd.php');
}
?>



<?php
/**
 * This function is for adding furniture to database from html form on site, but this function didn't not work
 */
function add_furniture($name, $scu, $info, $price, $height, $width, $length){
    global $link;
    $scu = mysqli_real_escape_string($link, $name ,$scu, $info, $price, $height, $width, $length);

    $sql = "SELECT * FROM `furniture`";

    $result = mysqli_query($link, $sql);

    if(!mysqli_num_rows($result)){
        $sql = "INSERT INTO `furniture` (`id`, `scu`, `name`, `description`, `price`, `height`,`width`,`length`) VALUES (NULL, '$name\', '$scu\', '$info\', '$price\', '$height\', '$width\',, '$length\')";

        $result = mysqli_query($link, $sql);
        if ($result) {
            return 'created';
        } else {
            return 'fail';
        }

    } else {
        return 'furniture already exist!';
    }
}
if (isset($_POST['submit'])){
    echo '<ul>';
    $scu = $_POST['scu'];
    $name = $_POST['name'];
    $info = $_POST['description'];
    $price = $_POST['price'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $length = $_POST['length'];

    echo '<li>',$name,'</li>','<li>',$scu,'</li>','<li>',$info,'</li>','<li>',$price,'</li>','<li>',$height,'</li>','<li>',$width,'</li>','<li>',$length,'</li>';
    echo '</ul>';

    $name = addslashes( trim($_POST['name']));
    $scu = addslashes( trim($_POST['sku']));
    $info = addslashes( trim($_POST['description']));
    $price = addslashes( trim($_POST['price']));
    $height = addslashes( trim($_POST['height']));
    $width = addslashes( trim($_POST['width']));
    $length = addslashes( trim($_POST['length']));

    $result = add_furniture($scu);

    $header = 'Location: /ProductList/addfurniture.php';
    $header .= $result;
    header($header);
}
else {
    header('Location: /ProductList/furniture.php');
}
?>