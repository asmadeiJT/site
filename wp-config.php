<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         't>ZeA~L;DtU{ax4S-l8v0#kt%aLOcI[+vx+AJv?x,l3B/<*5Aoxrxne^] hX#bOI');
define('SECURE_AUTH_KEY',  '9?lDR.S&Vz!_8$D++_|fUj!;n8XcI]=O|P!|):bcop_x)*Hc=Fc2-QT$6(+Y4y-1');
define('LOGGED_IN_KEY',    'Fe?$4Z=I%PsTcCiU7P^HOmTS/|tR^-2<XL3b56|M8=xq@^@=!kzWsAT(0y~4dw1>');
define('NONCE_KEY',        '~D<w-*Cr.eGiZ^,;H+pnvZ8Fj|7|5UKpEB/JX=|,P$kgLqUGY(t8=j=@njmdu_l{');
define('AUTH_SALT',        'YDnQZbU)e)?ck%?8HJxgFrhM<OPwwJ5N%4<x|pUyK,/49;QyZV.7i/n/G0k6PD$e');
define('SECURE_AUTH_SALT', '<5#U*I;H*$fXy_F+_NgQAEBKJX8Nr;d&_xe5m*9Z3M=BIrRO{Y)e|hK`e j!P|n(');
define('LOGGED_IN_SALT',   'CA4C|_Z!Y%f*wX|_`(o%_B(fI19Z+ /#Z^YPOLRV_rHg?bok|Hp@DiE{PEVj:)!z');
define('NONCE_SALT',       'in:xW|~~1+G}R!DBq_INZD3g[RB4,(E`}>+EJdQ`pEE %cPHEchu&sn3aA5)/+Ds');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
