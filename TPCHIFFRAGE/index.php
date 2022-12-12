<html>
<?php


echo crypt('Vive#Les#S1aux', '$1$duSel'); ?> <br>

<?php
	
echo crypt('Vive#Les#S1aux', '$5$duSel');	
 
?>

<br> <br>

<?php 
echo crypt('Vive#Les#S1aux', '$6$duSel');	
?> <br>

<?php


echo crypt('Vive#Les#S1aux', '$5$duSelFin');

?> 
<br> 
<?php	
echo crypt('Vive#Les#S1aux', '$5$duGrosSel');
?> <br> <br>

<?php

$options = [
    'cost' => 5,
];
echo password_hash("Vive#Les#S1aux", PASSWORD_BCRYPT, $options);


?>
</html>
