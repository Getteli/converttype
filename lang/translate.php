<?php
	session_start();
	// ini_set( 'error_reporting', E_ALL );
	// ini_set( 'display_errors', true );
	/*
	$server = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
	$langserver = explode(',', $server)[0];
	$lang = explode('-', $langserver)[0];
	*/

	// $lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);
	//
	// if (!isset($_SESSION["lang"]))
	// {
	// 	if (!isset($_GET["lang"]))
	// 	{
	// 		$_SESSION["lang"] = "en";
	// 	}
	// 	else
	// 	{
	// 		$_SESSION["lang"] = $_GET["lang"];
	// 	}
	// }
	//
	// if(isset($_GET["lang"]))
	// {
	// 	$_SESSION["lang"] = $_GET["lang"];
	// }

	switch ($_POST["language-select"])
	{
		case "pt":
			header('Location: https://converttype.com/pt');
			exit;
			break;
		case "en":
			header('Location: https://converttype.com');
			exit;
			break;
		case "fr":
			header('Location: https://converttype.com/fr');
			exit;
			break;
		case "es":
			header('Location: https://converttype.com/es');
			exit;
			break;
		case "ja":
			header('Location: https://converttype.com/ja');
			exit;
			break;
		case "ru":
			header('Location: https://converttype.com/ru');
			exit;
			break;
		case "de":
			header('Location: https://converttype.com/de');
			exit;
			break;
		case "it":
			header('Location: https://converttype.com/it');
			exit;
			break;
		case "zh":
			header('Location: https://converttype.com/zh');
			exit;
			break;
		default:
			header('Location: https://converttype.com');
			exit;
			break;
	}
