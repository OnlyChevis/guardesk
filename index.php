<?php
  $server = $_GET["server"];
  $type = $_GET["type"];
  file_put_contents("servers/".$server, $type);
?>
