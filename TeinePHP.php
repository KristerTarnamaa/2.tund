<?php

	$age = 5;
	
	if ($age <= 17) {
		
		echo "alaealine";
		
	} else {
		
		echo "täisealine";
	}

?>

<br>

<?php

	for ( $i = 1; $i<=$age; $i++){
		echo $i."palju ";
	}
	
	echo "õnne";
	
?>

<br>

<?php

	echo date('d.m.Y - l h:i:s A ' )



?>