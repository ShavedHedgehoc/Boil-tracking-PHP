<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php if (!empty($data)) : ?>
    <p>
    <h3>Дата варки: <?php echo $data[0]['BatchDate']->format('d-m-Y'); ?></h3>
    </p>
    <p>
        <?php if ($data[0]['Plant'] == "П") : ?>
    <h3>Площадка: Пискаревский</h3>
<?php else : ?>
    <h3>Площадка: Колпино</h3>
<?php endif ?>
</p>

<table>
    <thead>
        <tr>
            <th>№</th>
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
                    <?php echo $row['ProductId'] ?>
                </td>
                <td>
                    <a href="product_detail.php?productid=<?php echo urlencode($row['ProductId']) ?>">
                        <?php echo $row['ProductName'] ?>
                    </a>
                </td>
                <td align="center">
                    <?php printf('%0.5g', $row['Quantity']) ?>
                    <!-- <?php echo  $row['Quantity'] ?> -->
                </td>
                <?php if (!empty($row['Total'])) : ?>
                    <?php if ($row['Total'] != $row['Quantity']) : ?>
                        <td bgcolor="lightyellow" align="center">
                            <?php printf('%0.5g', $row['Total']) ?>
                            <!-- <?php echo $row['Total'] ?> -->
                        </td>
                    <?php else : ?>
                        <td bgcolor="lightgreen" align="center">
                            <?php printf('%0.5g', $row['Total']) ?>
                            <!-- <?php echo $row['Total'] ?> -->
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