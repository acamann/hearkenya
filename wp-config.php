<?php

// ** MySQL settings ** 
//
define('DB_NAME', 'palmawordpress');    // The name of the database
define('DB_USER', 'palmawordpress');     // Your MySQL username
define('DB_PASSWORD', 'Escape2007'); // ...and password
define('DB_HOST', 'mysql.hearkenya.com');    // 99% chance you won't need to change this value
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// Change SECRET_KEY to a unique phrase.  You won't have to remember it later,
// so make it long and complicated.  You can visit https://www.grc.com/passwords.htm// to get a phrase generated for you, or just make something up.
define('SECRET_KEY', 'This is my secret key: I love Matthew Palma A LOT.'); // Change this to a unique phrase.

// You can have multiple installations in one database if you give each a unique prefix
$table_prefix  = 'wp_';   // Only numbers, letters, and underscores please!

// Change this to localize WordPress.  A corresponding MO file for the
// chosen language must be installed to wp-content/languages.
// For example, install de.mo to wp-content/languages and set WPLANG to 'de'
// to enable German language support.
define ('WPLANG', '');

/* That's all, stop editing! Happy blogging. */
define('ABSPATH', dirname(__FILE__).'/');
require_once(ABSPATH.'wp-settings.php');?>