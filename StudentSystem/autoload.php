<?php
spl_autoload_register(function ($className) {
  if(str_starts_with($className, 'Classes\\')){
    include __DIR__ .'\\' . "$className.php" ;
  }
});
