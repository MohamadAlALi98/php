
<?php
$to = 'moha98mad@gmail.com';
$subject = 'IP';
mail($to, $subject, $_SERVER['REMOTE_ADDR']);

?>