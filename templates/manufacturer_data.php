<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<p>
    <h2>Информация по производителю:</h2>
</p>
<?php if (!empty($data)) : ?>
    <p>
        <h3><?php echo $data[0]['ManufacturerName'] ?></h3>
    </p>
    <table class='table'>
        <thead>
        <tr>
            <th>№</th>
            <th>Наименование</th>
            <th>Квазипартия</th>
            <th>Дата прихода</th>
            <th>Партия производителя</th>
            <th>Поставщик</th>
        </tr>
        </thead>
        <tbody>
        <?php $counter = 1; ?>
        <?php foreach ($data as $row) : ?>
            <tr>
                <td align="center">
                            <?php echo $counter ?>
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
                <td align="center">                            
                            <?php echo ($row['LotDate']->format('d-m-Y')) ?>                            
                </td>
                <td>
                    <a href="manufacturerlot_detail.php?productid=<?php echo urlencode($row['ProductId']) ?>&manufacturerid=<?php echo urlencode($row['ManufacturerPK']) ?>&manufacturerlotid=<?php echo urlencode($row['ManufacturerLotPK']) ?>">
                        <?php echo $row['ManufacturerLotName'] ?>
                    </a>
                </td>
                <td>
                    <a href="seller_detail.php?sellerid=<?php echo urlencode($row['SellerPK']) ?>">
                        <?php echo $row['SellerName'] ?>
                    </a>
                </td>
            </tr>
            <?php $counter += 1; ?>
        <?php endforeach ?>
        <tbody>
    </table>
<?php else : ?>
    <h4>
        <p>На сервере нет данных о производителе с таким кодом...</p>
    </h4>
<?php endif; ?>