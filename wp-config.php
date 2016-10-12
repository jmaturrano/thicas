<?php
$abspath	=	str_replace(array('\thicas', '/thicas'),'/wp-config',ABSPATH);
include($abspath.'/server.php');
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', $server['database']['thicas']);

/** Tu nombre de usuario de MySQL */
define('DB_USER', $server['main']['user']);

/** Tu contraseña de MySQL */
define('DB_PASSWORD', $server['main']['pass']);

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', $server['main']['host']);

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');



/** Lenguaje de wordpress **/
define('WPLANG', 'es_PE');
/** Revisiones de POSTS **/
define('WP_POST_REVISIONS', 5);
/** Auto guardado de POSTS **/
define('WP_POST_REVISIONS', false);
/** Guardar las consultas en una constante **/
define('SAVEQUERIES', true );
/** Desactivar las actualizaciones automáticas **/
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_AUTO_UPDATE_CORE', false);
/** Desactivar el editor de temas y plugins **/
define('DISALLOW_FILE_EDIT', true);
/** Desactivar la instalación de temas y plugins **/
//define('DISALLOW_FILE_MODS', true);
/** No usar las versiones minificadas **/
define('CONCATENATE_SCRIPTS', false);



/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'R4dsxu)Q+h)D(Cl83`a[|j& !KUL-K&SAn9vOG#MM%#iHkQM%MR#Uy(^7.A)32bC');
define('SECURE_AUTH_KEY', 's:wP!Hw*wCSB.*CpRRda.K6Majk PY]I5BVk?~H/lzjFKMMDD#0,,D-x#F>8CYj)');
define('LOGGED_IN_KEY', 'i%,KhxtOJG;&d(carI;WEJ}4E(SL]4eSB6cuagypu@eEzlO5(r(B{=1xo@d^V^Ra');
define('NONCE_KEY', 'B|?~tlde<!X]Ek4eTa/=jfemm?Lhe;bA<>N^l^M/<;VWBBOzQs-CAKyYOi+,&ob/');
define('AUTH_SALT', '1roaJCNQm3-H~LM9`nBJ!n5T795<5@LoQRC9 )<u+|Yu=j{XjZ,NA$TdMh6^Bvth');
define('SECURE_AUTH_SALT', 'MSta)y1J*J}ni~U_+0YIS#UdG%|ah&P0dLVM>C/<_*iV;j~0]TCMFEmC5j,Vu{c`');
define('LOGGED_IN_SALT', 'Ef/MqPfU;f<Qu;)-^Ag/J^$Uz6JPYY4w/#G`&~M.an{48lxclk^+KTc& 7pk,%X!');
define('NONCE_SALT', '7sCL.5Kxa0mT&%OFDRqWWl9Amp%.d9C/MFaa=>#^wN#lQqw!67G>0^R6]|*K{u&=');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

