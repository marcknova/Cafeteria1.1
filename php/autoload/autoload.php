<?php
function autoload($clase){
   require_once("../BD/".$clase.".php");
}
spl_autoload_register("autoload");
?>