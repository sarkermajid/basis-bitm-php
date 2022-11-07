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
    elseif ($_GET['page'] == 'edit')
    {
        $product = new Product();
        $productInfo = $product->getProductInfoById($_GET['id']);
        include 'pages/edit.php';
    }
}
elseif (isset($_POST['add_product']))
{
    $product = new Product($_POST, $_FILES);
    $message = $product->save();
    include 'pages/home.php';
}
elseif (isset($_POST['update_product']))
{
    $id             = $_POST['id'];
    $product        = new Product($_POST, $_FILES);
    $productInfo    = $product->getProductInfoById($id);
    $updateMessage  = $product->updateProductInfo($productInfo);
    $products       = $product->getAllProductInfo();
    include 'pages/edit.php';
}