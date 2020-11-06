<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (!empty($_GET['lot'])) {
    $lot = $_GET['lot'];
}
if (!empty($lot)) {
    $set_tsql = "SELECT DISTINCT
        LotName,
        ProductId,
        ProductName,
        SellerPK,
        SellerName,
        ManufacturerName,
        ManufacturerPK,
        ManufacturerLotPK,
        ManufacturerLotName,
        BatchName
    FROM lotsview lv 
    WHERE lv.LotName=?";
    $set_params = array($lot);
    require_once $_SERVER['DOCUMENT_ROOT'] . '/scripts/get_data.php';
    $content = $_SERVER['DOCUMENT_ROOT'] . '/templates/lot_data.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/templates/main.php';
}else{
    $content = $_SERVER['DOCUMENT_ROOT'] . '/templates/lot_data.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/templates/main.php';
}
?>
