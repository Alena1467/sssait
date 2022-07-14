<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'db-wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd5^f8@@`V`AYcBUk2`,):9gcD~g3Yh}Jh _|FDU45JO|$CwTNSoDL^W&5ja{08G>' );
define( 'SECURE_AUTH_KEY',  'E>fVmeog.aKy~gk_0 eIi<VD]^C56AHN=2ty`wZWb,f1/(`+B.h TRwKML53UIi6' );
define( 'LOGGED_IN_KEY',    'F _FOi~987Y<WQ>k7<k>q kqFY}iQOBo|[HT6l1D-3<zq%8gqgD{kO;8[9pq8rU&' );
define( 'NONCE_KEY',        '$p%{sG`xT~*x,>N4R;2NfWhOsvO:v*eG{N|>pI2w?E1O*Fkrxxr;IPwtGl{o+)OO' );
define( 'AUTH_SALT',        'ODJ)&d)gJy1*My.jmc7X~Kp[`z[%8Rc+)q-=l;AvsyjuMEQG>6mY)4+t%ai61R.&' );
define( 'SECURE_AUTH_SALT', 'tJ6uiAdRle/$v_argIoMS>JxBzy?g#:%_UQBR4POTpyLQ*.34*L%=mJsgwb=4!))' );
define( 'LOGGED_IN_SALT',   'VOc<pKWjoHSU9e?M z-rs2JfmPbxtC_v23IfqJ5A9n&fT@M+CM@VN/XCc&WoBqpk' );
define( 'NONCE_SALT',       '8,*M4v,J8Qu&/C+myHU .q1(~S2y;*nOfNMkmK+ 5:w/dN2IG~)Cq>wnQ0XR3y]L' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
