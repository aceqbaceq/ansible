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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'wordpress' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'bananas' );

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
define( 'AUTH_KEY',         'WZWSoW+v)3Q;wDHW:<RkW*,Z<x+L(lIctsQh>7t-LLopH*uXYeN9>:t?rm5Jt_MW' );
define( 'SECURE_AUTH_KEY',  'R^7Wj?380Mpgn*a!xqU?UPI{VDtSsr#-hd[W-^rdN/S(~RJat>!Uqw9v3_F.mfn,' );
define( 'LOGGED_IN_KEY',    ' z--89K}.RRi7!2lC7l~hbML1Pdkf]3.w!_klJ,$H9a1FN(QoCUUUq+L(Yf$kA/~' );
define( 'NONCE_KEY',        '+[!tKq3Bfk;h6ewbUb>|Ym |9AIQhffLung?ub9DZ=_Vlwc7sJ.=*XQ7*tHAfv8$' );
define( 'AUTH_SALT',        'rap_nk$)99kHdBf)^_^)^}Wb;XcYV0/jH$oKy8Fia(2e`@p#,on?QDKvtS[C8W0X' );
define( 'SECURE_AUTH_SALT', '#9.=j*>E;kzsa$s|pyjtk3[;~Q#D[{QqB3D!?ODD,g=S|R1Y;)f4N5OHs(<aKs)d' );
define( 'LOGGED_IN_SALT',   'mo})b+UjL/Gp2flcEXo91]X&npp5yojp-pfN3crBp@z/w0?|la4_et*_B[d4QhUp' );
define( 'NONCE_SALT',       'Xu8UKZ8[|:`dEL5LM<P%0_1NSM#NMR3t5vt&<R%0q-WEZ76+6)8!&P`dJ>NH~`)X' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

