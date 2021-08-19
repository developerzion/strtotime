<?php

	//============================================
	// Github: github.com/developerzion
	// Author: Moses Samuel Zion
	// Website: www.devparse.com 
	//============================================

	//============================================
	// Converting StringToTime to Date
	// Sample strtotime date format date("m/d/Y")
	//=============================================

	$strdate = strtotime(date("m/d/Y"));
	$convertdate = date("m/d/Y", $strdate);	
	echo "String To Time: " . $strdate . "<br>"." String to time converted to date: ".$convertdate;

	//===========================================================
	// Calculating the difference between days using strtotime
	//-------------------------START-----------------------------
	// Using strtottime to calculate the numbers of days left to
	// your birthday
	//===========================================================
	function getBirthday($fulldate){
		$today = strtotime(date("m/d/Y"));
		$birthday = strtotime($fulldate);

		$diff = $birthday - $today;
		$daysleft = $diff / 86400; //86400 -> 60 * 60 * 24
		return "<p>You have $daysleft days left to your birthday </p>";
	}
    //---------------------------END------------------------------------
    //==================================================================


?>
<div style="margin-top: 50px"></div>

<h1>Birthday</h1>

<?php

	if (isset($_POST['cdl'])) {
		echo getBirthday($_POST['birthday']);
	}
	
?>

<form method="POST" action="">
	<input type="date" name="birthday" required="">
	<button name="cdl">Calcualte</button>
</form>
