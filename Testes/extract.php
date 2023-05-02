<?php

$size = "large";
$var_array = array("color" => "blue",
                   "size"  => "medium",
                   "shape" => "sphere");
extract($var_array, EXTR_PREFIX_SAME, "valor");

echo "$color, $size, $shape, $valor_size\n";

?>