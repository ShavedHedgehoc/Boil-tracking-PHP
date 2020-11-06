<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
if (!empty($_GET['sellerid'])) {
    $sellerid = $_GET['sellerid'];
}
if (!empty($sellerid)) {
    $set_tsql = "SELECT 
    ProductName
    ,ManufacturerLotName
    ,ManufacturerName
    ,ProductId
    ,ManufacturerLotPK
    ,ManufacturerPK
    ,SellerPK
    ,SellerName
    ,LotName
    ,LotDate
    FROM lotdetailview ldv 
    WHERE ldv.SellerPK=? 
    ORDER BY 'ProductName', 'LotDate' ASC ";
    $set_params = array($sellerid);
    require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/get_data.php';
    $content=$_SERVER['DOCUMENT_ROOT'].'/templates/seller_data.php';
    include $_SERVER['DOCUMENT_ROOT'].'/templates/main.php';
}else{
    $content = $_SERVER['DOCUMENT_ROOT'] . '/templates/seller_data.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/templates/main.php';
}
?>
