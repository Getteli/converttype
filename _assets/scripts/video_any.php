<?php
	ini_set( 'error_reporting', E_ALL );
	ini_set( 'display_errors', true );

	// $uploaddir = "../usr_download/";
	// $uploadfile = $uploaddir . basename($_FILES['file']['name']);

  echo $_FILES["file"];

  unset($_FILES["file"]);
  // if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadfile)) {
  //   echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded. formato: " . $_GET['selecttype_video'];
  // } else {
  //   echo "Sorry, there was an error uploading your file. formato: " . $_GET['selecttype_video'];
  // }
  //
	$url = "https://conversao-de-video.online-convert.com/pt?external_url=https://converttype.com/_assets/usr_download/videoteste.mp4";

	// curl mandando para essa url via post: https://www.online-convert.com/pt/carregamento-de-arquivo
	/*
	dados:
	url do video
	token que ta sendo pego no codigo de baixo
	value do button submit, q ta sendo pego tbm no código de baixo
	*/
	$converter_token = "";
	$converter_urlvideo = "https://converttype.com/_assets/usr_download/videoteste.mp4";
	$converter_url = "https://www.online-convert.com/pt/carregamento-de-arquivo";
	$converter_format = "";
/*
	$html = file_get_contents($url);

	$dom = new DomDocument();
	@ $dom->loadHTML($html);
	$dom->preserveWhiteSpace = false;
	$buttons = $dom->getElementsByTagName("button");
	foreach($buttons as $button){
	   	$value = $button->getAttribute('value');
	   	// formato
      // $_GET['selecttype_video']
	   	if ($value == "video,avi") {
	   		// echo $value;
	   		$converter_format = $value;
	   	}
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

	$arraydados = explode(": ", $output);

	$linkandmore = $arraydados[5];
	// tive q por a palavra exata q vem depois do link, pois o espaço em branco simplesmente nao funciona
	$link = explode("x-frame-options", $linkandmore)[0];
  */
?>
