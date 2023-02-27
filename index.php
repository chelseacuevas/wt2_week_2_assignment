<?php

function celsiusToFahrenheit($celsius){
  $fahrenheit = (9/5 * $celsius) + 32;
  return $fahrenheit;
}


function fahrenheitToCelsius($fahrenheit){
  $celsius = 5/9 * ($fahrenheit - 32);
  return $celsius;
}

$celsius = 30;
$fahrenheit = celsiusToFahrenheit($celsius);
echo "$celsius °C = $fahrenheit °F.";

$fahrenheit = 63;
$celsius = fahrenheitToCelsius($fahrenheit);
echo "    ";
echo "$fahrenheit °F = $celsius °C.";

?>
