<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/


/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 10;

// if ($age >= 18) {
//   echo "you are old enough to vote!";
// } else {
//   echo "you are not old enough to vote!";
// }

$t = date("H");

// if ($t < 12) {
//   echo "Good morning!";
// } else if ($t < 17) {
//   echo "Good afternoon!";
// } else {
//   echo "Good evening!";
// }

$posts = ["First Post"];

// if (!empty($posts)) {
//   echo $posts[0];
// } else {
//   echo "No posts yet.";
// }

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// echo !empty($posts) ? $posts[0] : "No posts yet.";

// $firstPost = !empty($posts) ? $posts[0] : "No posts";
// $firstPost = !empty($posts) ? $posts[0] : null;

// $firstPost = $posts[0] ?? null;

// echo $firstPost;

/* -------- Switch Statements ------- */

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
