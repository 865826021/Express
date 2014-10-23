<?php
	include 'Express.php';
	echo '<pre>';
	var_dump(json_decode(Express::getExpressInfo('868124032474'),true));