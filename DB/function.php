<?php

/**
 * Functions to get categories from table category for header,
 * and getting out information from tables (Books, dvd-discs, furniture) order by `id` DESC
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

    $sql = "SELECT * FROM `Books` ORDER BY `Books`.`id` DESC";

    $result = mysqli_query($link, $sql);

    $books = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $books;


}

function get_dvddiscs() {

    global $link;

    $sql = "SELECT * FROM `dvd-discs` ORDER BY `dvd-discs`.`id` DESC";

    $result = mysqli_query($link, $sql);

    $dvddiscs = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $dvddiscs;


}
function get_furniture() {

    global $link;

    $sql = "SELECT * FROM `furniture` ORDER BY `furniture`.`id` DESC";

    $result = mysqli_query($link, $sql);

    $furniture = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $furniture;

}
/**
*End
**/

/**
 * Functions to get information about single product from Database from tables (Books, dvd-discs, furniture)
 * Using GET method
 */

function get_book_by_id($book_id){
    global $link;

    $sql = "SELECT * FROM `Books` WHERE `id` = ".$book_id;

    $result = mysqli_query($link, $sql);

    $book = mysqli_fetch_assoc($result);

    return $book;

}
function get_dvd_by_id($dvd_id){
    global $link;

    $sql = "SELECT * FROM `dvd-discs` WHERE `id` = ".$dvd_id;

    $result = mysqli_query($link, $sql);

    $dvd = mysqli_fetch_assoc($result);

    return $dvd;

}
function get_furniture_by_id($furniture_id){
    global $link;

    $sql = "SELECT * FROM `furniture` WHERE `id` = ".$furniture_id;

    $result = mysqli_query($link, $sql);

    $furniture = mysqli_fetch_assoc($result);

    return $furniture;

}
/**
 *End
 **/

/**
 * Validation function for password
 **/

function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
        $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}
/**
 *End
 **/