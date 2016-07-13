<?php
function forcaWWW() {
	if ($_SESSION["config"]["sslStatus"] && !isset($_SERVER["HTTPS"])) {
		$proc = "https://";
	} elseif ((!isset($_SERVER["HTTPS"])) || (!$_SESSION["config"]["sslStatus"] && isset($_SERVER["HTTPS"]))) {
		$proc = "http://";
	}

	if(substr($_SERVER[HTTP_HOST],0,4)!="www.")
		header('Location: '$proc.'www.'.$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI].'');
}
