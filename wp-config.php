<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// Имя пользователя для SMTP авторизации
define('SMTP_USER', 'nik.yavetskiy9@gmail.com');

// Пароль пользователя для SMTP авторизации
define('SMTP_PASS', 'nik20010601');

// Хост почтового сервера
define('SMTP_HOST', '@gmail.com.com');

// Обратный Email
define('SMTP_FROM', 'nik.yavetskiy9@gmail.com');

// Имя для обратного мыла
define('SMTP_NAME', 'Коля Явецкий');

// Номер порта (25, 465, 587)
define('SMTP_PORT', '587');

// Тип шифиования (ssl или tls)
define('SMTP_SECURE', 'tls');

// Включение/отключение шифрования
define('SMTP_AUTH', true);

// Режим отладки (0, 1, 2)
define('SMTP_DEBUG', 0);
// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_lessons' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oO}BSRF@gZ4H=fdCwkK,x?D$Q,z2cj|J^lj#cnd tX>pvSSjUKU}z>B#X}8^d(&=' );
define( 'SECURE_AUTH_KEY',  'l:q&s/~0bn|DVMMl:b6^=i[8n>3&E:Z~x!8U8odUy8Up. hJ> _iT1`aFR~^?B36' );
define( 'LOGGED_IN_KEY',    '`/0?~9:2YCEj9oaQFJ@. nqVjc2vDex%+QV.7QDKC^~K0sw:g1NK#12!6pR:z`c0' );
define( 'NONCE_KEY',        'jv8F*]2I&jDvA^LAv8f[yR{cb+y-H&r~9P*:?r/l#iFM`;v7.zq$,a,GO^4QAA<T' );
define( 'AUTH_SALT',        'ON3GQZw0gg]7egI;M}G4}}kW=#Ir_uBk_aPW`<66j4&dfX#zg;fT&?)VZz@KWY{N' );
define( 'SECURE_AUTH_SALT', 'D/F9e2[rh8?~Z`N6uT-q|424*t|y{rQZr!7h$aeWgEi$n!%@(l$+0*$HHo<w,(@E' );
define( 'LOGGED_IN_SALT',   '!| N;R^mP|qP@rglK46P-]/)f+a.kam$D(yU~)a1kMkXE0wmbz7JFZ$M%te~cTcJ' );
define( 'NONCE_SALT',       'zV>>d]8r7KS]*>-90ptwn#]hu~EG/l7:{`dM5b ,*R;*hO6G(ve2.Gepjqo@(P_^' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
