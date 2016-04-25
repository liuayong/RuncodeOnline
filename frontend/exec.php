<?php

if(!empty($_POST)) {
	echo $_POST['code'];

	//header( "HTTP/1.1 301 Moved Permanently" ); 
	//header("Location: exec.php?f=jquery_hide");

	//$ch = curl_init('exec.php?f=jquery_hide'); 
	//curl_setopt($ch, CURLOPT_POST, 1); 
	//curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST); 
	//curl_exec($ch); 
	//curl_close($ch); 
	//exit;
}


if(isset($_GET['f']) && $_GET['f'] == 'jquery_hide') {
	// var_dump($_POST);
}
