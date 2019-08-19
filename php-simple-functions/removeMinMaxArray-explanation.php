<?php
/* Author: Anuar *
*** Version: 1.0
*** Details: Attached with explanation
*** Date: 19 August 2019
*** Time: 12:56PM
*/
 
function minMaxArraySum($purpose,$listofarray){
	$error=true;
	$return=true;
	if($purpose=="removemin"){
		echo 'Removing the samllest and sum up the rest of:<br>';
		echo '<pre>'.print_r($listofarray).'</pre>';

		$val = min($listofarray);
		$newarray=array();
		if(($key = array_search($val,$listofarray)) !== false) {
			   unset($listofarray[$key]);
			   $newarray = $listofarray;	  	   
		 } 

		echo '<br>After removed smallest (Removed number = '.$val.'):<br>';
		echo '<pre>'.print_r($newarray).'</pre>';
		   
		echo '<br>Sum up the remainin list of array:<br>';
		$return = array_sum($newarray);
		$error=false;
		
	}
	else if($purpose=="removemax"){
		echo 'Removing the largest and sum up the rest of:<br>';
		echo '<pre>'.print_r($listofarray).'</pre>';

		$val = max($listofarray);
		$newarray=array();
		if(($key = array_search($val,$listofarray)) !== false) {
			   unset($listofarray[$key]);
			   $newarray = $listofarray;	  	   
		 } 

		echo '<br>After removed smallest (Removed number = '.$val.'):<br>';
		echo '<pre>'.print_r($newarray).'</pre>';
		   
		echo '<br>Sum up the remainin list of array:<br>';
		$return = array_sum($newarray);
		$error=false;
	}
	else{
		$error=true;
	}
	if($error===true){
		$return = "Something went wrong";		
	}
	
	return $return;
}

/* Run Function minMaxArraySum */
$thearray = array(6,5,2,1,19);
echo "This is the sum of the list of array which removed the smallest num:<br>".minMaxArraySum("removemax",$thearray);
/*** End of version with Explanation ***/