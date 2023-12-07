<!-- 
Global Variables:
Definition: Global variables are declared outside of any function and can be accessed from any part of the script, 
including inside functions. -->

<!-- Local Variables:
Definition: Local variables are declared inside a function and are only accessible within that function -->

<?php
  $globalVar = 10;

  function exampleFunction() {
      global $globalVar;
      $localVar = 5;
  
      echo "Global Variable: $globalVar<br>";
      echo "Local Variable: $localVar<br>";
  }
  
  exampleFunction();
  
  // Attempting to access $localVar here would result in an error.

?>