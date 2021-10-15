<div class="row">
    <div class="col-75">
        <div class="container">
            <form action="check_sum_detail.php" method="GET">
                <?php
                $plant_value_array = array(
                    "П" => "Пискаревка",
                    "К" => "Колпино",
                );
                $date = new DateTime("NOW");
                $date->sub(new DateInterval('P1D'));
                if (!empty($_GET['start_date'])) {
                    $start = $_GET['start_date'];
                } else {
                    $start = $date->format('Y-m') . '-01';
                }
                if (!empty($_GET['end_date'])) {
                    $end = $_GET['end_date'];
                } else {
                    $end = $date->format('Y-m-d');
                }
                ?>
                <p></p>
                <div class="row">
                    <div class="col-33">
                        <label for="start_date">Дата начала: </label>
                        <input type="date" id="start_date" name="start_date" value=<?php echo $start ?>>
                    </div>
                    <div class="col-33">
                        <label for="end_date">Дата окончания: </label>
                        <input type="date" id="end_date" name="end_date" value=<?php echo $end ?>>
                    </div>
                    <div class="col-33">
                        <label for="plant">Площадка: </label>
                        <select name="plant">
                            <?php
                            foreach ($plant_value_array as $key => $value) {
                                if ($_GET['plant'] == $key) {
                                    echo "<option selected='selected' value='" . $key . "'>" . $value . "</option>";
                                } else {
                                    echo "<option value='" . $key . "'>" . $value . "</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-75">
                        <input type="submit" class="buttonsubmit" value="Найти данные">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>