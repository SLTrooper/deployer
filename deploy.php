<?php
	error_reporting(E_ALL);
	//config


	//path to css

	$sCssPath = "/files/sl/layout/css";
	$sCssFile = "style.min.css";
	//path to js

	$sJsPath = "/files/sl/layout/js";
	$sJsFile = "scripts.js";
	
	//path to Git CSS

	$sGitCssPath = "https://raw.githubusercontent.com/SLTrooper/deployer/master/deploy.js";

	//path to git js file

	$sGitJSPath = "https://raw.githubusercontent.com/SLTrooper/deployer/master/deploy.js";

	$sJS = "";
	if ($stream = fopen($sGitJSPath, 'r')) {
    // print all the page starting at the offset 10
	    $sJS = stream_get_contents($stream, -1);

	    fclose($stream);
	}



	$myfile = fopen("test.txt", "w");
	if(fwrite($myfile, $sJS)) {
		echo "Datei erfolgreich geschrieben";
	}
	

?>