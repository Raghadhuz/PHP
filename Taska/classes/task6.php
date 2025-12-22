<?php
$dateString = '12-08-2004';
$date = DateTime::createFromFormat('d-m-Y', $dateString);
echo $date->format('Y-m-d');
?>
