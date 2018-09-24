<?php

function redirect_page($redirect)
{
	header("Location:". $redirect);
	exit;
}
	if($_GET['name']=='sameer'){
		redirect_page("https://www.google.com");
	}
	else{
		redirect_page("https://www.facebook.com");
	}

?>