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
define('DB_NAME', 'muzicalanunti_wp');

/** Numele de utilizator MySQL */
define('DB_USER', 'root');

/** Parola utilizatorului MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'L2jY5Uys&9Omr*++2c,$E)+2%%aGKg.;}x XD-xYlQ&-OPt6|l0+07O}{ifY;5m|');
define('SECURE_AUTH_KEY',  'AZHUeFhF @yKX&gB7nW%!{t6{yJ<8yQ|zg8:53vks2TqFA5Q9:-TaE8~u-7gn#B~');
define('LOGGED_IN_KEY',    '0Rl1|P2j@)d`~+`9}D~sS}H$oS?.w514n>(7r[S%K}a)CRo9-K=a(^U-$Mc-!/wz');
define('NONCE_KEY',        'E@U1T~* #aMrr[YuHS,y6.|My(z}gW*,ueNWB}!DA9t`k8Y/XgzhiHEwP5)?^5ni');
define('AUTH_SALT',        '3i,iN?mI[|11wq_iv.BD^g><Srv r/kruGqC6rd*,%MbiIx;#~||o,|Cj-%7e+]c');
define('SECURE_AUTH_SALT', 'zeG/=s/*8J]w].PkFa+&zm|Rp^(boh^HtUmn@dF!KG/&L)A?&-n{=;W@({udVXOw');
define('LOGGED_IN_SALT',   'LE.L[,7tr*}P9 `f3*;@.#/Ky LKUL>?&[Q/qGbi1]@y(7&peNN`|LzA_)z7ZB* ');
define('NONCE_SALT',       'qH)hJeoRP?4<=wwSj Ct]%xL_U+nyctm,+m84B$<~Hs?dR-URa=O0#,uuK1=Fi^G');

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