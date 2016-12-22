<?php
/* Redirect browser */
$domain_name = $_SERVER['HTTP_HOST'];
$newURL = "http://" . $domain_name . "/hc3-demo/overview.php";
// header("http://" . $domain_name . "/hc3-demo/overview.php");
header('Location: '.$newURL);
 exit;
?>
