<?php
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', true );

$image = new Imagick();
$dpi = 300;

if(isset($_GET['dpi'])){
	$dpi = (float)$_GET['dpi'];
}

$image->setResolution($dpi,$dpi);
$image->setSize(600, 800);
$image->readImage($_FILES["file"]["tmp_name"]);

$format = "jpeg";
if(isset($_GET['selecttype_pdf'])){
	$format = (string)$_GET['selecttype_pdf'];
}

$namefile = $_FILES["file"]["name"] . "_" . rand() . "." .$format;
$pathcompletefile = "../usr_download/" . $namefile;
$image->writeImage($pathcompletefile); //also works
// imagem salva.

echo $namefile;

// echo "<a href='_assets/usr_download/".$namefile."' download='".$namefile."' class='desc center' id='btn_download_filesaved'><h4>DOWNLOAD</h4></a>";

?>
