<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-TW" xml:lang="zh-TW">
	<head>
		<title>MusicBox</title>
		<meta http-equiv="Content-Type" content="text/html; charset=big5" />
		<style type="text/css" media="screen">
		html, body { height:100%; background-color: #fcde98;}
		body { margin:0; padding:0; overflow:hidden; }
		#flashContent { width:100%; height:100%; }
		</style>
	</head>
	<body>
	<form action="musicbox.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="max_file_size" value="1024000">
	<input type="file" name="myfile">
	<input type="submit" value="上傳">
	<input type="button" value="Download Now" onClick="window.location.href='save.php'">
	</form>
	
		<div id="flashContent">
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="800" height="489" id="save" align="middle">
				<param name="movie" value="save.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#fcde98" />
				<param name="play" value="true" />
				<param name="loop" value="true" />
				<param name="wmode" value="window" />
				<param name="scale" value="showall" />
				<param name="menu" value="true" />
				<param name="devicefont" value="false" />
				<param name="salign" value="" />
				<param name="allowScriptAccess" value="sameDomain" />
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="save.swf" width="800" height="489">
					<param name="movie" value="save.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#fcde98" />
					<param name="play" value="true" />
					<param name="loop" value="true" />
					<param name="wmode" value="window" />
					<param name="scale" value="showall" />
					<param name="menu" value="true" />
					<param name="devicefont" value="false" />
					<param name="salign" value="" />
					<param name="allowScriptAccess" value="sameDomain" />
				<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflash">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" />
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>
		</div>
	</body>
</html>

<?php
	
	error_reporting(0);
	$tex = $_REQUEST["tex"];
	$tey = $_REQUEST["tey"];
	
	$fp=fopen('note.mzb','w+');
	fwrite($fp,$tex."+".$tey);
	
	
	
	
	

$uploaddir = '';
$uploadfile = $uploaddir.basename($_FILES['myfile']['name']);

echo "<pre>";
if (move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadfile)) {
    echo "Upload OK \n";
} else {
    echo "Upload failed \n";
}

echo "</pre>";

?>
