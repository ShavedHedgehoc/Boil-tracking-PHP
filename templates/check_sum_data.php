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
                        <?php echo $row['BatchName'] ?>
                    </td>
                    <td align="center">
                        <form action="" method="POST">
                            <input type="submit" name="act" value="Варка" class="button buttongreen">
                            <input type="submit" name="act" value="Карточка" class="button buttonblue">
                            <input type="hidden" name="batchname" value=<?php echo $row['BatchName'] ?>>
                            <?php
                            if (isset($_POST['act']) && isset($_POST['batchname'])) {
                                if ($_POST['act'] == "Варка") {
                                    header("Location:batch_detail.php?batchname=" . $_POST['batchname']);
                                };
                                if ($_POST['act'] == "Карточка") {
                                    header("Location:card_detail.php?batchname=" . $_POST['batchname']);
                                };
                            };
                            ?>
                        </form>
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