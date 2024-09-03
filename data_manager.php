<?php
session_start();
const PRODUCTSKEY = "Product";

initProducts();

function InitProducts(){
    if(!isset($_SESSION[PRODUCTSKEY])){
        $_SESSION[PRODUCTSKEY] = [];
    }
}



function GetProducts(){
    return $_SESSION[PRODUCTSKEY];
}

function DeleteProducts(int []){
    returni
}

?>