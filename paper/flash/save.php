<?php
	$filename = "note.mzb";
	$myFile = "note.mzb";
	header("Cache-Control: public, must-revalidate");
	header('Content-Transfer-Encoding: Binary'); //�s�X�覡
	header('Content-Disposition: attachment; filename="'.$filename.'"');
	readfile($myFile);
?>