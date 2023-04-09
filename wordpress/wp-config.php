<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för databas
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Databasinställningar - åtkomstuppgifter för databasen får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'wp_Inl1_tema' );

/** Databasens användarnamn */
define( 'DB_USER', 'Sara' );

/** Databasens lösenord */
define( 'DB_PASSWORD', '112233' );

/** Databasserver */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';8@zGv/)Ht5WZEP , Q5(0vIW.BFp<Q0j^,o,$ IH*I<~)MkB-o:nB&1:eiN3|6Y' );
define( 'SECURE_AUTH_KEY',  '*Lwywh1w*?9jH;-tXl8]JuC5bO|sB+9E^1%iKAz=XnZ@wh{/t?R>q#6q3PeRs.%2' );
define( 'LOGGED_IN_KEY',    '9yB);nh HU(t=ny>IEM(Gykh U2@eI?L2GEl_1r@xn`tpzYchB36;9.J9jGA<5Up' );
define( 'NONCE_KEY',        '|MX hl78sLM@d2HU_J(ce%tws))f>W8,6LLOB4}:YOFjX5J.PN~4p*#{ZnBY^,?|' );
define( 'AUTH_SALT',        '7[V06sm)XT0BZ#fgISOJD3<GK[R,= cr%gC$9rzMaL~mSMQ<?nJ|fLH%qh&W;7Z-' );
define( 'SECURE_AUTH_SALT', '?90a{#-Vh+U]CH8Qu`:iwz309=NY%I$;a-BT)dfNy}XDvW.OQ t%E?of>$$K9mi3' );
define( 'LOGGED_IN_SALT',   'k3}3M,Fxdl27gXi.!,tA%WK&.eQ*JaO{MWEOkfWN|bDp~eiVilpH GwF}_pkFIU_' );
define( 'NONCE_SALT',       'S5PiW]%pB!rAA0OW91o=H+LK``VNcn`dY|&qV]#^tdyu|W_Vw6B1?a@>F?_Ni3?1' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */ 
define('WP_DEBUG', false);
/* Lägg in eventuella anpassade värden mellan denna rad och raden med "sluta redigera här". */




/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');