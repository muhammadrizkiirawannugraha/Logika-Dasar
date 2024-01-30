<?php
 // tampilkan bilangan bilangan yang memungkinkan untuk bilangan 90 bisa dibagi habis dengan bilangan tersebut dari rentang angka 10-30

 for ($i=10; $i <= 30; $i++) { 
     if ($i % 90 == 0) { 
         echo $i."<br>";
     }
 }



?>