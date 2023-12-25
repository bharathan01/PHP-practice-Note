<?php 
//The glob function in PHP is used to find pathnames matching a specified pattern according to the rules used by the libc glob() function, 
// which is the standard file globbing mechanism used by Unix shells. It allows you to search for files or directories using wildcard patterns.
// syntex
// array glob ( string $pattern, int $flags = 0 )


// $file = glob('*'); -- get the all file and folder in current directry
// $file = glob('../*'); -- get the all file and folder in the directry
// $file = glob('../*.php'); -- return the folders with the extention .php
// $file = glob('../*ment*'); -- return the file name contain ment
$file = glob('../{*.txt, *.php}',GLOB_BRACE);
// GLOB_BRACE -- allows the use of {a,b} to match either "a" or "b"  
// GLOB_ONLYDIR -- only returns directories.
echo "<pre>";
print_r($file);
echo "</pre>";