<?php
/**

 * No need to reference credentials.php as it is referenced by config-mini.php
 * @package listView
 * @author Cheri Allen <cherimarie@gmail.com>
 * @version 1.0 2012/11/13
 * @link http://dinosaurparty.info
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see config-mini.php
 * @see demo_view.php
 * @todo none
 */

include 'include/config-mini.php';
$title = 'Wizard Name Generator'; //Optional unique variable becomes title tag

#--- end config area

include 'touching_design/touching_top.php'; #header must appear before any HTML is printed by PHP
echo '<h3>Wizard Name Generator1</h3>';

$first = array(
    "Moonbeam",
    "Andromeda",
    "Rainbow",
    "Stardust",
    "Xavier",
    "Chrunchmeat",
    "Stone",
    "Skye",
    "Indica",
    "Ember",
    "Dakota",
    "Thunderfist",
    "Willow"
);

$middle = array(
    "Smith",
    
);

$last = array(
    "Smith",
	"Cumberbatch",
	"Trace",
	"Revolution",
	"Soma",
	"Spice",
	"Kief",
	"Gamble",
	"Sapphire",
	"Clegg",
	"Bernard",
	"Dylan",
	"Whimper",
	"Blaze",
	"Incognito",
	"Doom",
	"Deville",
	"Natasha",
	"Polar",
	"Sativa",
	"Paranormal",
	"Lennon",
	"Song",
	"Prudence",
	"Crimson",
	"Revelation",
	"Harmony",
    
);

$power = array(

	"X-Ray Vision",
	"Telepathy",
	"Power Augmentation",
	"Immortality",
	"Flight",
	"Healing",
	"Elasticity",
	"Animal Morphing",
	"Sublimation",
	"Time Travel",
	"Teleportation",
	"Superhuman Speed",
	"Weather Manipulation",
	"Fire and Heat Manipulation",
	"Cold and Ice Manipulation",
	
);

echo $male[array_rand($male)] . ' ' . $middle[array_rand($middle)] . ' ' . $last[array_rand($last)];
echo "Your super wizard power is: " $power[array_rand($power)]

include 'touching_design/touching_bottom.php'; 
?>
