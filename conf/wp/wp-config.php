<?php
define('DB_NAME', 'db');
define('DB_USER', 'root');
define('DB_PASSWORD', 'seg123');
define('DB_HOST', 'db');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('AUTH_KEY', 'pon aquí tu frase aleatoria'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'pon aquí tu frase aleatoria'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'pon aquí tu frase aleatoria'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'pon aquí tu frase aleatoria'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'pon aquí tu frase aleatoria'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'pon aquí tu frase aleatoria'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'pon aquí tu frase aleatoria'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'pon aquí tu frase aleatoria'); // Cambia esto por tu frase aleatoria.
define('FORCE_SSL_ADMIN', true);
define('WP_CACHE_KEY_SALT', 'chechenia.pandoru');
define('WP_REDIS_HOST', 'cache_1');
define('WP_SITEURL','http://' . $_SERVER['HTTP_HOST'] . '/');
define('WP_HOME','http://' . $_SERVER['HTTP_HOST'] . '/');

$table_prefix  = 'wpt';
/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

//Begin Really Simple SSL Load balancing fix
$server_opts = array("HTTP_CLOUDFRONT_FORWARDED_PROTO" => "https", "HTTP_CF_VISITOR"=>"https", "HTTP_X_FORWARDED_PROTO"=>"https", "HTTP_X_FORWARDED_SSL"=>"on", "HTTP_X_PROTO"=>"SSL", "HTTP_X_FORWARDED_SSL"=>"1");
foreach( $server_opts as $option => $value ) {
 if ((isset($_ENV["HTTPS"]) && ( "on" == $_ENV["HTTPS"] )) || (isset( $_SERVER[ $option ] ) && ( strpos( $_SERVER[ $option ], $value ) !== false )) ) {
   $_SERVER[ "HTTPS" ] = "on";
     break;
      }
      }
//      //END Really Simple SSL
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
