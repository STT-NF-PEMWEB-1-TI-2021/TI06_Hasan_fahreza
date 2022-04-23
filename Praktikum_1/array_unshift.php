<!DOCTYPE html>
<html>
<body>
<?php
	$tims = ['george', 'hill', 'phillip', 'curtis'];
	array_unshift($tims, 'julius', 'leo');
	foreach($tims as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>