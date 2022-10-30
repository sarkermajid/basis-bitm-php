<?php
require_once "vendor/autoload.php";
use App\classes\Employee;

if(isset($_GET['page']))
{
    if($_GET['page'] == 'home')
    {
        include "pages/home.php";
    }
    elseif ($_GET['page'] == 'employee')
    {
        $employee = new Employee();
        $allEmployees = $employee->getAllEmployee();
        include "pages/employee.php";
    }
    elseif($_GET['page'] == 'details')
    {
        $id = $_GET['id'];
        $employee = new Employee();
        $singleEmployee = $employee->getSingleEmployee($id);
        include 'pages/details.php';
    }
}