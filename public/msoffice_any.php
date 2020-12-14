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
		    $result = $apiInstance->convertDocumentDocxToPdf($input_file);
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
