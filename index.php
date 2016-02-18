<?php
/* Redirect browser */
echo $_SERVER['SERVER_NAME'];
header("Location: http://" . $_SERVER['SERVER_NAME'] . "/demohc32/hc3-demo/overview.php");
 exit;
?>
