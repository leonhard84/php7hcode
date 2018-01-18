<?php 

session_id('53cbes3umip68cdkh09cd0lj8h');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>