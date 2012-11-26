<?php
/**
 * credentials.php stores WordPress style constants of 
 * database credentials. 
 *
 * credentials.php is referenced by config-mini.php, which stores 
 * configuration data.
 *
 * Place both config-mini.php and credentials.php in a sub folder named include 
 * and reference config-mini.php at the top of every PHP page thus:
 *
 *<code>
 *include 'include/config-mini.php';
 *</code>
 *
 * No need to reference credentials.php as it is referenced by config-mini.php
 * @package nmMini
 * @author cheri allen
 * @version 1.0 2012/07/29 
 * @link http://www.dinosaurparty.info
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see config-mini.php
 * @todo none
 */

/** The name of the database */
define('DB_NAME', 'wizardry');

/** MySQL database username */
define('DB_USER', 'wizard');

/** MySQL database password */
define('DB_PASSWORD', 'staff');

/** MySQL hostname */
define('DB_HOST', 'dinosaurpartyinfo.dotstermysql.com');
?>