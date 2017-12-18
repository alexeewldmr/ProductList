<!-- Footer with google map and bootstrap scripts connections-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <!--Category menu in footer -->
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> <br> Category </h3>
                    <ul>
                        <li class="sub">

                            <?php
                            $category = get_category();
                            ?>
                            <?php foreach ($category as $category): ?>
                        <li><?=$category["path"]?>">
                            <?=$category["name"]?></a></li>
                        <?php endforeach; ?>

                        </li>
                    </ul>
                </div>
                <!--End category menu in footer -->
                <!--Info menu -->
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> HELP & INFORMATION </h3>
                    <ul>
                        <li> <a href="#"> Help </a> </li>
                        <li> <a href="#"> Delivery </a> </li>
                        <li> <a href="#"> About us </a> </li>
                        <li> <a href="#"> Careers </a> </li>
                    </ul>
                </div>
                <!--End of info menu -->
                <!--Support section menu with form  -->
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Comments or Questions </h3>
                    <ul>
                        <li>  If you have any comments or questions, </li>
                        <li>  please do not hesitate,  </li>
                        <li>  complete this form  </li>
                        <li>  to contact us. </li>
                    </ul>
                </div>
                <!--Support form that sends user question to Database in table `ContactUS` -->
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Contact us:  </h3>
                    <ul>
                        <li>
                            <form action="DB/post/support.php" method="post">
                            <div class="input-append newsletter-box text-center">
                                <input type="text" class="full text-center" placeholder="Name" name="name">
                                <input type="text" class="full text-center" placeholder="Theme" name="theme">
                                <input type="text" class="full text-center" placeholder="Email" name="email">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                            </form>
                        </li>
                    </ul>

                    <!--Social network buttons under support form -->
                    <ul class="social">
                        <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                    </ul>
                    <!--End of social network buttons -->
                </div>
                <!--End of support menu -->
                <!--Office on google map, using Google Maps Api-->
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-6 ">
                    <h3> Our office  </h3>
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCjB_aysstb17C1UlC8vgKgQTKCUP_ODNY'></script>
                    <div style='overflow:hidden;height:300px;width:300px;'><div id='gmap_canvas' style='height:300px;width:300px;'></div>
                        <style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
                    <a href='https://add-map.com/'>embedding a google map</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=3e87cd561cb3d114f974bf3373771109d1ac5f4a'></script>
                    <script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(56.9496487,24.105186499999945),mapTypeId: google.maps.MapTypeId.ROADMAP};
                    map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                    marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(56.9496487,24.105186499999945)});
                    infowindow = new google.maps.InfoWindow({content:'<strong>Product List</strong><br>Riga<br>LV - 0000 <br>'});
                    google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);
                    }google.maps.event.addDomListener(window, 'load', init_map);</script>
                </div>
                <!--End Google map -->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!--/.footer-->

    <!--Bottom payments -->
    <div class="footer-bottom">
        <div class="container">
            <?php $dat = date("d.m.Y"); $tm = date("h:i:s");?>
            <p class="pull-left"> Product List © This is Junior Developer Test Project for Scandiweb 2017. All right reserved. Local time is <?php echo $tm?>. Local date is <?php echo $dat?>  </p>
            <div class="pull-right">
                <ul class="nav nav-pills payments">
                    <li><i class="fa fa-cc-visa"></i></li>
                    <li><i class="fa fa-cc-mastercard"></i></li>
                    <li><i class="fa fa-cc-amex"></i></li>
                    <li><i class="fa fa-cc-paypal"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <!--/.footer-bottom-->
</footer>
<script src="UI/bootstrap3/js/bootstrap.js"></script>
<script src="UI/bootstrap3/js/salvattore.min.js"></script>
</body>
</html>