<?php
require_once 'vendor/autoload.php';
use App\classes\Product;

if(isset($_GET['page']))
{
    if($_GET['page'] == 'home')
    {
        include "pages/home.php";
    }
    elseif($_GET['page'] == 'manage')
    {
        $product = new Product();
        $products = $product->getAllProductInfo();
        include "pages/manage-products.php";
    }
}
elseif (isset($_POST['add_product']))
{
    $product = new Product($_POST, $_FILES);
    $message = $product->save();
    include 'pages/home.php';
}