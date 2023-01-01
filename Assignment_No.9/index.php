<?php



// __call


// class user
// {
//   public function __call($name, $arguments)
//   {
//     echo "<pre>";
//     print_r($arguments);
//   }
// }


// $obj = new user;
// $obj->hello('Hi There');





// Overloading Using __Call


// class calc
// {
//   public function __call($name, $arguments)
//   {
//     if ($name == "add") {
//       if (count($arguments) == 2) {
//         echo $arguments[0] + $arguments[1];
//       } else if (count($arguments) == 3) {
//         echo $arguments[0] + $arguments[1] + $arguments[2];
//       } else {
//         throw new Exception('Check Args Number.');
//       }
//     }
//   }
//   public function __get($name)
//   {
//     echo $name . "not found";
//   }
//   public function __set($name, $value)
//   {
//     echo "Cannot Find " . $name . " Property and The Value is " . $value;
//   }
// }


// $obj = new calc;

// $obj->add(6, 9, 9, 9);
// $obj->name; // __get
// $obj->name = "Ali";


// trait soul
// {
//   public function soulmethod()
//   {
//     echo "Soul Here";
//   }
// }

// trait body
// {
//   public function bodymethod()
//   {
//     echo "Body Here";
//   }
// }

// class person
// {
//   use soul, body;
// }

// $obj = new person;

// $obj->bodymethod();



// spl_autoload_register(function ($cName) {
//   include($cName . ".php");
// });

// $obj = new user;
// $obj->hello("Ahmed");
