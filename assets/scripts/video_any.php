<?php
	$_FILES['file']['name'] = str_replace(' ', '_',$_FILES['file']['name']);
	$_FILES['file']['tmp_name'] = str_replace(' ', '_',$_FILES['file']['tmp_name']);

	$uploaddir = "../usr_download/";
	$uploadfile = $uploaddir . basename($_FILES['file']['name']);

  if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadfile)) {
		$nomecompleto = $_FILES['file']['name'];
		// $ext = pathinfo($nomecompleto, PATHINFO_EXTENSION);
		$pathdownload = "https://converttype.com/assets/usr_download/" . $nomecompleto;
  } else {
		// volta
		header('Location: ' . $_SERVER['HTTP_REFERER']."?back=error");
		// echo "caiu no else";
		// exit;
  }

	$input_file = "../usr_download/".$nomecompleto; // caminho do arquivo que o usuario upou

	$url = "https://video-conversion.online-convert.com/?external_url=" . $pathdownload;

	// curl mandando para essa url via post: https://www.online-convert.com/pt/carregamento-de-arquivo
	/*
	dados:
	url do video
	token que ta sendo pego no codigo de baixo
	value do button submit, q ta sendo pego tbm no código de baixo
	*/
	$converter_token = "";
	$converter_urlvideo = $pathdownload;
	$converter_url = "https://www.online-convert.com/fileupload";
	$converter_format = "";

	$html = file_get_contents($url);

	$dom = new DomDocument();
	@ $dom->loadHTML($html);
	$dom->preserveWhiteSpace = false;
	$buttons = $dom->getElementsByTagName("button");
	foreach($buttons as $button){
			$value = $button->getAttribute('value');
	   	// formato
			switch ($_GET['selecttype_video']) {
				case 'avi':
						if ($value == "video,avi") {
				   		// echo $value;
				   		$converter_format = $value;
				   	}
					break;
				case 'mp4':
						if ($value == "video,mp4") {
				   		// echo $value;
				   		$converter_format = $value;
				   	}
					break;
				case 'wmv':
						if ($value == "video,wmv") {
				   		// echo $value;
				   		$converter_format = $value;
							break;
				   	}
					break;
				case 'mov':
						if ($value == "video,mov") {
				   		// echo $value;
				   		$converter_format = $value;
				   	}
					break;
				case 'webm':
						if ($value == "video,webm") {
				   		// echo $value;
				   		$converter_format = $value;
				   	}
					break;
				case 'ogv':
						if ($value == "video,ogv") {
				   		// echo $value;
				   		$converter_format = $value;
				   	}
					break;
				case '3gp':
						if ($value == "video,3gp") {
				   		// echo $value;
				   		$converter_format = $value;
				   	}
					break;
				case '3g2':
						if ($value == "video,3g2") {
				   		// echo $value;
				   		$converter_format = $value;
				   	}
					break;
				case 'flv':
						if ($value == "video,flv") {
				   		// echo $value;
				   		$converter_format = $value;
				   	}
					break;
				case 'mkv':
						if ($value == "video,mkv") {
				   		// echo $value;
				   		$converter_format = $value;
				   	}
					break;
				case 'mp3':
						if ($value == "audio,mp3") {
				   		// echo $value;
				   		$converter_format = $value;
				   	}
					break;
				case 'ogg':
						if ($value == "audio,ogg") {
				   		// echo $value;
				   		$converter_format = $value;
				   	}
					break;
				case 'wav':
						if ($value == "audio,wav") {
				   		// echo $value;
				   		$converter_format = $value;
				   	}
					break;
				case 'wma':
						if ($value == "audio,wma") {
				   		// echo $value;
				   		$converter_format = $value;
				   	}
					break;
				case 'aac':
						if ($value == "audio,aac") {
				   		// echo $value;
				   		$converter_format = $value;
				   	}
					break;
				case 'aiff':
						if ($value == "audio,aiff") {
				   		// echo $value;
				   		$converter_format = $value;
				   	}
					break;
				case 'flac':
						if ($value == "audio,flac") {
				   		// echo $value;
				   		$converter_format = $value;
				   	}
					break;
				case 'm4a':
						if ($value == "audio,m4a") {
				   		// echo $value;
				   		$converter_format = $value;
				   	}
					break;
				case 'm4r':
						if ($value == "audio,m4r") {
				   		// echo $value;
				   		$converter_format = $value;
				   	}
					break;
				case 'mmf':
						if ($value == "audio,mmf") {
				   		// echo $value;
				   		$converter_format = $value;
				   	}
					break;
				case 'opus':
						if ($value == "audio,opus") {
				   		// echo $value;
				   		$converter_format = $value;
				   	}
					break;
				default:
					// volta
					// echo "DEFAULT";
					unlink($input_file);
					header('Location: ' . $_SERVER['HTTP_REFERER']."?back=error");
					break;
			}
	}

	if (empty($converter_format)) {
		// echo "VAZIO, NAO SEI OQ";
		// volta
		unlink($input_file);
		header('Location: ' . $_SERVER['HTTP_REFERER']."?back=error");
	}

	$inputs = $dom->getElementsByTagName("input");
	foreach($inputs as $input){
	   	$name = $input->getAttribute('name');
	   	if ($name == "csrf_token") {
	   		$value = $input->getAttribute('value');
	   		// echo $value;
	   		$converter_token = $value;
	   	}
	}


	$ch = curl_init($converter_url);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
 	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 300);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
	'external_url' => $converter_urlvideo,
	'csrf_token' => $converter_token,
	'category_target' => $converter_format,
	'string_method' => 'no_js'
	)));
	$output = curl_exec($ch) or die("cURL Error" . curl_error($ch));
	curl_close($ch);
	// echo "link: ";
	// echo $output;
	// echo "<br>";
	// echo "<hr>";
	$arraydados = explode(": ", $output);
	// echo "<pre>";
	// print_r($arraydados);
	// echo "<br>";
	// echo "<hr>";

	// fique de olho no array, pois pode mudarem o header e mudar o n°
	// provavelmente mudaram o header
	$linkandmore = $arraydados[4];
	// // tive q por a palavra exata q vem depois do link, pois o espaço em branco simplesmente nao funciona
	$link = explode("pragma", $linkandmore)[0];
	// echo "Link: ", $link;
	//
	echo json_encode(array("link" => $link, "name" => $nomecompleto));
	//
	unset($_FILES["file"]);
