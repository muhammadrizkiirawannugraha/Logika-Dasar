<?php
 
 $array = array(1,2,3,4,5,6);
 
 var_dump($array);
 echo "<br>";
  // echo $array;
 print_r($array);
 echo "<br>";
 // kalau panggil item arr pake echo, harus ada di dalam looping
 for ($i = 0; $i < count($array); $i++) {
    echo $array[$i];
 } 
 echo "<br>";
 // kalau semisalnya panggil for array harus dalam looping
 foreach ($array as $key => $value) {
    echo "index ke-$key=" .$value . "<br>";
 }

 ?>