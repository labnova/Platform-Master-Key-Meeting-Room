<?php

session_start();

if(!isset($_SESSION['login'])) {
	header("Location:index.php");
	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Master Key Meeting Room</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* this 1px negative margin can be placed on any of the columns in this layout with the same corrective effect. */
ul.nav a { zoom: 1; }  /* the zoom property gives IE the hasLayout trigger it needs to correct extra whiltespace between the links */
</style>
<![endif]--></head>

<body>
<form name="logout" action="index.php" method="post"> 
<input type="hidden" name="logout" value="esci"/> 
<input type="submit" value="ESCI" style="width: 7em; font-size:16px; float:right;"/> 
</form> 
<div class="container">


  <div class="header">
  
  <img src="" alt="Inserire la grafica del logo" name="Insert_logo"  id="Insert_logo"  />
  
    <!-- end .header --></div>


<div class="sinistra">
    
  
  
  	<div class="domanda">
  		<h1>La tua domanda</h1>
        <form action="" method="post">
   		<input type="richiesta" name="richiesta"   placeholder="inserisci la tua richiesta"/> 
        <input type="submit" name="submit" value="invia" />
        
        <?php
		
		$destinatario='info@area51editore.com';
		$oggetto='DOMANDA DALLA PIATTAFORMA MASTER KEY';
		
		
		if (isset($_POST['submit'])) {
			
		
		if(trim($_POST['richiesta'])=='') { echo 'Devi scrivere la tua richiesta!'; }
		
		else { $richiesta= strip_tags(trim(stripslashes($_POST['richiesta']))); 
		
		
		if(!@mail($destinatario, $oggetto,  $richiesta)) {
			echo 'problemi durante invio richiesta.'; }
		else {
			echo 'richiesta inviata.'; }
		}
		
		}
		
		?>
        </form>
  	</div>
    
  <div class="sidebar1">
  
  	<div class="faq">
    	<h1 style="text-align:center;">F.A.Q.</h1>
        <ul>
        
        <li>
    		<h4>Domanda n.1?</h4>
       		<p>Lorem ipsum dolor sit amet</p>
        </li>
        <li>
        	<h4>Domanda n.2?</h4>
        	<p>Lorem ipsum dolor sit amet</p>
        </li>
        <li>
        	<h4>Domanda n.3?</h4>
        	<p>Lorem ipsum dolor sit amet</p>
        </li>
        <li>
        	<h4>Domanda n.4?</h4>
        	<p>Lorem ipsum dolor sit amet</p>
        </li>
        </ul>
  </div>
  
 		<div class="video">
  
  		<h1 style="text-align:center !important; ">VIDEO</h1>
        
         
  
  		<iframe width="350" height="300" src="//www.youtube.com/embed/5E1NTRCbg2I" frameborder="0" allowfullscreen></iframe>
  
 		 </div>
  
  </div><!-- end .sidebar1 -->
  </div> <!--end sinistra -->
  
  <div class="content">
  
  <div class="meeting">
    <h1>AREA MEETING</h1>
    <p>inserire collegamento o embeddaggio stesso del servizio.</p>
    <br /><br />
    
    <h2>INSERIRE GRAFICA</h2>
    <p>pulsanti, finestre, logistica servizio.</p>
   </div>
   
  <div class="prenotazioni"> 
   
    <h3>PRENOTAZIONI</h3>
    <p>logistica prenotazioni. </p>
    
    
    
  </div>
    
    
    </div><!-- end .content -->
    
    
  <div class="sidebar2">
  <div class="community">
    <h1>Community</h1>
   
    <script type="text/javascript" src="http://ny49i989kh.embed.tal.ki/embed/1.js"></script><div style="font-size:80%; text-align:center;" id="ny49i989kht4lk1prm0">get your own <a href="http://tal.ki?utm_source=install&utm_medium=link&utm_campaign=get_your_own">embeddable forum</a> with Talki</div> 
   </div> 
    
    <div class="offerte">
    <h1>Offerte</h1>
     <p>inserire offerte promozionali.</p>
    </div>
    
    
    <!-- end .sidebar2 --></div>
 <!-- <div class="footer">
    <p>This .footer contains the declaration position:relative; to give Internet Explorer 6 hasLayout for the .footer and cause it to clear correctly. If you're not required to support IE6, you may remove it.</p>
    <!-- end .footer --></div> 
  <!-- end .container --></div>
</body>
</html>