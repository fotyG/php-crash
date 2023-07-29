<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User
{
  // Properties are attributes that belong to a class

  // Access Modifiers: public, private, protected
  // public: accessible from anywhere
  // private: only accessible from within the class
  // protected: only accessible from within the class and classes that extend the class
  public $name;
  public $email;
  public $password;

  // A constructor is a method that runs when an object is created 
  public function __construct($name, $email, $password)
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  // Methods are functions that belong to a class
  function set_name($name)
  {
    $this->name = $name;
  }

  function get_name()
  {
    return $this->name;
  }
}
;

// Instantiate a new user object
$user1 = new User("Shota", "shota@hi.ho", "pw123");
$user2 = new User("Pizdenbaum", "pb@hi.ho", "pw123");

// $user1->set_name("Pizdenbaum");
// $user2->set_name("Shota");

// $user1->name = "Shota";

// var_dump($user1->name);
// var_dump($user2->name);

// echo $user1->get_name();
// echo $user2->get_name();

echo $user1->name;
echo $user2->email;


// Inheritance

class employee extends User
{
  public function __construct($name, $email, $password, $title)
  {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function get_title()
  {
    return $this->title;
  }
}

$employee1 = new employee("Zalupkins", "zalup@kin.yo", "pw123", "CEO");

echo $employee1->get_title();