<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (!empty($_GET['batchname'])) {
$batchname = $_GET['batchname'];
}
if (!empty($batchname)){
$content = $_SERVER['DOCUMENT_ROOT'] . '/templates/batch_data.php';
include $_SERVER['DOCUMENT_ROOT'] . '/templates/main.php';
include $_SERVER['DOCUMENT_ROOT'] . '/boil_detail.php';
include $_SERVER['DOCUMENT_ROOT'] . '/weight_detail.php';
include $_SERVER['DOCUMENT_ROOT'] . '/load_detail.php';
}else{
    $content = $_SERVER['DOCUMENT_ROOT'] . '/templates/batch_data.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/templates/main.php';
}
?>