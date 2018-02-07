<?php
	
	//config


	//path to css

	$sCssPath = "/files/sl/layout/css";

	//path to js

	$sJsPath = "/files/sl/layout/js";

	//path to git

	echo shell_exec("curl -H 'Authorization: token INSERTACCESSTOKENHERE' -H 'Accept: application/vnd.github.v3.raw' -O -L https://api.github.com/repos/owner/repo/contents/path");



?>