<?php
	require_once(__DIR__ . '/../vendor/autoload.php');

	// ini_set( 'error_reporting', E_ALL );
	// ini_set( 'display_errors', true );

	try
	{
		// sobe o arquivo
		$_FILES['file']['name'] = str_replace(' ', '_',$_FILES['input_file']['name']);
		$_FILES['file']['tmp_name'] = str_replace(' ', '_',$_FILES['input_file']['tmp_name']);

		$uploaddir = "../_assets/usr_download/";
		$uploadfile = $uploaddir . basename($_FILES['input_file']['name']);

		if (move_uploaded_file($_FILES["input_file"]["tmp_name"], $uploadfile))
		{
			$nomecompleto = $_FILES['input_file']['name'];
			// $ext = pathinfo($nomecompleto, PATHINFO_EXTENSION);
		}
		else
		{
			header('Location: ' . $_SERVER['HTTP_REFERER']."?back=error");
		}

		$chave1 = "60c99b8c-0b69-4037-a8f3-5f9cfc992208"; // douglas, antiga, ja expirada
		$chave2 = "76299ba9-6820-497d-98ea-8d1ff2fa0116"; // conta: Matheusch7@gmail.com LOGIN NORMAL
		$chave3 = "3533b3d4-bbee-4f89-af1a-debf3a998ed2"; // conta: douglasgamer05@gmail LOGIN DIRETO PELO GOOGLE

		// Configure API key authorization: Apikey
		$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', $chave1);

		$apiInstance = new Swagger\Client\Api\ConvertDocumentApi(
		    new GuzzleHttp\Client(),
		    $config
		);

		$input_file = "../_assets/usr_download/".$nomecompleto; // caminho do arquivo que o usuario upou

		try
		{

				$extension = strtolower(pathinfo($nomecompleto, PATHINFO_EXTENSION));
				$typeSelect = strtolower($_GET["selecttype_doc"]);
				switch ($extension) {
					case "docx":

						switch ($typeSelect) {
							case "pdf":
									$result = $apiInstance->convertDocumentDocxToPdf($input_file);
								break;
							case "doc":
									$result = $apiInstance->convertDocumentDocxToDoc($input_file);
								break;
							case "rtf":
									$result = $apiInstance->convertDocumentDocxToRtf($input_file);
								break;
							case "html":
									$result = $apiInstance->convertDocumentDocxToHtml($input_file);
								break;
							default:
									unlink($input_file);
									header('Location: ' . $_SERVER['HTTP_REFERER']."?back=error");
								break;
						}

						break;
					case "doc":

						switch ($typeSelect) {
							case "pdf":
									$result = $apiInstance->convertDocumentDocToPdf($input_file);
								break;
							case "docx":
									$result = $apiInstance->convertDocumentDocToDocx($input_file);
								break;
							default:
									unlink($input_file);
									header('Location: ' . $_SERVER['HTTP_REFERER']."?back=error");
								break;
						}

						break;
					case "pdf":

						switch ($typeSelect) {
							case "docx":
									$result = $apiInstance->convertDocumentPdfToDocx($input_file);
								break;
							default:
									unlink($input_file);
									header('Location: ' . $_SERVER['HTTP_REFERER']."?back=error");
								break;
						}

						break;
					case "html":

						switch ($typeSelect) {
							case "pdf":
									$result = $apiInstance->convertDocumentHtmlToPdf($input_file);
								break;
							default:
									unlink($input_file);
									header('Location: ' . $_SERVER['HTTP_REFERER']."?back=error");
								break;
						}

						break;
					case "xls":

						switch ($typeSelect) {
							case "csv":
									$result = $apiInstance->convertDocumentXlsToCsv($input_file);
								break;
							case "pdf":
									$result = $apiInstance->convertDocumentXlsToPdf($input_file);
								break;
							case "xlsx":
								$result = $apiInstance->convertDocumentXlsToXlsx($input_file);
								break;
							default:
									unlink($input_file);
									header('Location: ' . $_SERVER['HTTP_REFERER']."?back=error");
								break;
						}

						break;
					case "xlsx":

						switch ($typeSelect) {
							case "pdf":
									$result = $apiInstance->convertDocumentXlsxToPdf($input_file);
								break;
							case "xls":
									$result = $apiInstance->convertDocumentXlsxToXls($input_file);
								break;
							case "html":
								$result = $apiInstance->convertDocumentXlsxToHtml($input_file);
								break;
							default:
									unlink($input_file);
									header('Location: ' . $_SERVER['HTTP_REFERER']."?back=error");
								break;
						}

						break;
					default:
							unlink($input_file);
							header('Location: ' . $_SERVER['HTTP_REFERER']."?back=error");
						break;
				}

				if (empty($result) || !isset($result)) {
					unlink($input_file);
					header('Location: ' . $_SERVER['HTTP_REFERER']."?back=error");
				}

				$data = $result;
				$newName = $nomecompleto . time() . rand(0,9999) .".". $typeSelect;
				$getFile = $uploaddir . $newName;

				file_put_contents($getFile ,$data);

				if (file_exists($getFile))
				{
					// download do arquivo
				    header('Content-Description: File Transfer');
				    header('Content-Type: application/octet-stream');
				    header('Content-Disposition: attachment; filename='.basename($getFile));
				    header('Expires: 0');
				    header('Cache-Control: must-revalidate');
				    header('Pragma: public');
				    header('Content-Length: ' . filesize($getFile));
				    ob_clean();
				    flush();
				    readfile($getFile);
				}

				// delete o original e o convertido
				unlink($input_file);
				unlink($getFile);
		}
		catch(Exception $e)
		{
			// echo "ERROR";
			unlink($input_file);
			header('Location: ' . $_SERVER['HTTP_REFERER']."?back=error");
		  // echo 'Exception when calling ConvertDocumentApi->convertDocumentDocxToPdf: ', $e->getMessage(), PHP_EOL;
		}

	}catch(Exception $e)
	{
		header('Location: ' . $_SERVER['HTTP_REFERER']."?back=error");
		// echo "ERROR 2";
	}
