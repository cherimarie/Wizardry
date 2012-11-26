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
	"Andromeda",
	"Blunderfoot",
	"Chrunchmeat",
	"Dakota",
	"Ember",
	"Frank",
	"Gorethrasher",
	"Helldancer",
	"Indica",
	"Julian",
	"Kitty",
	"Lars",
    "Moonbeam",
    "Nigel",
    "Ogrefoot",
    "Putridious",
    "Quarrrr",
    "Rainbow",
    "Stardust",
    "Thunderfist",
    "Ulrich",
    "Vittler",
    "Willow",
    "Xavier",
    "Yoda",
    "Zebranipples"
    );

$middle = array(
    "Riverstone",
    "Rain",
    "Starbright",
    "Jade",
    "Lionfoot",
    "Sunshine",
    "Hawkcry",
    "Elderflower",
    "Breezes",
    "Dove",
    "Liberty",
    "Smash",
    "Danger",
    "Dark",
    "Plumberry",
    "Sugartwist",

);



echo "Your wizard name is: " . $first[array_rand($first)] . ' ' . $middle[array_rand($middle)]; # . ' ' . $last[array_rand($last)]
echo "<br /> <br />Your super wizard power is: "; #. $power[array_rand($power)]
?>

<form>
			<fieldset>						
				<p>
					<label>First Name: <input type="text" name="first-name" required/></label>
				</p>
				<p>
					<p>Which element do you most identify with?<br />
					<br />
					<label><input type="radio" name="element" value="earth">Earth<br /></label>
					<label><input type="radio" name="element" value="water">Water<br /></label>
					<label><input type="radio" name="element" value="air">Air<br /></label>
					<label><input type="radio" name="element" value="fire">Fire<br /></label>
					</p>
				</p>
			
			<br />
			<input type="submit" value="Get my power!" >
			</fieldset>
</form>		

<?php
include 'touching_design/touching_bottom.php'; 
?>
