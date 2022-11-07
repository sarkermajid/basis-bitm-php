<?php

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Product;
use App\classes\Category;
use App\classes\Brand;



if(isset($_GET['page']))
{
    if($_GET['page'] == 'home')
    {
        $product = new Product();
        $products = $product->getAllProduct();
        include 'pages/home.php';
    }
    elseif($_GET['page'] == 'category')
    {
        $category = new Category();
        $categoryes = $category->getAllCategory();
        include 'pages/category.php';
    }
    elseif ($_GET['page'] == 'category-product')
    {
        $product = new Product();
        $prductsByCategory = $product->getProductsByCategory($_GET['category_id']);
        include 'pages/category-product.php';
    }
    elseif ($_GET['page'] == 'brand')
    {
        $brand = new Brand();
        $brands = $brand->getAllBrand();
        include "pages/brand.php";
    }
    elseif($_GET['page'] == 'brand-product')
    {
        $product = new Product();
        $productByBrand = $product->getProductsByBrand($_GET['brand_id']);
        include 'pages/brand-product.php';
    }
    elseif($_GET['page'] == 'product-details')
    {
        $product = new Product();
        $singleProduct = $product->getProductByid($_GET['id']);
        include 'pages/product-details.php';
    }
}