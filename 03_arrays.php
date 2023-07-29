<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

// Simple Array
$numbers = [1, 2, 3, 4, 5];
$fruits = array("Apple", "Banana", "Orange");

// print_r($numbers);
// var_dump($numbers);

// echo $fruits[0];


// Associative Arrays
$colors = [
  1 => "red",
  4 => "blue",
  7 => "green"
];

// echo $colors[4];

$hex = [
  "red" => "#f00",
  "blue" => "#0f0",
  "green" => "#00f"
];

// echo $hex["red"];

$person = [
  "first_name" => "Shota",
  "last_name" => "Kobayashi",
  "age" => 34,
];

// echo $person["first_name"];

$people = [
  [
    "first_name" => "Shota",
    "last_name" => "Kobayashi",
    "age" => 34,
  ],
  [
    "first_name" => "Pizdenbaum",
    "last_name" => "Kobayashi",
    "age" => 3,
  ],
  [
    "first_name" => "Ulrih",
    "last_name" => "Kobayashi",
    "age" => 78,
  ],
];

// echo $people[1]["first_name"];

var_dump(json_encode($people));
