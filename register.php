<?php
require_once 'UI/header.php';
$link = mysqli_connect('localhost','root','Vladimirs123!','ProductList');

if(isset($_POST['submit']))
{
    $err = array();

    // checking login
    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
    {
        $err[] = "The login can consist only of letters of the English alphabet and numbers";
    }

    if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
    {
        $err[] = "Login must be at least 3 characters and not more than 30";
    }

    // check if there is a user with that name
    $query = mysqli_query($link, "SELECT user_id FROM users WHERE user_login='".mysqli_real_escape_string($link, $_POST['login'])."'");
    if(mysqli_num_rows($query) > 0)
    {
        $err[] = "A user with such a login already exists in the database";
    }

    // If there are no errors, then we add a new user to the database
    if(count($err) == 0)
    {

        $login = $_POST['login'];

        //Remove extra gaps and double encryption
        $password = md5(md5(trim($_POST['password'])));

        mysqli_query($link,"INSERT INTO users SET user_login='".$login."', user_password='".$password."'");
        header("Location: index.php"); exit();
    }
    else
    {
        print "<b>The following errors occurred during registration:</b><br>";
        foreach($err AS $error)
        {
            print $error."<br>";
        }
    }
}
?>
<!-- Registration form-->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="" id="loginModal">
                <div class="modal-body">
                    <div class="well">
<div class="header-item"> Register new user</div>

<form method="post">

    <div class="form-group">
        <input name="login" type="text" class="form-control" placeholder="Login" value="">
    </div>

    <div class="form-group">
        <input name="password" type="password" class="form-control" placeholder="password" value="">
    </div>

    <button name="submit" type="submit" class="btn btn-primary">Submit</button>

</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>


<?php
require_once 'UI/footer.php';
?>
