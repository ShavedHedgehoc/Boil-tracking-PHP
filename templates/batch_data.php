<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<h3>Поиск по номеру варки:</h3>
<form action="batch_detail.php" method="GET">
    <a>Номер варки: <input type="text" name="batchname"></a>
    <input type="submit" value="Найти">
</form>
<?php if (!empty($batchname)) : ?>
    <p>
        <table>
            <thead>
                <tr>
                    <th>
                        <h2>Информация по варке: <?php echo $batchname; ?></h2>
                    </th>
                </tr>
            </thead>
        </table>        
    </p>
<?php endif; ?>