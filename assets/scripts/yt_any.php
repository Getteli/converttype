<?php
  // a casa caiu, nao ta funcionando
	// muda a url do video para o que foi digitado, executa um cURL
	// pega, e sera um array, tenta pegar pelo nome, e tenta saber se é video, video sem som, mp3...
	//"https://ytdl.ga/handler.php?url=https://www.youtube.com/watch?v=yClUduXdj8A"

  $linkvideo = $_GET["link"] ;//file_get_contents('php://input');

	function displayRecursiveResults($arrayObject) {
		$return = "";
	    foreach($arrayObject as $key=>$data) {
	        if(is_array($data)) {
	            displayRecursiveResults($data);
	        } elseif(is_object($data)) {
	            displayRecursiveResults($data);
	        } else {
	            if ($key == "url") {
	            	$return .= "<a href='".$data."'>DOWNLOAD</a>";
	            	// echo "<a href='".$data."'>Baixar</a>";
	            }
				if ($key == "name") {
					$return .= " : " .$data;
	            	// echo " : " .$data;
	            }
				if ($key == "subname") {
					$return .= " (" . $data . ") <hr>";
	            	// echo " (" . $data . ")";
	            	// echo "<hr>";
	            }
	        }
	    }
	    echo $return;
	}


	$url = "https://ytdl.ga/handler.php?url=" . $linkvideo;

	// Iniciamos a função do CURL:
	$cUrl = curl_init($url); // passa a url e o código
	// parametros
	curl_setopt_array($cUrl, [
		// request custom do tipo get
		CURLOPT_CUSTOMREQUEST => 'GET',
		// Permite obter o resultado
		CURLOPT_RETURNTRANSFER => 1,
	]);
	// get cURL execute
	$result = curl_exec($cUrl);
	curl_close($cUrl);

	// $resultado = json_decode($result);
  echo "tem algo?";

  // echo "<img src=".$resultado->thumb." alt='thumbnail' width='250' height='150'/>";
	echo "<br/>";
  // print_r($result);
	// displayRecursiveResults($resultado->url);
