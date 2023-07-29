<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

// $y = 12;

// function registerUser()
// {
//   global $y;
//   echo $y;
//   $x = 10;
//   echo "User Registered";
// }

// echo $x;
// registerUser();

function registerUser($email)
{
  echo "$email registered";
}

// registerUser("pidorg");


function sum($n1 = 4, $n2 = 5)
{
  return $n1 + $n2;
}

// $sum = sum(33, 6);
$sum = sum();
// echo $sum;

$subtract = function ($n1, $n2) {
  return $n1 - $n2;
};

// echo $subtract(10, 5);


$multiply = fn ($n1, $n2) => $n1 * $n2;

echo $multiply(10, 5);
