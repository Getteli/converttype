<?php
  $namefile = file_get_contents('php://input');
  $pathcompletefile = "../usr_download/" . $namefile;

  if(!unlink($pathcompletefile)){
    echo false;
  }else{
    echo true;
  }
?>
