<?php
require_once "vendor/autoload.php";

use App\classes\Home;

if(isset($_GET['page']))
{
    if($_GET['page'] == 'home')
    {
        $studentInfo = new Home();
        $studentData = $studentInfo->studentInformation();
        include 'pages/home.php';
    }
    elseif($_GET['page']=='about')
    {
        include "pages/about.php";
    }
    elseif ($_GET['page']=='services')
    {
        include "pages/services.php";
    }
    elseif ($_GET['page']=='contact')
    {
        include "pages/contact.php";
    }
}