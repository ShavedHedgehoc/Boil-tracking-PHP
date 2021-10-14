<?php if (!empty($data)) : ?>
    <?php
    require 'vendor/autoload.php';
    $generator = new Picqer\Barcode\BarcodeGeneratorSVG();
    $batch = $data[0]['BatchName'];
    $app = '00';
    $shnyaga = '00000';
    $code = '000000';
    $barcode = '(' . $batch . ')(' . $app . ')(' . $shnyaga . ')(' . $code . ')';
    ?>

    <?php echo $generator->getBarcode($barcode, $generator::TYPE_CODE_128, 1, 50) . '<br/>'; ?>
    <?php echo $barcode . '<br/>';  ?>
    <h1><?php echo 'Партия  ' . $batch; ?></h1>
    <h3>Позиции, партии которых не попали в систему:</h3>

    <table>
        <thead>
            <tr>
                <th>№№</th>
                <th>Код 1С</th>
                <th>Наименование</th>
                <th>Количество</th>
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
                        <?php echo $row['ProductName'] ?>
                    </td>
                    <td align="center">
                        <?php printf('%0.5g', $row['Quantity']) ?>
                        <!-- <?php echo $row['Quantity'] ?> -->
                    </td>
                </tr>
                <?php $counter += 1; ?>
            <?php endforeach ?>
        </tbody>
    </table>
<?php else : ?>
    <h1>Все хорошо! )</h1>
<?php endif; ?>