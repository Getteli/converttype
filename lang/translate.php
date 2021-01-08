<?php
	$local = true;

	if ($local)
	{
		$link = "http://" . $_SERVER['HTTP_HOST'] . "";
		$link .= "/converttype";
		$ext = ".php";
	}
	else
	{
		$link = "https://" . $_SERVER['HTTP_HOST'] . "";
		$ext = "";
	}

	switch ($_POST["language-select"])
	{
		case "pt":
			header('Location: '. $link."/pt".$ext);
			exit;
			break;
		case "en":
			header('Location: '. $link);
			exit;
			break;
		case "fr":
			header('Location: '. $link."/fr".$ext);
			exit;
			break;
		case "es":
			header('Location: '. $link."/es".$ext);
			exit;
			break;
		case "ja":
			header('Location: '. $link."/ja".$ext);
			exit;
			break;
		case "ru":
			header('Location: '. $link."/ru".$ext);
			exit;
			break;
		case "de":
			header('Location: '. $link."/de".$ext);
			exit;
			break;
		case "it":
			header('Location: '. $link."/it".$ext);
			exit;
			break;
		case "zh":
			header('Location: '. $link."/zh".$ext);
			exit;
			break;
		default:
			header('Location: '. $link);
			exit;
			break;
	}
