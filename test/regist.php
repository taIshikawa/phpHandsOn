<?php
if (empty($_POST)) {
  echo "ポストしてね";
} else {
	
  $json = json_encode($_POST);
  header("Content-Type: application/json; charset=utf-8");
  echo $json;

}
