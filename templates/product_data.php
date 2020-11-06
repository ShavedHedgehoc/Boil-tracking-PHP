<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<h3>Поиск по коду сырья:</h3>
<form action="product_detail.php" method="GET">
    <a>Код сырья: <input type="text" name="productid"></a>
    <input type="submit" value="Найти">
</form>
<p></p>
<?php if (!empty($productid)) : ?>
    <table>
        <thead>
            <tr>
                <th>
                    <?php if (!empty($data)) : ?>
                        <p>
                            <h3><?php echo $data[0]['ProductName'] ?></h3>
                        </p>
                        <h3>Код 1С: <?php echo $productid ?></h3>
                    <?php else : ?>
                        <p>
                            <h3>Код 1С: <?php echo $productid ?></h3>
                        </p>
                        <p>
                            <h3>На сервере нет данных о сырье с таким кодом...</h3>
                        </p>
                    <?php endif; ?>
                </th>
            </tr>
        </thead>
    </table>
    <p></p>
    <?php if (!empty($data)) : ?>
        <table class='table table-striped'>
            <thead class='thead-dark'>
                <tr>
                    <th>№</th>                    
                    <th>Квазипартия</th>
                    <th>Дата прихода</th>
                    <th>Поставщик</th>
                    <th>Производитель</th>
                    <th>Партия производителя</th>
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
                            <a href="lot_detail.php?lot=<?php echo urlencode($row['LotName']) ?>">
                                <?php echo $row['LotName'] ?>
                            </a>
                        </td>
                        <td align="center">                            
                            <?php echo ($row['LotDate']->format('d-m-Y')) ?>                            
                        </td>
                        <td>
                            <a href="seller_detail.php?sellerid=<?php echo urlencode($row['SellerPK']) ?>">
                                <?php echo $row['SellerName'] ?>
                            </a>
                        </td>
                        <td>
                            <a href="manufacturer_detail.php?manufacturerid=<?php echo urlencode($row['ManufacturerPK']) ?>">
                                <?php echo $row['ManufacturerName'] ?>
                            </a>
                        </td>
                        <td>
                            <a href="manufacturerlot_detail.php?productid=<?php echo urlencode($row['ProductId']) ?>&manufacturerid=<?php echo urlencode($row['ManufacturerPK']) ?>&manufacturerlotid=<?php echo urlencode($row['ManufacturerLotPK']) ?>">
                                <?php echo $row['ManufacturerLotName'] ?>
                            </a>
                        </td>
                    </tr>
                    <?php $counter += 1; ?>
                <?php endforeach ?>
            </tbody>
        </table>
    <?php endif; ?>
<?php endif; ?>