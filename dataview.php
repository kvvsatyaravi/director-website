<?php
include 'login/config.php';
$dat=$_SERVER['REQUEST_URI'];
$number = str_replace(['+', '-'], '', filter_var($dat, FILTER_SANITIZE_NUMBER_INT));


ECHO $number;


?>