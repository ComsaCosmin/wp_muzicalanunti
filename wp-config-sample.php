<?php
/**
 * Setările de bază pentru WordPress.
 *
 * Acest fișier conține următoarele detalii : setările MySQL, prefixul pentru tabele,
 * cheile secrete și ABSPATH. Informații suplimentare pot fi găsite
 * în pagina {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} din Codex. Setările MySQL pot fi obținute de la furnizorul serviciul de găzduire.
 *
 * Acest fișier este folosit la crearea wp-config.php din timpul procesului de instalare.
 * Folosirea interfeței web nu e obligatorie, acest fișier poate fi copiat
 * sub numele de "wp-config.php", iar apoi populate toate detaliile.
 *
 * @package WordPress
 */

// ** Setările MySQL: aceste informații pot fi obținute de la serviciile de găzduire ** //
/** Numele bazei de date pentru WordPress */
define('DB_NAME', 'numele_bazei_de_date_aici');

/** Numele de utilizator MySQL */
define('DB_USER', 'nume_de_utilizator_aici');

/** Parola utilizatorului MySQL */
define('DB_PASSWORD', 'parola_aici');

/** Adresa serverului MySQL */
define('DB_HOST', 'localhost');

/** Setul de caractere pentru tabelele din baza de date. */
define('DB_CHARSET', 'utf8');

/** Schema pentru unificare. Nu faceți modificări dacă nu sunteți siguri. */
define('DB_COLLATE', '');

/**#@+
 * Cheile unice pentru autentificare
 *
 * Modificați conținutul fiecărei chei pentru o frază unică.
 * Acestea pot fi generate folosind {@link http://api.wordpress.org/secret-key/1.1/salt/ serviciul pentru chei de pe WordPress.org}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pune fraza unică aici');
define('SECURE_AUTH_KEY',  'pune fraza unică aici');
define('LOGGED_IN_KEY',    'pune fraza unică aici');
define('NONCE_KEY',        'pune fraza unică aici');
define('AUTH_SALT',        'pune fraza unică aici');
define('SECURE_AUTH_SALT', 'pune fraza unică aici');
define('LOGGED_IN_SALT',   'pune fraza unică aici');
define('NONCE_SALT',       'pune fraza unică aici');

/**#@-*/

/**
 * Prefixul tabelelor din MySQL
 *
 * Acest lucru permite instalarea mai multor instanțe WordPress folosind aceeași bază de date
 * dacă prefixul este diferit pentru fiecare instanță.
 * Sunt permise doar cifre, litere și caracterul liniuță de subliniere.
 */
$table_prefix  = 'wp_';

/**
 * Pentru dezvoltatori: WordPress în mod de depanare.
 *
 * Setează cu true pentru a permite afișarea notificărilor în timpul dezvoltării.
 * Este recomadată folosirea modului WP_DEBUG în timpul dezvoltării modulelor și
 * a șabloanelor/temelor în mediile personale de dezvoltare.
 */
define('WP_DEBUG', false);

/* Asta e tot, am terminat cu editarea. Spor! */

/** Calea absolută spre directorul WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Setează variabilele WordPress și fișierele incluse. */
require_once(ABSPATH . 'wp-settings.php');