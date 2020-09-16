<?php
/*
 * Plugin Name: Input data
 * Description: Here you can enter some information
 * Version: 1.0
 */
$orm = $_SERVER["DOCUMENT_ROOT"] . "\wp-content\plugins\wp-orm-master\wp-orm.php";
require_once "$orm";
require_once "update-user.php";

class   Input
{
    function __construct()
    {
        add_shortcode('input_data', array($this, 'inputDataShortcode'));
    }

    function inputDataShortcode()
    {
        global $wpdb;
        ?>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js"
                type="text/javascript"></script>

        <form id="update_form" method="post" action="">
            <?php
            $currentUser = wp_get_current_user();
            if ($currentUser->user_login == 'root') {
                ?>
                <input autofocus required type="text" id="name_to_change" name="name_to_change"
                       placeholder="Необхідний користувач">
                <?php
            }
            ?>
            <input required type="text" id="name" name="name" placeholder="Введіть нове ім'я">
            <br/><input required type="text" id="phone" name="phone" placeholder="Введіть новий телефон"><br/>
            <script type="text/javascript">
                jQuery(function ($) {
                    $("#phone").mask("+380(99) 999-99-99");
                });
            </script>

            <br/><label id="l_country">Оберіть улюблену країну:</label>
            <select required id="country" name="country">
                <?php
                $arrOfCountries = $wpdb->get_results("SELECT country FROM select_country", ARRAY_N);
                foreach ($arrOfCountries as $key => $value) {
                    echo "<option>$value[0]</option>";
                }
                ?>
            </select><br/>

            <br/><label id="l_color">Оберіть улюблений колір:</label>
            <select required id="color" name="color">
                <?php
                $arrOfCountries = $wpdb->get_results("SELECT color FROM select_color", ARRAY_N);
                foreach ($arrOfCountries as $key => $value) {
                    echo "<option>$value[0]</option>";
                }

                ?>
            </select><br/>
            <br/><label id="start_date">Початок події:</label>
            <input required type="date" id="first_calendar" name="first_calendar" value="Початок події">
            <br/><label id="end_date">Кінець події:</label>
            <input required type="date" id="second_calendar" name="second_calendar" value="Кінець події"><br/>
            <br/><input  type="submit" id="updateBtn" name="updateBtn" value="Редагувати">
            <input type="reset" id="reset" name="reset" value="Очистити">
            </div>
        </form>
        <?php

    }
}

new Input();

