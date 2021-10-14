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
                <th>Действия</th>
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
                        <form action="card_detail.php" method="GET">
                            <input type="submit" value="Карточка">
                            <input type="hidden" name="batchname" value=<?php echo $row['BatchName'] ?>>
                        </form>




                        <!-- <a href="card_detail.php?batchname=<?php echo urlencode($row['BatchName']) ?>">
                            <?php echo $row['BatchName'] ?>
                        </a> -->
                    </td>
                </tr>
                <?php $counter += 1; ?>
            <?php endforeach ?>
        </tbody>
    </table>
<?php else : ?>
    <h4>
        <p>Все хорошо!)</p>
    </h4>
<?php endif; ?>