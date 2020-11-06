<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (!empty($_GET['batchname'])) {
    $batchname = $_GET['batchname'];
}
if (!empty($batchname)) {
    $set_tsql = "SELECT 
       BatchName
      ,ProductId
      ,ProductName
      ,LotName
      ,AuthorName
      ,Quantity
      ,CreateDate 
    FROM batchview w 
    WHERE w.BatchName=?
    ORDER BY w.ProductName ASC";
    $set_params = array($batchname);
    require $_SERVER['DOCUMENT_ROOT'] . '/scripts/get_data.php';
    $content = $_SERVER['DOCUMENT_ROOT'] . '/templates/weight_data.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/templates/page.php';
}else{
    $content = $_SERVER['DOCUMENT_ROOT'] . '/templates/weight_data.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/templates/main.php';
}
?>
