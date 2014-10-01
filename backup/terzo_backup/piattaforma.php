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
<meta name="viewport" content="width=device-width" />
<!-- <link media="only screen and (min-width: 0px and max-width:479px)" href="piattaforma_mobile.html" type="text/html" /> -->
<link rel="stylesheet" href="css/progression.min.css" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/progression.min.js" ></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script type="text/javascript">

/***********************************************
* Disable "Enter" key in Form script- By Nurul Fadilah(nurul@REMOVETHISvolmedia.com)
* This notice must stay intact for use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
                
function handleEnter (field, event) {
		var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
		if (keyCode == 13) {
			var i;
			for (i = 0; i < field.form.elements.length; i++)
				if (field == field.form.elements[i])
					break;
			i = (i + 1) % field.form.elements.length;
			field.form.elements[i].focus();
			return false;
		} 
		else
		return true;
	}      

</script>



<!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* this 1px negative margin can be placed on any of the columns in this layout with the same corrective effect. */
ul.nav a { zoom: 1; }  /* the zoom property gives IE the hasLayout trigger it needs to correct extra whiltespace between the links */
</style>
<![endif]--></head>

<body>

<div class="container">
<form name="logout" action="index.php" method="post"> 
<input type="hidden" name="logout" value="esci"/> 
<input type="submit" value="ESCI" style="width: 7em; font-size:16px; float:right;"/> 
</form> 


  
  
  <img class="header" src="header.png"  alt="logo" style=" float:left;"  />
  
  


  
    


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
  
 
  
 		<div class="video">
  
  		<h1 style="text-align:center !important; ">VIDEO</h1>
        
         
  
  		<iframe width="335" height="281" src="//www.youtube.com/embed/5E1NTRCbg2I" frameborder="0" allowfullscreen></iframe>
  
 		 </div>
         
          	
    	<h1 style="text-align:center;">F.A.Q.</h1>
        <div class="faq" >
        <ul >
        
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
      </ul>
      <p>Continua a leggere...</p>
        
  </div>
  
  </div><!-- end .sidebar1 -->
  </div> <!--end sinistra -->
  
  <div class="contenuto_principale"> <!--inizio del contenuto meeting+offerte -->
  
  <div class="content">
  
  <div class="meeting">
    <h1>AREA MEETING</h1>
    <p>Presentazione del servizio.</p>
    <iframe width="400" height="281" src="//www.youtube.com/embed/E4QUIa34_BA" frameborder="0" allowfullscreen></iframe>
    <br /><br /><br /><br />
    <p>Caffeine doppio, spoon caffeine, french press, instant et ristretto seasonal shop. Aftertaste mazagran americano, cortado con panna blue mountain steamed macchiato grinder barista. Medium americano, strong, sugar brewed strong café au lait steamed. Mocha viennese a lungo irish variety extraction crema espresso cup con panna.</p>


    <br /><br /><br /><br />
    
 <div class="wrap"><!-- inizio "workshop" -->
  <div class="workshop">
  
   <h2>Meeting di Area51</h2>
    <br />
   
   <div class="abstract">
  		<a href="http://www.area51editore.com/categoria-prodotto/workshop" style="color: #a62020; text-align:center;">Prossimi meeting in programma</a>
   
   
   <ul class="prodotti">
								
          <li class="product">
			<a href="http://www.area51editore.com/negozio/crea-le-tue-app-per-android-e-ios-con-corona-sdk" title="Meeting 1">
            
				<div class="info-container">

					<h3>Meeting 1</h3>
					<h3 class="author"></h3>
			
				<ul>
					<li>12-19-26-ottobre-e-2-novembre<br />
					<br />
                    <br />
                    <p class="stock">8 disponibili</p></li>
                </ul>
	
   				 	<!--	<span class="price">
    						<span class="amount">€ 399</span>
     					</span>
				<div class="sottocategoria">Informatica e web</div> -->
		
        		</div>
		
       		</a>
		</li>
        
       <li class="product">
			<a href="http://www.area51editore.com/negozio/9045" title="Meeting 2">
            
				<div class="info-container">

					<h3>Meeting 2</h3>
					<h3 class="author"></h3>
			
				<ul>
					<li>18-19-e-25-26-gennaio 
                    <br />
                    <br />
                    <p class="stock ">8 disponibili</p></li>
                </ul>
	
   				 	<!--	<span class="price">
    						<span class="amount">€ 1.000.000</span>
     					</span>
				<div class="sottocategoria">Informatica e web</div> -->
		
        		</div>
		
       		</a>
		</li>
		
			</ul>
            
            </div>
   		</div>
 </div><!--fine "workshop" -->   
    
   </div>
   
  <div class="prenotazioni"> 
   
    <h3>Prenotati per il Meeting</h3><br/>
   
    <form id='myform' name='form1' method='post' action=''>
    
   
      <span id='sprytextfield1'>
        <label for='nome'>Nome</label>
        <br /><br />
        <input type='text' name='nome' id='nome' placeholder='Devi inserire il nome' onkeypress="return handleEnter(this, event)" />
        <span class='textfieldRequiredMsg'>Devi inserire il nome</span></span><br />
        <br /><br />
        
        
    		<span id='sprytextfield4'>
		    <label for='cognome'>Cognome</label>
            <br /><br />
		    <input type='text' name='cognome' id='cognome'  placeholder='Devi inserire il cognome' onkeypress="return handleEnter(this, event)"/>
		    <span class='textfieldRequiredMsg'>Devi inserire il cognome</span></span><br />
			<br /><br />
            
              <span id='sprytextfield2'>
           <label for='mail'>Indirizzo email</label>
           <br /><br />
           <input type='text' name='mail' id='mail'   placeholder='Devi inserire la mail' onkeypress="return handleEnter(this, event)" />
           <span class='textfieldRequiredMsg'>Devi inserire la mail</span></span><br />
		   <br />
            
            <input type='submit' class='button' name='invia' value='Invia' placeholder=''>
    </form>

 
    
    <?php
	
	if(isset($_POST['invia'])) {
		
		$nome= $_POST['nome'];
		$cognome=$_POST['cognome'];
		$mail=$_POST['mail'];
		
		
		 function controlla($email)
{
	// elimino spazi, "a capo" e altro alle estremità della stringa
	$email = trim($email);

	

	// controllo che ci sia una sola @ nella stringa
	$num_at = count(explode( '@', $email )) - 1;
	if($num_at != 1) {
		return false;
	}

	// controllo la presenza di ulteriori caratteri "pericolosi":
	if(strpos($email,';') || strpos($email,',') || strpos($email,' ')) {
		return false;
	}

	// la stringa rispetta il formato classico di una mail?
	if(!preg_match( '/^[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}$/', $email)) {
		return false;
	}

	return true;
}

if(!controlla($mail)) { echo "hai inserito una mail non valida. Riprova"; }

else {


	
	/*if(!isset($_POST['nome'])) { echo "devi inserire il nome!"; } else { $nome= $_POST['nome']; }
	if(!isset($_POST['cognome'])) { echo "devi inserire il cognome!"; } else { $cognome= $_POST['cognome']; }
	if(!isset($_POST['email'])) { echo "devi inserire la tua mail!"; } else { $mail= $_POST['email']; } */
	
if(isset($nome) && isset($cognome)) {
		
		
		
		$destinatario="info@area51editore.com";
		$oggetto="richiesta prenotazione per il meeting";
		
		$corpo= "è arrivata una nuova richiesta per il meeting. 
		
		nome: ".$nome."
		cognome: ".$cognome."
		mail: ".$mail."
		
		 vorrebbe partecipare al meeting.";
		 
		
		 
		strip_tags(trim(stripslashes($corpo)));
		
		
		 
		 
		
		if(!@mail($destinatario, $oggetto,  $corpo)) {
			echo 'problemi durante invio richiesta.'; }
		else {
			echo "
				<p>Prenotazione inviata. Grazie per la tua partecipazione!</p>
				";
				
			
			 }
			
			
} else { echo "non puoi spedire la richiesta, perchè devi prima compilare tutti i campi."; }
			
			
			
		}
		
		
	}
	
	?>
    
    
  </div>
    
    
    </div><!-- end .content -->
    
    
  <div class="sidebar2">
  
  <div class="domanda">
  	<h1><a href="contenuti.php">Scarica i file</a><h1>
  </div>
  
   <div class="offerte">
        <h1>OFFERTE</h1>
         
        </div>
        
        <!-- end .sidebar2 --></div>
          </div> <!--fine del contenuto meeting+offerte+community -->
        
        
        
  
        
        
 
    
       
    
    
    
 
  <!-- end .container --></div>
  
<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
</body>
</html>