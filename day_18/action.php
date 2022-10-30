<?php

require_once "vendor/autoload.php";
use App\classes\Blog;

if(isset($_GET['page']))
{
    if($_GET['page'] == "home")
    {
        include "pages/home.php";
    }
    elseif($_GET['page'] == "about")
    {
        include 'pages/about.php';
    }
    elseif ($_GET['page'] == "blog")
    {
        $blog = new Blog();
        $blogs = $blog->getBlog();
        include "pages/blog.php";
    }
    elseif($_GET['page']=='details')
    {
        $id = $_GET['id'];
        $blog = new Blog();
        $singleBlog = $blog->getBlogById($id);
        include 'pages/details.php';
    }
    elseif ($_GET['page'] == 'services')
    {
        include "pages/services.php";
    }
    elseif ($_GET['page'] == "contact")
    {
        include "pages/contact.php";
    }
}