<?php

if($_POST) {

  $a = "test string";
  $b = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $c = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
  $d = filter_var($_POST["message"], FILTER_SANITIZE_STRING);

  function somePhpFunction($b, $c, $d){

  	// do something server side here
    $test = $b.' - '.$c.' - '.$d;
  	return $test;
  
  }
  
  if(@somePhpFunction($b, $c, $d)) {

    $output = json_encode(array('success' => true));
    die($output);

  } else {

    $output = json_encode(array('success' => false));
    die($output);

  }
}

?>



