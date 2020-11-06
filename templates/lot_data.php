<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<h3>Поиск по квазипартии:</h3>
<form action="lot_detail.php" method="GET">
    <a>Квазипартия: <input type="text" name="lot"></a>
    <input type="submit" value="Найти">
</form>
<?php if (!empty($lot)) : ?>
    <p></p>
    <table>
        <thead>
            <tr>
                <th>
                    <p>
                        <h2>Информация по квазипартии: <?php echo $lot ?></h2>
                    </p>
                    <?php if (!empty($data)) : ?>
                        <p>
                            <h3>
                                <a href="product_detail.php?productid=<?php echo urlencode($data[0]['ProductId']) ?>">
                                    <?php echo $data[0]['ProductName'] ?>
                                </a>
                            </h3>
                        </p>
                        <p>
                            <h3>Поставщик:
                                <a href="seller_detail.php?sellerid=<?php echo urlencode($data[0]['SellerPK']) ?>">
                                    <?php echo $data[0]['SellerName'] ?>
                                </a>
                            </h3>
                        </p>
                        <p>
                            <h3>Производитель:
                                <a href="manufacturer_detail.php?manufacturerid=<?php echo urlencode($data[0]['ManufacturerPK']) ?>">
                                    <?php echo $data[0]['ManufacturerName'] ?>
                                </a>
                                Партия производителя:
                                <a href="manufacturerlot_detail.php?productid=<?php echo urlencode($data[0]['ProductId']) ?>&manufacturerid=<?php echo urlencode($data[0]['ManufacturerPK']) ?>&manufacturerlotid=<?php echo urlencode($data[0]['ManufacturerLotPK']) ?>">
                                    <?php echo $data[0]['ManufacturerLotName'] ?>
                                </a>
                            </h3>
                        </p>                    
                    <?php endif; ?>
                </th>
            </tr>
        </thead>
    </table>
<?php endif; ?>
<?php if (!empty($lot)) : ?>
    <?php if (!empty($data)) : ?>
        <p></p>
        <table class='table'>
            <tr>
                <th>Варки с этой квазипартией:</th>
            </tr>
            <tr>
                <td>
                    <?php foreach ($data as $row) : ?>
                        <a href="batch_detail.php?batchname=<?php echo urlencode($row['BatchName']) ?>">
                            <?php echo $row['BatchName'] ?>
                        </a>
                    <?php endforeach ?>
                </td>
            </tr>
        </table>
    <?php else : ?>
        <h4>
            <p>На сервере нет данных о квазипартии с таким кодом...</p>
        </h4>
    <?php endif; ?>
<?php endif; ?>