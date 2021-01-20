<!-- <?php if (!empty($month) && !empty($year)) : ?>
    <?php echo $month . substr($year, -1) ?>
<?php endif; ?>




<?php if (!empty($year)) : ?>
    <?php echo $year ?>
<?php endif; ?>

<?php if (!empty($data)) : ?>

    <?php foreach ($data as $row) : ?>
        <?php echo $row['BatchName'] ?>
    <?php endforeach ?>
<?php endif; ?> -->


<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php if (!empty($data)) : ?>


    <table>
        <thead>
            <tr>
                <th>№</th>
                <th>Дата</th>
                <th>Партия</th>
                <th>Код 1С</th>
                <th>Наименование</th>
                <th>План</th>
                <th>Факт</th>

            </tr>
        </thead>
        <tbody>
            <?php $counter = 1; ?>
            <?php foreach ($data as $row) : ?>
                <tr>
                    <td align="center">
                        <?php echo $counter ?>
                    </td>
                    <td align="center">
                        <?php echo (date_format($row['BatchDate'], 'd-m-Y')) ?>                        
                    </td>
                    <td align="center">
                        <a href="batch_detail.php?batchname=<?php echo urlencode($row['BatchName']) ?>">
                            <?php echo $row['BatchName'] ?>
                        </a>
                    </td>
                    <td align="center">
                        <?php echo $row['ProductId'] ?>
                    </td>
                    <td>
                        <a href="product_detail.php?productid=<?php echo urlencode($row['ProductId']) ?>">
                            <?php echo $row['ProductName'] ?>
                        </a>
                    </td>
                    <td align="center">
                        <?php echo $row['Quantity'] ?>
                    </td>
                    <?php if (!empty($row['Total'])) : ?>
                        <?php if ($row['Total'] != $row['Quantity']) : ?>
                            <td bgcolor="lightyellow" align="center">
                                <?php echo $row['Total'] ?>
                            </td>
                        <?php else : ?>
                            <td bgcolor="lightgreen" align="center">
                                <?php echo $row['Total'] ?>
                            </td>
                        <?php endif ?>


                    <?php else : ?>
                        <td bgcolor="pink" align="center">
                            -
                        </td>
                    <?php endif ?>
                </tr>
                <?php $counter += 1; ?>
            <?php endforeach ?>
        </tbody>
    </table>
<?php else : ?>
    <h4>
        <p>На сервере не загружены данные о варке...</p>
    </h4>
<?php endif; ?>