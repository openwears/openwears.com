<?php
require_once "lib/common.inc.php";
require_once "lib/SimpieView.php";

$view = new SimpieView("templates/index.php", "templates/layout/main.php");
$view->render(array(
	'title' => "Index",
));
