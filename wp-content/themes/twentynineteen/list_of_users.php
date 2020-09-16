<?php
/**
 * Template Name: list_of_users
 */

function getTable($query)
{
    global $wpdb;
    $result = $wpdb->get_results("$query", ARRAY_A);
    if (empty($result)) {
        ?>
        <b><br>Збігів не знайдено</b>
    <?php } else {
        foreach ($result as $key => $value) {
            ?>
            <table bordercolor="blue"">
            <?php
            foreach ($value as $k => $v) {
                ?>
                <tr>
                <td class="col1"> <?php echo "$k => $v<br>"; ?></td></tr><?php
            }
        }
        ?>
        </table>
        <?php
    }
}

get_header();
if (is_user_logged_in()) {

    $currentUser = wp_get_current_user();
    if ($currentUser->user_login == 'root') {
        echo '<h5 align="center"> You\'re admin </h5><h3 align="center">Дані про користувачів:</h3>';

        $query = "SELECT wp_users.ID, wp_users.user_login, user_phone, wp_users.user_nicename, wp_users.user_email, color, country, start_date, end_date from wp_users 
                join select_color on (wp_users.color_id = select_color.id_color) 
                join select_country on (wp_users.country_id = select_country.id_country)";
        getTable($query, $wpdb);

    } else {
        echo '<h5 align="center"> You\'re not admin </h5><h3 align="center">Дані про користувача:</h3>';

        $query1 = "SELECT wp_users.ID, wp_users.user_login, user_phone, wp_users.user_nicename, wp_users.user_email, color, country, start_date, end_date from wp_users 
               join select_color on (wp_users.color_id = select_color.id_color) 
               join select_country on (wp_users.country_id = select_country.id_country)
               WHERE wp_users.ID = \"$currentUser->ID\"";
        getTable($query1, $wpdb);
    }
    ?>
    <br><a href="http://wordpress/update-page/">Перехід на сторінку редагування</a>
    <style>
        table {
            width: 50%;
            color: #0A246A;
            margin: auto;
        }
        .col1 {
            width: 100px;
        }
    </style>
    <?php
} else {
    echo "<a id='no_login' href='http://wordpress/'>Пройдіть авторизацію</a>";
}
get_footer();