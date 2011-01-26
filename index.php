<?php
/**
 * Joe Rozek
 * Project 01
 */
ob_start();
/*
 * start output buffering
 */
echo "My First Project with Output Buffering";
/*
 * echo statement
 */

$v = ob_get_contents();
/*
 * assign the buffer to a variable
 */
ob_end_clean();

echo $v;
/*
 * echo out the variable
 * 
 */