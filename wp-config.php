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
define('DB_NAME', 'my_moneygun');

/** Имя пользователя MySQL */
define('DB_USER', 'moneygun');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'bikvemovtu98');

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
define('AUTH_KEY',         '{sR[pjuU*/5IC+5ItDx&UZKx{/HNy-Ayg@}rNlzYgkb%VpbAp*FELHZ..?s0,;@x');
define('SECURE_AUTH_KEY',  'GjjGw>/KH,Absyi0#D1/Ta0/t?ZZ[!E0q_zdf=YcyVVy_EA PEh-72QX7fZo/?pv');
define('LOGGED_IN_KEY',    'WrEbbewm}^~UCK:Cy12??v<$GjW(~2q&T_:48+* *8MHx)O.j*Cb@a)>O&FPvinf');
define('NONCE_KEY',        '?~]4tpN4NY}>*njd~fr+!j~6Uy?--Iq;C-5 &n0U4m]|VUVym) (P76WdxkMh)78');
define('AUTH_SALT',        '@]RP9+DOGa!JHK(J{|QhoVGZY:fPl8e5,lK?nL4Ocg*@Sb}SItU)`C-D4eflybI_');
define('SECURE_AUTH_SALT', '4$l]i(ZLI;ic>UwHN@zZ]@:[)>)uND,`Ra.>JyT5DSpKCja[3fZK4cl{@>S_[<Ff');
define('LOGGED_IN_SALT',   ':n#KR*un;](g5l3!ZOizXMjk9J5K#}dFzq).Y(vfA^:U%l^7qOPf1sP)#Q~Go_Zj');
define('NONCE_SALT',       ')m{4V7GE5A,ed^iy.[WU4^lM^zQx_@r_4m JJ~Pc9xAWLb@3fDN,`N:PhMZUM<[X');

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
