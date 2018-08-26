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
define('DB_NAME', 'baraholka');

/** Имя пользователя MySQL */
define('DB_USER', 'mysql');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'mysql');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2wCA-xZvBFdRnkk.UBlQCWBdQN7X_FV@_]F%En_FOP.`eAwP7RKZ!m]Fd&:;-g)%');
define('SECURE_AUTH_KEY',  'i2WV/`ro %R<%3ZYC+BU.R>rOV-7ZF%JsPUl#~K*x&X]26^%ymECvdqOm0A{v<L5');
define('LOGGED_IN_KEY',    '&|VP)S?{duesfMbF+CIJpxmSAB/=^<RTqkSPu0v0<!$yu5 (ecN9_o]@o/WU&A_D');
define('NONCE_KEY',        '^#hZ<NU<4>uNl/?Z3&4cAIZy!%0w/34vA1(}d|(xM(O7tHCx[vs,Lgx@_|sn^-Bc');
define('AUTH_SALT',        '|P&@hS`<(CntVz}XU1dT-=D_8Ev 9WSB+- `l_O7CaX$P<;N5CNRJDK Iv?_K>Z=');
define('SECURE_AUTH_SALT', 'XI^!+R#%#wQ>ic:)KL_0N_^jLSy (1`YcFZru24d(/}v A`_i2=sCEn^m9z/a88l');
define('LOGGED_IN_SALT',   'RK<ND+!GasyUr%!fq|JZ`5o}fNW%6|?jOAd2KZ|OP%0s +)SgvlXu[GSD>3?/$^^');
define('NONCE_SALT',       'T2%j1>ZLdlD-vHg{^~t:}pU{+aM:YT_k7<0IksE`>Xm0:?c>z_|Bpr~)_?l;iPnL');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
