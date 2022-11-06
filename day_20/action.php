<?php

require_once "vendor/autoload.php";
use App\classes\Fullname;
use App\classes\Calculator;
use App\classes\Series;
use App\classes\Sumofseries;
use App\classes\EvenOdd;
use App\classes\WordStringCount;
use App\classes\PasswordGenerate;

$result = '';
$wordResult = '';
$stringResult = '';

if(isset($_GET['page']))
{
    if($_GET['page'] == 'home')
    {
        include "pages/home.php";
    }
    elseif ($_GET['page'] == 'full-name')
    {
        include "pages/full-name.php";
    }
    elseif ($_GET['page']=='calculator')
    {
        include "pages/calculator.php";
    }
    elseif ($_GET['page'] == 'series')
    {
        include 'pages/series.php';
    }
    elseif ($_GET['page'] == 'sum-series')
    {
        include 'pages/sumofseries.php';
    }
    elseif ($_GET['page'] == 'even-odd')
    {
        include 'pages/even-odd.php';
    }
    elseif ($_GET['page'] == 'password-generator')
    {
        include 'pages/password-generator.php';
    }
    elseif ($_GET['page'] == 'word-string-count')
    {
        include 'pages/word-string-count.php';
    }
}
elseif (isset($_POST['full_name_btn']))
{
    $fullName = new Fullname($_POST);
    $result = $fullName->getFullName();
    include "pages/full-name.php";
}
elseif( isset($_POST['calculate_btn']))
{
    $calculator = new Calculator($_POST);
    $result = $calculator->getResult();
    include "pages/calculator.php";
}
elseif(isset($_POST['series_btn']))
{
    $series = new Series($_POST);
    $result = $series->getResult();
    include "pages/series.php";
}
elseif(isset($_POST['sum_series_btn']))
{
    $sumofseries = new Sumofseries($_POST);
    $result = $sumofseries->getResult();
    include "pages/sumofseries.php";
}
elseif(isset($_POST['even_odd_btn']))
{
    $evenOdd = new EvenOdd($_POST);
    $result = $evenOdd->getResult();
    include "pages/even-odd.php";
}
elseif(isset($_POST['password_btn']))
{
    $passwordGenerate = new PasswordGenerate($_POST);
    $result = $passwordGenerate->newPassword();
    include "pages/password-generator.php";
}
elseif(isset($_POST['word_str_btn']))
{
    $wordStringCount = new WordStringCount($_POST);
    $wordResult = $wordStringCount->wordCount();
    $stringResult = $wordStringCount->stringCount();
    include 'pages/word-string-count.php';
}

else
{
    include "pages/home.php";
}