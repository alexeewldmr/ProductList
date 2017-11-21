<?php
require_once 'UI/header.php';
?>


    <div class="container">
        <div class="row">
            <div class="container">
                <ul class="nav nav-tabs">
                    <li>
                        <a href="addproduct.php"> Add Boook </a>
                    </li>
                    <li>
                        <a href="adddvd.php">Add DVD-disc </a>
                    </li>
                    <li class="active">
                        <a href="addfurniture.php">Add Furniture</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Form -->
        <legend>Add Furniture</legend>
        <div class="col-md-6">
            <div class="well">
                <div class="form-group">
                    <form action="test.php" method="post">
                        <h4>Field this form for adding new furniture</h4>
                        <br>
                        <input type="text" name="name" value="" class="form-control" placeholder="Write a furniture name" required>
                        <br>
                        <br>
                        <input type="text" name="scu" value="" class="form-control" placeholder="SCU number" required>
                        <br>
                        <br>
                        <input type="text" name="description" value="" class="form-control" placeholder="Write a small description about furniture" required>
                        <br>
                        <br>
                        <input type="number" name="price" value="" class="form-control" placeholder="Furniture price in Euro" required>
                        <br>
                        <br>
                        <input type="number" name="weight" value="" class="form-control" placeholder="Furniture height in cm" required>
                        <br>
                        <br>
                        <input type="number" name="weight" value="" class="form-control" placeholder="Furniture width in cm" required>
                        <br>
                        <br>
                        <input type="number" name="weight" value="" class="form-control" placeholder="Furniture length in cm" required>
                        <br>
                        <button type="submit" class="btn btn-success">Add furniture</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



<?php
require_once 'UI/footer.php';
?>