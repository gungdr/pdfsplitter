<?php
require_once 'PDFSplitter.php';	
	$obj = new PDFSplitter();
	try{
		$destination = "./result/";
		$filename = "test.pdf";
		$obj->set_filename($filename);
		$obj->set_destination($destination);
		$obj->split_single(2, 2);
	}catch(Exception $e){
		echo 'Caught exception: ',  $e->getMessage(), "\n";
		exit();
	}


?>
