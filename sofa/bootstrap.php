<?php

use Sofa\Cms;
use Sofa\DI\DI;

try {
	
  $di = new DI();
  
  $cms = new Cms($di);
  
  $cms->start();
    
} catch (Exception $e) {
    echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
}



?>