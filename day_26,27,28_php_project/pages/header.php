<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body class="bg-secondary">

<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-lg">
    <div class="container">
        <div class="navbar-brand text-info" style="font-family: cursive">PHP PROJECT</div>
        <ul class="navbar-nav">
            <li><a href="action.php?page=home" class="nav-link">Home</a></li>
            <?php if(isset($_SESSION['id'])) { ?>
                <li><a href="action.php?page=add-blog" class="nav-link">Add Blog</a></li>
                <li><a href="action.php?page=manage-blog" class="nav-link">Manage Blog</a></li>
                <li><a href="action.php?page=logout" class="nav-link">Logout</a></li>
            <?php } else {?>
                <li><a href="action.php?page=login" class="nav-link">Login</a></li>
            <?php } ?>
        </ul>
    </div>
</nav>