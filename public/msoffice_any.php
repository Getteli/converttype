<?php
	require_once(__DIR__ . '/../vendor/autoload.php');

	// ini_set( 'error_reporting', E_ALL );
	// ini_set( 'display_errors', true );

	/*
	declare(strict_types=1);

	require_once dirname(__DIR__) . '/vendor/autoload.php';

	use ExampleApp\HelloWorld;

	$hw = new HelloWorld();

	$hw->TesteVaiDeus();

	echo "<br> TESTE";
	*/

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

		// Configure API key authorization: Apikey
		$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', " 60c99b8c-0b69-4037-a8f3-5f9cfc992208");

		$apiInstance = new Swagger\Client\Api\ConvertDocumentApi(
		    new GuzzleHttp\Client(),
		    $config
		);

		$input_file = "../_assets/usr_download/".$nomecompleto; // caminho do arquivo que o usuario upou

		try
		{
			header("Content-type:application/pdf");
				switch (pathinfo($nomecompleto, PATHINFO_EXTENSION)) {
					case 'docx':

						switch ($_GET["selecttype_doc"]) {
							case "pdf":
									$result = $apiInstance->convertDocumentDocxToPdf($input_file);
								break;
							case "doc":
									$result = $apiInstance->convertDocumentDocxToDoc($input_file);
								break;
							case "jpg":
								$result = $apiInstance->convertDocumentDocxToJpg($input_file);
								break;
							case "png":
								$result = $apiInstance->convertDocumentDocxToPng($input_file);
								break;
							case "rtf":
								$result = $apiInstance->convertDocumentDocxToRtf($input_file);
							break;
							case "txt":
								$result = $apiInstance->convertDocumentDocxToTxt($input_file);
							break;
							case "html":
								$result = $apiInstance->convertDocumentDocxToHtml($input_file);
							break;
						}

						break;
					case 'doc':

						switch ($_GET["selecttype_doc"]) {
							case "pdf":
									$result = $apiInstance->convertDocumentDocToPdf($input_file);
								break;
							case "docx":
									$result = $apiInstance->convertDocumentDocToDocx($input_file);
								break;
							case "txt":
								$result = $apiInstance->convertDocumentDocToTxt($input_file);
							break;
						}

						break;
					case 'pdf':

						switch ($_GET["selecttype_doc"]) {
							case "docx":
									$result = $apiInstance->convertDocumentPdfToDocx($input_file);
								break;
							case "jpg":
								$result = $apiInstance->convertDocumentPdfToJpg($input_file);
								break;
							case "txt":
								$result = $apiInstance->convertDocumentPdfToTxt($input_file);
							break;
						}

						break;
					case 'html':

						switch ($_GET["selecttype_doc"]) {
							case "pdf":
									$result = $apiInstance->convertDocumentHtmlToPdf($input_file);
								break;
							case "png":
								$result = $apiInstance->convertDocumentHtmlToPng($input_file);
								break;
							case "txt":
								$result = $apiInstance->convertDocumentHtmlToTxt($input_file);
							break;
						}

						break;
					case 'xls':

						switch ($_GET["selecttype_doc"]) {
							case "csv":
									$result = $apiInstance->convertDocumentXlsToCsv($input_file);
								break;
							case "pdf":
									$result = $apiInstance->convertDocumentXlsToPdf($input_file);
								break;
							case "xlsx":
								$result = $apiInstance->convertDocumentXlsToXlsx($input_file);
								break;
						}

						break;
					case 'xlsx':

						switch ($_GET["selecttype_doc"]) {
							case "pdf":
									$result = $apiInstance->convertDocumentXlsxToPdf($input_file);
								break;
							case "xls":
									$result = $apiInstance->convertDocumentXlsxToXls($input_file);
								break;
							case "png":
								$result = $apiInstance->convertDocumentXlsxToPng($input_file);
								break;
							case "csv":
								$result = $apiInstance->convertDocumentXlsxToCsv($input_file);
								break;
							case "txt":
								$result = $apiInstance->convertDocumentXlsxToTxt($input_file);
							break;
							case "html":
								$result = $apiInstance->convertDocumentXlsxToHtml($input_file);
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

			  print_r($result);
				// delete
				unlink($input_file);
		}
		catch(Exception $e)
		{
			// echo "error";
			unlink($input_file);
			header('Location: ' . $_SERVER['HTTP_REFERER']."?back=error");
		  // echo 'Exception when calling ConvertDocumentApi->convertDocumentDocxToPdf: ', $e->getMessage(), PHP_EOL;
		}

	}catch(Exception $e)
	{
		header('Location: ' . $_SERVER['HTTP_REFERER']."?back=error");
	}
?>
