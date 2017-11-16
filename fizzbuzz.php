<?php

class FizzBuzz {

  function initiate_fizzbuzz() {
    for ($number_count = 1; $number_count <= 100; $number_count++) {
      if ($number_count % 3 == 0 && $number_count % 5 == 0) {
        echo "FizzBuzz ";
      }
      elseif ($number_count % 3 == 0) {
        echo "Fizz ";
      }
      elseif ($number_count % 5 == 0) {
        echo "Buzz ";
      }
      else {
        echo $number_count . ' ';
      }
    }
  }

}

$test = new FizzBuzz;
print_r($test->initiate_fizzbuzz());

?>
