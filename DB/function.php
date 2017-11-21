<?php

/**
 * Functions to get categories from table category for header,
 * and getting out information from tables (Books, dvd-discs, furniture)
 */
function get_category(){

    global  $link;

    $sql = "SELECT * FROM `category`";

    $result = mysqli_query($link, $sql);

    $category = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $category;
}

function get_books() {

    global $link;

    $sql = "SELECT * FROM `Books`";

    $result = mysqli_query($link, $sql);

    $books = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $books;


}

function get_dvddiscs() {

    global $link;

    $sql = "SELECT * FROM `dvd-discs`";

    $result = mysqli_query($link, $sql);

    $dvddiscs = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $dvddiscs;


}
function get_furniture() {

    global $link;

    $sql = "SELECT * FROM `furniture`";

    $result = mysqli_query($link, $sql);

    $furniture = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $furniture;

}

