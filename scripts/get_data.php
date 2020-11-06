<?php
// Дописать обработку ошибок
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $data=array();
    require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/connection_prop.php';
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if ($conn) {
        $tsql = $set_tsql;
        $params = $set_params;
        $getResults = sqlsrv_query($conn, $tsql, $params);
        if ($getResults) {
            $rows_exist = sqlsrv_has_rows($getResults);
            if ($rows_exist) {                
                while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
                    $data[]=$row;
                }
            }
        }
        sqlsrv_close($conn);
    }
?>
