<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
if (!empty($_GET['manufacturerid'])) {
    $manufacturerid = $_GET['manufacturerid'];
}
if (!empty($manufacturerid)) {
    $set_tsql = "SELECT * 
    FROM lotdetailview ldv 
    WHERE ldv.ManufacturerPK=? 
    ORDER BY 'ProductName' ASC";
    $set_params = array($manufacturerid);
    require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/get_data.php';
    $content=$_SERVER['DOCUMENT_ROOT'].'/templates/manufacturer_data.php';
    include $_SERVER['DOCUMENT_ROOT'].'/templates/main.php';
}else{
    $content = $_SERVER['DOCUMENT_ROOT'] . '/templates/manufacturer_data.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/templates/main.php';
}
?>
