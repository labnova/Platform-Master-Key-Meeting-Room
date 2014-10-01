<?php session_start();

if(!isset($_SESSION['login'])) {
	header("Location:index.php");
	
}




function download($path) {
	
	
	
	if(!file_exists($path)) {
		
		die("errore, non esiste ancora il file!");
		
	} else {
		
header ("Cache-Control: public");
header ( "Content-type: application/octet-stream" );
header ( "Content-Disposition: attachment; filename=$path" );
header ( "Content-Type: application/zip");
header ("Content-Transfer-Encoding: binary");
header ( "Content-Description: Download file" );
header('Pragma: no-cache');
header('Expires: 0');
header ( "Content-Length: " . filesize ($path) );

readfile ($path);

	}
	
}

if(isset($_GET['download'])) {
	
	if(!empty($_GET['download'])) {
		$file=$_GET['download'];
		
		$dir="http://cdn.area51editore.com/";
		$path= $file;
		download($path);
		
	}
	
}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style_contenuti.css" type="text/css" />
<title>Contenuti</title>
</head>



<body>
<div class="bottoni">
<form name="logout" action="index.php" method="post"> 
<input type="hidden" name="logout" value="esci"/> 
<input type="submit" value="ESCI" style="width: 7em; font-size:16px; float:right;"/> 
</form> 

<form name="indietro" action="piattaforma.php" method="post">
<input type="submit" name="indietro" value="TORNA INDIETRO" style="width: 10em; font-size:16px; float:left; "/> 
</form>


</div>
<div class="contenuto">

<div class="audio">
	<h1>Contenuti Audio</h1>
  <div class="box_contenuti">
  <p><a href="http://cdn.area51editore.com/Demo/RisparmioEcologicoDEMO.epub">audio 1</a></p>
  </div>
  
  <div class="box_contenuti">
  <p><a href="contenuti.php?download=07.mp3">audio 2</a></p>
  </div>
  
  <div class="box_contenuti">
  <p><a href="contenuti.php?download=08.mp3">audio 3</a></p>
  </div>
  
</div> <!-- fine "audio" -->

<div class="video">
	<h1>Contenuti Video</h1>
  <div class="box_contenuti">
  <a href="http://cdn.area51editore.com/Demo/RisparmioEcologicoDEMO.epub">video 1</a>
   <p>Lorem Ipsum Dolor Sit Amet</p>
  </div>
  
  <div class="box_contenuti">
  <a href="contenuti.php?download=07.mp3">video 2</a>
  <p>Lorem Ipsum Dolor Sit Amet</p>
  </div>
  
  <div class="box_contenuti">
  <a href="contenuti.php?download=08.mp3">video 3</a>
  <p>Lorem Ipsum Dolor Sit Amet</p>
  </div> 
  
</div> <!-- fine "video" -->

</div> <!-- fine "box_contenuti" -->
</body>
</html>