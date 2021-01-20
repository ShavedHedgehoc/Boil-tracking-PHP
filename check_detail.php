<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (!empty($_GET['month'])) {
    $month = $_GET['month'];
}
if (!empty($_GET['year'])) {
    $year = $_GET['year'];
}
if (!empty($_GET['plant'])) {
    $plant = $_GET['plant'];
}
if (!empty($month) and !empty($year)) {
$set_tsql = "SELECT 
BatchName,
BatchDate,
Plant,
ProductId,
ProductName,
Quantity,
Total
FROM boilview b 
Where (substring(BatchName, len(BatchName)-1,2)=?)AND(Total is Null)AND(Plant=?)";
$set_params = array($month . substr($year, -1),$plant);
require $_SERVER['DOCUMENT_ROOT'] . '/scripts/get_data.php';
$content = $_SERVER['DOCUMENT_ROOT'] . '/templates/check_form.php';
include $_SERVER['DOCUMENT_ROOT'] . '/templates/main.php';
include $_SERVER['DOCUMENT_ROOT'] . '/templates/check_data.php';
} else {
    $content = $_SERVER['DOCUMENT_ROOT'] . '/templates/check_form.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/templates/main.php';
}


