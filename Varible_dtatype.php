<?php
  //  Your name
   $name="Harsh Selarka";
  //  Your age
   $age=21;
  //  Whether you are a student (true/false)
   $is_student=true;
  //  Your height in cm
   $height=198.82;
  //  Your favorite colors (as an array)
  $myfavouritecolors=["blue","purple","red"];

//   Uses var_dump() to print all variable types

// Checks if $age is an integer using is_int()

// Checks if $name is a string using is_string()

// echo var_dump($name);
// echo var_dump($age);
// echo var_dump($is_student);

// echo $harsh = is_int($age);
// echo $harsh = is_string($name);

// Exercise 3: Type Conversion

// Convert the string "123" into an integer, and then:

//     Add 10 to it

//     Check its type using var_dump()

// $string="123";
// $num=((int)$string)+10;
// echo var_dump($num);


//Exercise 4: Null Values

// Create a variable $x, assign it null, and check if it is null using is_null().
// Then, assign it a value and check again.

// $x=0;
// echo is_null($x);

echo "my Name  is $name. my age is $age. Am  i student ?$is_student.my favourite colores are $myfavouritecolors[0],$myfavouritecolors[1].";
?>