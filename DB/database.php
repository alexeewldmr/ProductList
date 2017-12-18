<?php

/**
 * Database connection stats
 */

    $link = mysqli_connect('localhost','root','Vladimirs123!','ProductList');

    if(mysqli_connect_errno())
    {
        echo 'Connection error to database ('.mysqli_connect_errno().'): ' .mysqli_connect_error();
        exit();
    }

