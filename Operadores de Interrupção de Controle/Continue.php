<?php

for ($i = 0; $i <= 10; $i++) {
   if($i == 3) {
    continue;
   }
   echo $i . PHP_EOL;
}