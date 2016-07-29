<?php
	header("Access-Control-Allow-Origin:http://www.centerofthecircle.cn");
	//这里指定可以访问本页面的域名，http://www.centerofthecircle.cn是袁新的域名，我把另一个页面上传到了他的域名下。还可以写*，不过那样的话来自任何域下的代码都能访问到本页面，不安全
	$name = $_GET['name'];
	echo $name.' come on !';
?>