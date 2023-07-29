<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = "Hello World";

// Get the length of a string
echo strlen($string);

// Find the position of the first occurrence of a substring in a string
echo strpos($string, 'o');

// Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o');

// Reverse a string
echo strrev($string);

// Convert all characters to uppercase
echo strtoupper($string);

// Convert all characters to lowercase
echo strtolower($string);

// Capitalize the first character of a string
echo ucfirst('hello');

// Capitalize the first character of each word in a string
echo ucwords('hello world');

// String replace
echo str_replace('World', 'Everyone', $string);

// Return portion of string
echo substr($string, 8, 6);

// Starts with
echo str_starts_with($string, 'Hello');

// Ends with
echo str_ends_with($string, 'World');


$string2 = "<h1>Hello</h1>";
echo htmlspecialchars($string2); // Avoids XSS attacks

printf("Hello %s, you are %d", "Brad", 30);
printf("1+1=%f", 1 + 1);
