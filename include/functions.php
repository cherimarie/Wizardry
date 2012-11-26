<?
/**
 * returns a random item from an array sent to it.
 *
 * Uses count of array to determine highest legal random number.
 *
 * Used to show random HTML segments in sidebar, etc.
 *
 * <code>
 * $arr[] = '<img src="mypic1.jpg" />';
 * $arr[] = '<img src="mypic2.jpg" />';
 * $arr[] = '<img src="mypic3.jpg" />';  
 * echo randomize($arr); #will show one of three random images
 * </code>
 *
 * @param array array of HTML strings to display randomly
 * @return string HTML at random index of array
 * @see rotate() 
 * @todo none
 */
function randomize ($arr)
{//randomize function is called in the right sidebar - an example of random (on page reload)
	if(is_array($arr))
	{//Generate random item from array and return it
		return $arr[mt_rand(0, count($arr) - 1)];
	}else{
		return $arr;
	}
}#end randomize()

/**
 * returns a daily item from an array sent to it.
 *
 * Uses count of array to determine highest legal rotated item.
 *
 * Uses day of month and modulus to rotate through daily items in sidebar, etc.
 *
 * <code>
 * $arr[] = '<img src="mypic1.jpg" />';
 * $arr[] = '<img src="mypic2.jpg" />';
 * $arr[] = '<img src="mypic3.jpg" />';  
 * echo rotate($arr); #will return a different image each day for three days
 * </code>
 * 
 * @param array array of HTML strings to display on a daily rotation
 * @return string HTML at specific index of array based on day of month
 * @see rotate() 
 * @todo none
 */
function rotate ($arr)
{//rotate function is called in the right sidebar - an example of rotation (on day of month)
	if(is_array($arr))
	{//Generate item in array using date and modulus of count of the array
		return $arr[((int)date("j")) % count($arr)];
	}else{
		return $arr;
	}
}#end rotate

/**
 * Accepts the associative array of links as a parameter 
 * and outputs a horizontal nav as a string.
 *
 * Uses the current page in a different manner from the 
 * other pages that are linked.  
 * 
 * @param array $myURL associative array of URL/title
 * @return string nav to be printed
 * @todo none
 */

function aquatic_nav_1($aURL)
{# function 
	$myWidth = intval(100/(count($aURL)));  # determine percent width of individual <td>'s
	$myReturn = '';
	foreach($aURL as $url => $title)
	{# use the key/value pair of the URL and the title/text in the links created
		if($url == THIS_PAGE)
		{# use PageID on the current page
		    $myReturn .= '<td class="mainNav1" bgcolor="black" width="' . $myWidth  . '%"><b><font color="yellow">' . $title . '</font></b></td>';	
		}else{#Not current page, so create a link 
			$myReturn .= '<td class="mainNav1" width="' . $myWidth  . '%"><a href="' . $url . '">' . $title . '</a></td>';	
		}
	}
	return $myReturn;
}

/**
 * Accepts the associative array of links as a parameter 
 * and outputs a horizontal nav as a string.
 *
 * Uses the current page in a different manner from the 
 * other pages that are linked.  
 * 
 * @param array $myURL associative array of URL/title
 * @return string nav to be printed
 * @todo none
 */

function aquatic_nav_2($aURL)
{
	$myReturn = '';
	$counter = 1;#will increment to stop sharks
	foreach($aURL as $url => $title)
	{# use the key/value pair of the URL and the title/text in the links created
	
		if($url != THIS_PAGE)	
		{#only link pages that are NOT the current page
			$myReturn .= '<a href="' . $url . '">' . $title . '</a>';
			
			if($counter != count($aURL) - 1){#if not last link, add a shark!
				$myReturn .= '<img src="images/shark.gif" align="middle" /> ';
			}
			$counter++;
		}
			
	}
	return $myReturn;
}

//<li class="active"><a href="index.php" title="Example of active class">Home/Index Page</a></li>
function merge_nav_1($aURL)
{# function 
	$myReturn = '';
	foreach($aURL as $url => $title)
	{# use the key/value pair of the URL and the title/text in the links created
		if($url == THIS_PAGE)
		{# use PageID on the current page
		    $myReturn .= '<li class="active"><a href=" ' . $url . '" title="Example of active class">' . $title . '</a></li>';	
		}else{#Not current page, so create a link 
			$myReturn .= '<li><a href="' . $url . '" title="Example of active class">' . $title . '</a></li>';
		}
	}
	return $myReturn;
}

function get_header()
{#get header file from current theme
/*1- store the current theme
2-use the current theme(a sting) to identify which folder to use

*/
	global $theme;
	//echo $theme;
	include $theme . '/header.php';
	
}

function get_footer()
{
 	include $theme . '/footer.php';
	}

?>