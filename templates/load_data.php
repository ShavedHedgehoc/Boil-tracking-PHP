<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<p>
    <h3>Информация по загрузкам:</h3>
</p>
<?php if (!empty($data)) : ?>
    <table>
        <thead>
            <tr>
                <th>№</th>
                <th>Код 1С</th>
                <th>Наименование</th>
                <th>Квазипартия</th>
                <th>Загрузил</th>
                <th>Дата</th>
                <th>Время</th>
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
                        <a href="lot_detail.php?lot=<?php echo urlencode($row['LotName']) ?>">
                            <?php echo $row['LotName'] ?>
                        </a>
                    </td>
                    <td>
                        <?php echo $row['AuthorName'] ?>
                    </td>
                    <td align="center">
                        <?php echo (date_format($row['CreateDate'], 'd-m-Y')) ?>
                    </td>
                    <td align="center">
                        <?php echo (date_format($row['CreateDate'], 'H:i:s')) ?>
                    </td>
                </tr>
                <?php $counter += 1; ?>
            <?php endforeach ?>
        </tbody>
    </table>
<?php else : ?>
    <h4>
        <p>На сервере нет данных о загрузках...</p>
    </h4>
<?php endif; ?>