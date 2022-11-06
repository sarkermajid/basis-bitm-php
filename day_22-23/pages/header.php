<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Website</title>
</head>
<body class="bg-secondary">
<nav class="navbar navbar-expand-md navbar-dark bg-dark py-3 shadow-lg">
    <div class="container">
        <a href="" class="navbar-brand">E-commerce Website</a>
        <ul class="navbar-nav">
            <li><a href="action.php?page=home" class="nav-link">Home</a></li>
            <li><a href="action.php?page=product" class="nav-link">Product</a></li>
            <li class="dropdown">
                <a href="action.php?page=product-category" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product Category</a>
                <ul class="dropdown-menu">
                    <?php foreach ($categories as $category) { ?>
                    <li><a href="action.php?page=category-product&&category_id=<?php echo $category['id'] ?>" class="dropdown-item"><?php echo $category['name'] ?></a></li>
                    <?php } ?>
                </ul>
            </li>
        </ul>
    </div>
</nav>