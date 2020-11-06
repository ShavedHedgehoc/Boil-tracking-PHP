<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (!empty($_GET['productid'])) {
    $productid = $_GET['productid'];
}
if (!empty($_GET['manufacturerid'])) {
    $manufacturerid = $_GET['manufacturerid'];
}
if (!empty($_GET['manufacturerlotid'])) {
    $manufacturerlotid = $_GET['manufacturerlotid'];
}
if (
    (!empty($productid))
    and(!empty($manufacturerid)) 
    and (!empty($manufacturerlotid))
) {
    $productid = $_GET['productid'];
    $manufacturerid = $_GET['manufacturerid'];
    $manufacturerlotid = $_GET['manufacturerlotid'];
    $set_tsql =
"SELECT DISTINCT 
    BatchName, 
    ManufacturerLotName, 
    ManufacturerPK, 
    ManufacturerLotName, 
    ManufacturerName ,
    ProductId, 
    ProductName
FROM lotsview lv 
WHERE lv.ProductId=? 
AND lv.ManufacturerPK=? 
AND lv.ManufacturerLotPK=?";
    $set_params = array($productid, $manufacturerid, $manufacturerlotid);
    require_once $_SERVER['DOCUMENT_ROOT'] . '/scripts/get_data.php';
    $content = $_SERVER['DOCUMENT_ROOT'] . '/templates/manufacturerlot_data.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/templates/main.php';
}else{
    $content = $_SERVER['DOCUMENT_ROOT'] . '/templates/manufacturerlot_data.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/templates/main.php';
}
?>