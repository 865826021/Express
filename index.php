<?php
header("Content-type: text/html; charset=utf-8");
	include 'Express.php';
	echo '<pre>';
	var_dump(json_decode(Express::getExpressInfo('210793228260'),true));