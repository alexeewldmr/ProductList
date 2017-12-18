<!-- Forms to delete product from DB `ProductList` from tables (Books, dvd-discs, furniture) -->
<?php
require_once 'UI/header.php';
$query = mysqli_query($link, "SELECT *,INET_NTOA(user_ip) AS user_ip FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
$userdata = mysqli_fetch_assoc($query);
?>
    <div class="container">
    <div class="row">
    <div class="col-md-6">
    <div class="" id="loginModal">
        <!-- Page header -->
        <div class="modal-header">
            <h3>Hello, <?php print $userdata['user_login']?> . You can delete product using ID number.  </h3>
        </div>
        <!-- End Page header -->

        <div class="modal-body">
            <div class="well">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#book" data-toggle="tab">Delete Book</a></li>
                    <li><a href="#dvd" data-toggle="tab">Delete DVD disc</a></li>
                    <li><a href="#furniture" data-toggle="tab">Delete furniture</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <!-- Delete Book form -->
                    <div class="tab-pane active in" id="book">
                        <div class="well">
                            <div class="form-group">
                                <form action="DB/delete/DeleteBook.php" method="post">
                                        <h5>Field this form for deleting book</h5>
                                        <br>
                                        <input type="text" name="id" value="" class="form-control" placeholder="ID number" required>
                                        <br>
                                    <button type="submit" class="btn btn-success">Delete Book</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End of deleting Book form -->
                    <!-- Delete DVD form -->
                    <div class="tab-pane fade in" id="dvd">
                        <div class="well">
                            <div class="form-group">
                                <form action="DB/delete/DeleteDvd.php" method="post">
                                    <h5>Field this form for deleting DVD disc</h5>
                                    <br>
                                    <input type="text" name="id" value="" class="form-control" placeholder="ID number" required>
                                    <br>
                                    <button type="submit" class="btn btn-success">Delete Book</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End of deleting DVD form -->
                    <!-- Delete Furniture form -->
                    <div class="tab-pane fade in" id="furniture">
                        <div class="well">
                            <div class="form-group">
                                <form action="DB/delete/DeleteFurniture.php" method="post">
                                    <h5>Field this form for deleting furniture</h5>
                                    <br>
                                    <input type="text" name="id" value="" class="form-control" placeholder="ID number" required>
                                    <br>
                                    <button type="submit" class="btn btn-success">Delete Book</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End of deleting Furniture form -->
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

<?php
require_once 'UI/footer.php';
