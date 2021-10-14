<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (!empty($_GET['batchname'])) {
    $batchname = $_GET['batchname'];
}
if (!empty($batchname)) {
    $set_tsql = "SELECT 
BatchName,
BatchDate,
Plant,
ProductId,
ProductName,
Quantity,
Total
FROM boilview b 
Where (Total is Null)AND(BatchName=?)";
    $set_params = array($batchname);
    require $_SERVER['DOCUMENT_ROOT'] . '/scripts/get_data.php';
    $content = $_SERVER['DOCUMENT_ROOT'] . '/templates/card.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/templates/print.php';
} else {
    include $_SERVER['DOCUMENT_ROOT'] . '/templates/print.php';
}
