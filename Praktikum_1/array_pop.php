<!DOCTYPE html>
<html>
<body>
<?php
	$tims = ['george', 'hill', 'phillip', 'curtis'];
	array_pop($tims);
	foreach($tims as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>