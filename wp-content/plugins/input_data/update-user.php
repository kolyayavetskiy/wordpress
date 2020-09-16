<?php
if (isset($_POST['updateBtn'])) {
    if (!function_exists('wp_get_current_user')) {
        include(ABSPATH . "wp-includes/pluggable.php");
    }
    $currentUser = wp_get_current_user();
    if ($currentUser->user_login == 'root') {
        selectUpdate($wpdb, $_POST['name_to_change']);
    } else {
        selectUpdate($wpdb, $currentUser->user_nicename);
    }
}
function selectUpdate($wpdb, $who)
{
    $arrColors = $wpdb->get_results("SELECT color FROM select_color", ARRAY_N);
    $arrCountries = $wpdb->get_results("SELECT country FROM select_country", ARRAY_N);
    $selectedColor = $_POST['color'];
    for ($i = 0; $i < array_key_last($arrColors) + 1; $i++) {
        switch ($_POST['color']) {
            case $arrColors[$i][0]:
                $selectedColor = $i + 1;
                break;
        }
    }
    $selectedCountry = $_POST['country'];
    for ($i = 0; $i < array_key_last($arrCountries) + 1; $i++) {
        switch ($_POST['country']) {
            case $arrCountries[$i][0]:
                $selectedCountry = $i + 1;
                break;
        }
    }


    $wpdb->update('wp_users',
        array(
            "user_nicename" => $_POST['name'],
            "user_phone" => $_POST['phone'],
            "color_id" => $selectedColor,
            "country_id" => $selectedCountry,
            "start_date" => $_POST['first_calendar'],
            "end_date" => $_POST['second_calendar']
        ), array(
            "user_nicename" => $who
        ));
}
