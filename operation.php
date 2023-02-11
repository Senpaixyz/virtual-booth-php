<?php 

function getParentUrl($parentCount=0) {
  $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
  $host = $_SERVER['HTTP_HOST'];
  $uri = $_SERVER['REQUEST_URI'];
  $index_route = $protocol . $host . $uri;

  $parts = "";

  $parts = explode('/', $index_route);
  if($parentCount > 0){
    for($i = 0 ; $i <= $parentCount; $i++){
      array_pop($parts);
    }
  }
  else{
    array_pop($parts);
  }

  return implode('/', $parts);
}

?>