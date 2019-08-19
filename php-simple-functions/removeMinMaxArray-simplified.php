<?php
/* Author: Anuar *
*** Version: 2.0
*** Details: Simplified version
*** Date: 19 August 2019
*** Time: 12:56PM
*/
 
function minMaxArraySum($purpose,$listofarray){
	$error=true;
	$return=true;
	if($purpose=="removemin"){			
		if(($key = array_search(min($listofarray),$listofarray)) !== false) {
			   unset($listofarray[$key]);			  
			   $return = array_sum($listofarray);
			   $error=false;
		 } 		
	}
	else if($purpose=="removemax"){				
		if(($key = array_search(max($listofarray),$listofarray)) !== false) {
			   unset($listofarray[$key]);			  
			   $return = array_sum($listofarray);
			   $error=false;
		 }
	}
	else{ $error=true; }
	if($error===true){ $return = "Something went wrong"; }
	
	return $return;
}

/* Run Function minMaxArraySum */ 
$thearray = array(6,5,2,1,19);
echo '<pre>'; print_r($thearray); echo '</pre>';
echo "This is the sum of the list of array which removed the max num:<br>".minMaxArraySum("removemax",$thearray);
echo "<hr>";
echo "This is the sum of the list of array which removed the min num:<br>".minMaxArraySum("removemin",$thearray);
/*** End of simplified Version***/