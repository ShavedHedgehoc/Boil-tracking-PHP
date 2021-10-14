<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// $start_date = '2021-01-10';
// $end_date = '2021-15-10';
$plant = 'П';



if (!empty($_GET['start_date'])) {
    $start = $_GET['start_date'];
    $start_date = substr($start, 0, 4) . '-' . substr($start, 8, 2) . '-' . substr($start, 5, 2);
};
if (!empty($_GET['end_date'])) {
    $end = $_GET['end_date'];
    $end_date = substr($end, 0, 4) . '-' . substr($end, 8, 2) . '-' . substr($end, 5, 2);
};
if (!empty($_GET['plant'])) {
    $plant = $_GET['plant'];
};
if (!empty($start_date) and !empty($end_date) and !empty($plant)) {
    $set_tsql =
        "SELECT 
            distinct BatchName,
            BatchDate,
            Plant,
            Total
        FROM boilview b 
        WHERE 
            (b.BatchDate >= Convert(datetime, ?))and(
            b.BatchDate <= Convert(datetime, ?))and(
            b.Plant=?)and(
            b.Total is Null)
        Order by
            BatchDate";
    $set_params = array($start_date, $end_date, $plant);
    require $_SERVER['DOCUMENT_ROOT'] . '/scripts/get_data.php';
    $content = $_SERVER['DOCUMENT_ROOT'] . '/templates/check_sum_form.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/templates/main.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/templates/check_sum_data.php';
} else {
    $content = $_SERVER['DOCUMENT_ROOT'] . '/templates/check_sum_form.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/templates/main.php';
}
