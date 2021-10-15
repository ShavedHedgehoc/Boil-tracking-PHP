<div class="row">
    <div class="col-75">
        <div class="container">
            <form action="check_detail.php" method="GET">                
                <?php
                $month_value_array = array(
                    "A" => "Январь",
                    "B" => "Февраль",
                    "C" => "Март",
                    "D" => "Апрель",
                    "E" => "Май",
                    "F" => "Июнь",
                    "G" => "Июль",
                    "H" => "Август",
                    "I" => "Сентябрь",
                    "J" => "Октябрь",
                    "K" => "Ноябрь",
                    "L" => "Декабрь",
                );
                $year_value_array = array(
                    "2018" => "2018",
                    "2019" => "2019",
                    "2020" => "2020",
                    "2021" => "2021",
                );
                $plant_value_array = array(
                    "П" => "Пискаревка",
                    "К" => "Колпино",
                );
                ?>
                <p></p>
                <div class="row">
                    <div class="col-33">
                    <label for="month">Месяц: </label>
                        <select name="month">
                            <?php
                            foreach ($month_value_array as $key => $value) {
                                if ($_GET['month'] == $key) {
                                    echo "<option selected='selected' value='" . $key . "'>" . $value . "</option>";
                                } else {
                                    echo "<option value='" . $key . "'>" . $value . "</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-33">
                    <label for="year">Год: </label>
                        <select name="year">
                            <?php
                            foreach ($year_value_array as $key => $value) {
                                if ($_GET['year'] == $key) {
                                    echo "<option selected='selected' value='" . $key . "'>" . $value . "</option>";
                                } else {
                                    echo "<option value='" . $key . "'>" . $value . "</option>";
                                }
                            }
                            ?>
                        </select>
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