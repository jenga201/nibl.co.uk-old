<?php

$config["site_path"] = "";

require_once($config["site_path"] . "_includes/config.inc.php");
require_once($config["site_path"] . "_includes/common.inc.php");


setup_template();

$page = "staff";

show_template(
	"staff", 
	array()
	);

?>
