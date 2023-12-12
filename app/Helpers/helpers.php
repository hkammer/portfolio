<?php

if (!function_exists('printArray')) {
    function printArray($array) {
        // Your utility function's logic here
        echo "<pre id='debug'>";
      print_r($array);
      echo "</pre>";

    }
}

?>
