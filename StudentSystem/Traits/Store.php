<?php
namespace Traits\Store;

trait Store
{
  public function log(string $msg): void
  {
    $logFile = fopen('log.txt', 'a');
    fwrite($logFile, $msg . PHP_EOL);
    fclose($logFile);
  }
}
