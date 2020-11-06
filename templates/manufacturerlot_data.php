<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<p>
    <h2>Информация по партии производителя:</h2>
</p>
<?php if (!empty($data)) : ?>
    <p>
        <h3>Партия: <?php echo $data[0]['ManufacturerLotName'] ?></h3>
    </p>
    <p>
        <h3>Сырье:
            <a href="product_detail.php?productid=<?php echo urlencode($data[0]['ProductId']) ?>">
                <?php echo $data[0]['ProductName'] ?>
            </a>
        </h3>
    </p>
    <p>
        <h3>Производитель:
            <a href="manufacturer_detail.php?manufacturerid=<?php echo urlencode($data[0]['ManufacturerPK']) ?>">
                <?php echo $data[0]['ManufacturerName'] ?>
            </a>
        </h3>
    </p>
    <table class='table'>
        <tr>
            <th>Варка</th>
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
        <p>На сервере нет данных о партии производителя с таким кодом...</p>
    </h4>
<?php endif; ?>