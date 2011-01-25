<?php
/*
 * Joe Rozek
 * 1/24/2011
 * 
 */

ob_start();
echo "My First Project with Output Buffering";
$v = ob_get_contents();
ob_end_clean();
echo $v;
?>