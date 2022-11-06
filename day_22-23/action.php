<?php

require_once "vendor/autoload.php";
use App\classes\Category;
use App\classes\Product;

$category = new Category();
$categories = $category->getAllCategory();


if(isset($_GET['page']))
{
    if($_GET['page']=='home')
    {

        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'product')
    {
        $product = new Product();
        $products = $product->getAllProduct();
        include 'pages/product.php';
    }
    elseif ($_GET['page'] == 'category-product')
    {
        $product = new Product();
        $products = $product->getProductsByCategory($_GET['category_id']);
        include 'pages/category-product.php';
    }
    elseif($_GET['page'] == 'product-detail')
    {
        $product = new Product();
        $single_product = $product->getProductById($_GET['id']);
        include 'pages/product-detail.php';
    }
}