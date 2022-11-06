<?php

require_once 'vendor/autoload.php';
use App\classes\Student;


if(isset($_GET['page']))
{
    if($_GET['page'] == 'registration')
    {
        include 'pages/registration.php';
    }
    elseif ($_GET['page'] == 'manage')
    {
        $student = new Student();
        $students = $student->getAllStudentInfo();
        include 'pages/manage.php';
    }
}
elseif (isset($_POST['submit']))
{
    $student = new Student($_POST);
    $message = $student->save();
    include 'pages/registration.php';
}
elseif (isset($_GET['delete']))
{
    $student = new Student();
    $message = $student->delete($_GET['delete']);
    $students = $student->getAllStudentInfo();
    include 'pages/manage.php';
}
elseif(isset($_GET['edit']))
{
    $student = new Student();
    $studentInfo = $student->getStudentInfoById($_GET['edit']);
    include 'pages/edit.php';
}
elseif(isset($_POST['update']))
{
    $student = new Student($_POST);
    $student->update();
    include 'pages/manage.php';
}