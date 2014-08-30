Express
=======

快速简单查询快递信息

demo:
<?php
	include 'Express.php';
	var_dump(json_decode(Express::getOrderInfo('868124032474'),true));
