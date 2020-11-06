<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
if (!empty($_GET['productid'])) {
    $productid = $_GET['productid'];
}
if (!empty($productid)) {
    $set_tsql = 
    "SELECT 
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
    WHERE ldv.ProductId=?
    ORDER BY LotDate ASC";
    $set_params = array($productid);
    require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/get_data.php';
    $content=$_SERVER['DOCUMENT_ROOT'].'/templates/product_data.php';
    include $_SERVER['DOCUMENT_ROOT'].'/templates/main.php';
}else{
    $content = $_SERVER['DOCUMENT_ROOT'] . '/templates/product_data.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/templates/main.php';
}
?>
