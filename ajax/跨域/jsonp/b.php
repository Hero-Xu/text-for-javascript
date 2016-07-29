<?php

	$name = $_GET['name'];
	$callback = $_GET['callback'];

	echo $callback.'({name: "'.$name.'"})';//回传一个函数调用，参数是一个json对象


?>
	