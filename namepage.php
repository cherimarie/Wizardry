<?php

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

if (isset($_POST['first-name'])) //isset determines if var has valid contents, even empty string
{//if var is set, show what it contains
	$fname = $_POST['first-name'];
//	$power = $_POST['element'];
	//their stuff!
 	echo "<br /><br />Your wizard name is: " . $first[array_rand($first)] . ' ' . $middle[array_rand($middle)] . ' ' . $last[array_rand($last)];
	echo "<br /> <br />Your super wizard power is: " . $power[array_rand($power)];
	echo '<br /> <br /><img src="images/natalie_wizard3.jpg" title="wizard" alt="you look like a wizard" />';
      //put link on page to reset form
      print '<br /><br /><a href="http://zephir.seattlecentral.edu/~callen23/wizardry/namepage.php">Reset Name Generator</a><br /><br />';
}else{ //show form
?>

	 <form action="http://zephir.seattlecentral.edu/~callen23/wizardry/namepage.php" method="post" name="myForm" onsubmit="return checkForm(this);">
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
<?
}//last curly brace of if/else

							
include 'touching_design/touching_bottom.php'; 					
	?>
