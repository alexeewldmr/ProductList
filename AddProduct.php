<!-- Forms to add new product to DB `ProductList` into tables (Books, dvd-discs, furniture) -->
<?php
require_once 'UI/header.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="" id="loginModal">
                    <!-- Page header -->
                    <div class="modal-header">
                        <h3>Field this form and click 'Add', <br> to add your favorite product to list!</h3>
                    </div>
                    <!-- End Page header -->

                    <div class="modal-body">
                        <div class="well">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#book" data-toggle="tab">Add Book</a></li>
                                <li><a href="#dvd" data-toggle="tab">Add DVD disc</a></li>
                                <li><a href="#furniture" data-toggle="tab">Add furniture</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <!-- New book form -->
                                <div class="tab-pane active in" id="book">
                                    <div class="well">
                                        <div class="form-group">
                                            <form action="DB/post/addbook.php" method="post">
                                                <h4>Field this form for adding new book</h4>
                                                <br>
                                                <input type="text" name="scu" value="" class="form-control" placeholder="SCU number" required>
                                                <br>
                                                <br>
                                                <input type="text" name="name" value="" class="form-control" placeholder="Write a book name" required>
                                                <br>
                                                <br>
                                                <input type="text" name="author" value="" class="form-control" placeholder="Book author" required>
                                                <br>
                                                <br>
                                                <input type="text" name="description" value="" class="form-control" placeholder="Write a small description about book" required>
                                                <br>
                                                <br>
                                                <input type="text" name="price" value="" class="form-control" placeholder="Book price in Euro" required>
                                                <br>
                                                <br>
                                                <input type="text" name="weight" value="" class="form-control" placeholder="Book weight in KG" required>
                                                <br>
                                                <button type="submit" class="btn btn-success">Add Book</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of new book form -->
                                <!-- New DVD form -->
                                <div class="tab-pane fade in" id="dvd">
                                    <div class="well">
                                        <div class="form-group">
                                            <form action="DB/post/adddvd.php" method="post">
                                                <h4>Field this form for adding new DVD disc</h4>
                                                <br>
                                                <input type="text" name="name" value="" class="form-control" placeholder="Write a DVD disc name" required>
                                                <br>
                                                <br>
                                                <input type="text" name="scu" value="" class="form-control" placeholder="SCU number" required>
                                                <br>
                                                <br>
                                                <input type="text" name="description" value="" class="form-control" placeholder="Write a small description about DVD disc" required>
                                                <br>
                                                <br>
                                                <input type="text" name="price" value="" class="form-control" placeholder="DVD disc price in Euro" required>
                                                <br>
                                                <br>
                                                <input type="text" name="capacity" value="" class="form-control" placeholder="DVD disc capacity in gb" required>
                                                <br>
                                                <button type="submit" class="btn btn-success">Add DVD</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of new DVD form -->
                                <!-- New furniture form -->
                                <div class="tab-pane fade in" id="furniture">
                                    <div class="well">
                                        <form action="DB/post/addfurniture.php" method="post">
                                            <h4>Field this form for adding new furniture</h4>
                                            <br>
                                            <input type="text" name="sku" value="" class="form-control" placeholder="SCU number" required>
                                            <br>
                                            <br>
                                            <input type="text" name="name" value="" class="form-control" placeholder="Write a furniture name" required>
                                            <br>
                                            <br>
                                            <input type="text" name="description" value="" class="form-control" placeholder="Write a small description about furniture" required>
                                            <br>
                                            <br>
                                            <input type="text" name="price" value="" class="form-control" placeholder="Furniture price in Euro" required>
                                            <br>
                                            <br>
                                            <input type="text" name="height" value="" class="form-control" placeholder="Furniture height in cm" required>
                                            <br>
                                            <br>
                                            <input type="text" name="width" value="" class="form-control" placeholder="Furniture width in cm" required>
                                            <br>
                                            <br>
                                            <input type="text" name="length" value="" class="form-control" placeholder="Furniture length in cm" required>
                                            <br>
                                            <button type="submit" class="btn btn-success">Add furniture</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- End of new furniture form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php
require_once 'UI/footer.php';
?>