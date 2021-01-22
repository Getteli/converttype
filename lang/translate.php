<?php
	$local = true;

	if ($local)
	{
		$link = "http://" . $_SERVER['SERVER_NAME'];
		$link .= "/converttype";
	}
	else
	{
		$link = "https://" . $_SERVER['SERVER_NAME'];
	}

	$ext = ".php";

	$lang_selec = addslashes($_POST["language-select"]);

	switch ($lang_selec)
	{
		case "pt":
			header("location: " . $link . "/pt" . $ext);
			break;
		case "en":
			header("location: " . $link);
			break;
		case "fr":
			header("location: " . $link . "/fr" . $ext);
			break;
		case "es":
			header("location: " . $link . "/es" . $ext);
			break;
		case "ja":
			header("location: " . $link . "/ja" . $ext);
			break;
		case "ru":
			header("location: " . $link . "/ru" . $ext);
			break;
		case "de":
			header("location: " . $link . "/de" . $ext);
			break;
		case "it":
			header("location: " . $link . "/it" . $ext);
			break;
		case "zh":
			header("location: " . $link . "/zh" . $ext);
			break;
		default:
			header("location: " . $link);
			break;
	}
	exit;
