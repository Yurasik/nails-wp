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
define( 'DB_NAME', 'nails' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'yurasik' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '86686613' );

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
define( 'AUTH_KEY',         'atU--~3bL%{goZNFh`GLErnq/V<f~@~Ip:C=rVV{2=vdY[azZ:fIc YYKZZ~gH.,' );
define( 'SECURE_AUTH_KEY',  'R0H .fgWXGR/8=EGcTQpJ!eOqA.qamw;0M95J|bN>]4e3Z~Ou$QS`.suW:{c^F7#' );
define( 'LOGGED_IN_KEY',    '3Jd(`?cPdOw9,a)Cg.,fk~L4JnA.Ids%[lBac(*H;Gk5[]`({4?_=-GP#Sa}!>6R' );
define( 'NONCE_KEY',        'S|.v`,ew)PftI:gKHwwy(lzw0N]`hQ(tSF2O]?!(7yA-];YM}rt9Qfrc>!{@`+kX' );
define( 'AUTH_SALT',        'C#-)s;q~G?VW),6Txxz9e-FPL24$;n QAiLgmHCqR*w) =Q_}>uu}!ZqX!~<xy3}' );
define( 'SECURE_AUTH_SALT', 'tvbBU5wBY&Fkfv8:C<Yzg3!9c=Lh&;X H*mw4U18U9PaJL]=EwlPj-N 3Hs~cjn ' );
define( 'LOGGED_IN_SALT',   'tjrg,q^f_sdb(;>gBdRpA[ d5Ke$-HL)>&}S$R0TwNMgRkx1=N$ Zc*owm>KD%Fz' );
define( 'NONCE_SALT',       '3uD56-A%z5`6>H|]Nlxd7bM@REre<_7hkh|qx5 ]|8K:t+u=mkG;{&xiR.bb 6Qf' );

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

define( 'FS_METHOD', 'direct' );