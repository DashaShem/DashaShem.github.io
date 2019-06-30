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

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress.abs' );

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
define( 'AUTH_KEY',         'KCSF#,20uv1FRTGbwgg~1j]V6sF9_]0fL,rIo#<5{k:a+put^~<`q8FnUDK>pOW1' );
define( 'SECURE_AUTH_KEY',  '{O<r}KWFtCV(P4[-<Q:$}qHlZs:LhyzTqc=fNQO=%Fq64luCGOq)TD9I?~ucbl&e' );
define( 'LOGGED_IN_KEY',    'g* m?2nYC`}*:~!u[7=k|5,E0}= K AZ@wNan`Urj0^zlsi{DMQ?W*`jV~Ib}Woj' );
define( 'NONCE_KEY',        'rH9VZ}P}?co~_C;7#XaxmT==8_!mD#{u1.2Yp,:M;Z)HB cN.})Cfosmlp![j6Rc' );
define( 'AUTH_SALT',        'I2JJmLSBqdTb%SIynZ>Ssw;iM[_=ULt277TkoTP(heRIlQ7GScf>tt@A_{a;s0/-' );
define( 'SECURE_AUTH_SALT', 'Ir%Uv_%iGcBCZ0x1vRv_xtew[BzImi?K}bO4OREvhvwvT>vz+<kfuP*PN}>d$-Ms' );
define( 'LOGGED_IN_SALT',   '9+DtzNvY}co+Gv!(;kchlH.O^!9rME$6` G9duKfU%UI03elYfPQrg:#(Zma47.$' );
define( 'NONCE_SALT',       'omJH|8#$An5mETpxZTxI^?cWTL_h$>j+&wDH3qvsX4p_j<)sYV*x6nCY5wDcoXIU' );

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
