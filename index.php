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
#$sql = "Select * from produce_List"; 
$first = "Select first_name from Wizard_data where fisrt_name like 'A%'"

#--- end config area

include 'touching_design/touching_top.php'; #header must appear before any HTML is printed by PHP
echo '<h3>Wizard Name Generator</h3>';
$myConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($myConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($myConn)));
/*if (mysqli_num_rows($result) > 0)//at least one record!
{show results
	while ($row = mysqli_fetch_assoc($result))
    {
	  echo "<p>";
	   echo "ProduceID: <b>" . $row['ProduceID'] . "</b><br />";
	   echo "Produce Name: <b>" . $row['ProduceName'] . "</b><br />";
	   echo "Description: <b>" . $row['Description'] . "</b><br />";
	   echo '<a href ="produce_view.php?id=' . $row['ProduceID'] . '">' . $row['ProduceName'] . '</a><br />';
	   echo "</p>";
   }
}else{//no records
	print '<div align="center">No produce? I\'d better get back to the field!</div>';*/
echo "<p>$first</p>"; 
	echo "<p>is this thing on?</p>";
}

@mysqli_free_result($result); # releases web server resources

include 'touching_design/touching_bottom.php'; 
?>
