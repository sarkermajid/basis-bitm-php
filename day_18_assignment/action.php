<?php

require_once "vendor/autoload.php";
use App\classes\Student;

if(isset($_GET['page']))
{
    if($_GET['page'] == 'home')
    {
        include "pages/home.php";
    }
    elseif($_GET['page'] == 'student')
    {
        $student = new Student();
        $allStudent = $student->getStudent();
        include "pages/student.php";
    }
    elseif ($_GET['page'] == 'details')
    {
        $id = $_GET['id'];
        $student = new Student();
        $studentDetails = $student->getStudentDetails($id);
        include "pages/details.php";
    }
}