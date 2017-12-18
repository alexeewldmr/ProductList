<!--Sidebar menu properties -->
<div class="menu">
    <!-- First sidebar menu options -->
    <div class="mini-menu">
        <ul>
            <li class="sub">
                <!--
                This Product list categories, to add new or change them you need do this in database.
                ProductList `category`
                -->
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
    <!-- End of first sidebar menu options -->

<!-- Logging Parameters -->
    <?php
    if(isset($_POST['submit']))
    {
        // Getting out login from DB entry, that equals with entry login
        $query = mysqli_query($link,"SELECT user_id, user_password FROM users WHERE user_login='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
        $data = mysqli_fetch_assoc($query);

        // Matching passwords
        if($data['user_password'] === md5(md5($_POST['password'])))
        {
            // Generate a random number and encrypt it
            $hash = md5(generateCode(10));

            if(!empty($_POST['not_attach_ip']))
        {
            // Translate  IP into string
            $insip = ", user_ip=INET_ATON('".$_SERVER['REMOTE_ADDR']."')";
        }

            // Writing to the database, new hash of authentication and IP
            mysqli_query($link, "UPDATE users SET user_hash='".$hash."' ".$insip." WHERE user_id='".$data['user_id']."'");

            // Cookie
            setcookie("id", $data['user_id'], time()+60*60*24*30);
            setcookie("hash", $hash, time()+60*60*24*30,null,null,null,true); // httponly !!!

            // Redirect the browser to the page for checking our script
            header("Location: DeleteProduct.php"); exit();
        }
        else
        {
            print "You entered an incorrect login / password";
        }
    }
    ?>
    <!-- Logging Parameters end-->
    <!-- Logging Form -->
    <div class="mini-menu">
        <div class="header-item"> Login </div>
        <form method="post">
            <div class="form-group">
                <input name="login" type="text" class="form-control" placeholder="Login" value="">
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="password" value="">
            </div>
            <button name="submit" type="submit" class="btn btn-primary">
                Submit
            </button>
            <a href="register.php"><h6>
                Register new user</h6></a>
        </form>
    </div>
    <!-- Logging form end -->
    <!-- Form for getting email from users -->
    <div class="mini-menu">
        <div class="header-item"> Get Updates </div>
        <form action="DB/post/subscribe.php" method="post">
            <div class="form-group">
                <input name="email" type="text" class="form-control" placeholder="Your email" value="">
            </div>
            <button name="submit" type="submit" class="btn btn-primary">
                Subscribe
            </button>
        </form>
    </div>
    <!-- End of update form -->
</div>