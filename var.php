<?php
       // Basic Var
   $name = "Ag3ntQ";
   echo "Name : $name";
     
     // Constants
   // define(name, value, case-insensitive)
  echo "</br>";
  define("age",17);
  echo "Age ".age;
  /* No dollar sign ($) is necessary before the constant name */
 
  // Global
  $name="Global";
  function getname(){
     global $name;
     echo "</br>";
       echo "</br>";
     echo $name;
  }
  getname()

?>