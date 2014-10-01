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
<title>Chiave Suprema Workbook Meeting Room</title>
<meta name="viewport" content="width=device-width" />

<link rel="stylesheet"  type="text/css" media="screen and (min-width: 1024px)"   href="style.css" />

<link rel="stylesheet" 
media="only screen and (min-width: 533px) and (max-width:1024px)"  href="tablet.css" type="text/css" /> 

<link rel="stylesheet" media="only screen and (max-width:360px)" href="phone.css" type="text/css" />


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


  
  
  <img class="header" src="normal2.png" style="float:left;"  />
  
  


  
    


<div class="sinistra"> <!-- inizio colonna sinistra -->
    
  
  
  	<div class="domanda"> <!-- inizio box domanda -->
  		<h1>La tua domanda</h1>
       <p>Se hai un dubbio sul testo, se un esercizio ti risulta difficoltoso puoi inserire qui la tua domanda seguita dalla tua mail.<br />
        Risponderemo direttamente alla tua mail</p>
        <form action="" method="post">
   		<input type="richiesta" name="richiesta"   placeholder="inserisci la tua richiesta, seguita dalla tua mail"/> 
        <p style="color:#fff !important;">Per maggiori informazioni sulla privacy clicca <a href="http://www.area51editore.com/privacy" target="_blank" >qui.</a></p>
        <input type="submit" name="submit" value="invia" />
        
        <?php
		
		$destinatario='progettofeb@gmail.com';
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
  	</div> <!-- fine box domanda -->
    
  <div class="sidebar1"> <!-- inizio box video + faq -->
  
 
  
 		<div class="video"> <!-- inizio box video -->
  
  		<h1 style="text-align:center !important; color:#fff !important;">VIDEO</h1>
        
         
  
  		<iframe   src="//www.youtube.com/embed/5E1NTRCbg2I" frameborder="0" allowfullscreen></iframe>
  
 		 </div> <!-- fine box video -->
         
          	
    	<h1 style="text-align:center;">F.A.Q.</h1>
        <p style="padding-left: 20px !important; padding-right: 20px !important;">Tutte le domande pi&ugrave frequenti fatte dai lettori sono raccolte in questo spazio. Ti invitiamo a consultarle: sono uno strumento prezioso e potresti accorgerti che c&rsquo;&egrave; gi&agrave; la risposta alla tua  domanda.</p>
        
        <div class="fa	q" > <!-- inizio box faq -->
        <ul >
        
        <li>
    		<h4>1. Non riesco a visualizzare, cosa devo fare?</h4>
            
       		<p>Durante il corso esercizi specifici contribuiscono a migliorare le tue capacit&agrave; 
			di visualizzazione. &Egrave; importante per&ograve; che ti renda conto di una cosa: non 
			c&rsquo;&egrave; un modo perfetto per visualizzare. E anche se non ti sembra di riuscire a 
			visualizzare, in realt&agrave; lo stai facendo. Per questo non abbiamo inserito immagini 
			per gli esercizi di visualizzazione. Il tuo sistema &egrave perfettamente &quot;customizzato&quot; 
			su te stesso, sa esattamente ci&ograve; di cui tu hai bisogno, e tu sei sempre la misura 
			di te stesso. Se non sei convinto di riuscire a visualizzare, immagina di riuscire a 
			farlo. Se proprio ti sembra di non riuscire neppure a immaginare, non importa: 
			pensa a ci&ograve; che vuoi visualizzare.</p>
        </li>
        <li>
        	<h4>2. Come posso essere sicuro che le affermazioni positive si sono effettivamente 
				impresse nel subconscio?</h4>
                
        	<p>Questo tipo di esercizio al 99% funziona con un&rsquo;unica esecuzione. Per avere la 
			certezza (ricorda che il dubbio &egrave; sempre conscio), soprattutto nella fase iniziale 
			del percorso, puoi ripeterlo una seconda volta e una terza. Oltre una terza volta 
			il tuo subconscio ha sicuramente impresso in s&eacute; l&rsquo;affermazione.</p>
        </li>
    
      </ul>
      <br /><br />
      <h4>Continua a leggere...<h4>
        
  </div> <!-- fine box faq -->
  
  </div><!-- end .sidebar1 -->
  </div> <!--end sinistra -->
  
  
  
 <!-- <div class="contenuto_principale"> <!--inizio del contenuto meeting+offerte -->
  
  <div class="content">
  
  <div class="meeting">
    <h1>AREA MEETING</h1>
    
    <iframe  src="//www.youtube.com/embed/E4QUIa34_BA" frameborder="0" allowfullscreen></iframe>
    <br /><br /><br /><br />
    <p>Bentrovato!
In questo ambiente hai a disposizione diversi strumenti utili alla lettura dell&rsquo;ebook e alla messa in pratica degli esercizi. Puoi decidere di utilizzarli tutti in libert&agrave;.</p>
<p>Puoi scaricare audio e video di supporto agli esercizi dell&rsquo;ebook.</p>
<p>Puoi accedere alle promozioni pensate per te, su altri titoli simili in ebook e audiolibro.</p>
<p>Puoi fare domande sull&rsquo;ebook alle quali risponderemo direttamente alla tua mail.</p>
<p>Puoi consultare le FAQ, le domande pi&ugrave; frequenti fatte dai lettori.</p>
<p>Puoi prenotarti ai meeting con altri lettori e la redazione di <strong><b>Area51 Publishing</b></strong> per confrontarti sull&rsquo;ebook.</p>


    <br /><br /><br /><br />
    
 <div class="wrap"><!-- inizio "workshop" -->
  <div class="workshop">
  
   <h2>Meeting di Area51</h2>
    <br />
   
   <div class="abstract">
  		<h1>Prossimi meeting</h1>
   
   
   <ul class="prodotti">
								
          <li class="product">
			<a href="#" title="Meeting 1">
            
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
			<a href="#" title="Meeting 2">
            
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
   
    <h3>Compilando tutti i campi sottostanti puoi iscriverti al prossimo meeting.</h3><br/>
   
    <form id='myform' name='form1' method='post' action=''>
    
   
      <span id='sprytextfield1'>
        <label for='nome'>Nome</label>
        <br /><br />
        <input type='text' name='nome' id='nome' placeholder='Inserisci il nome' onkeypress="return handleEnter(this, event)" />
        <span class='textfieldRequiredMsg'>Devi inserire il nome</span></span><br />
        <br /><br />
        
        
    		<span id='sprytextfield4'>
		    <label for='cognome'>Cognome</label>
            <br /><br />
		    <input type='text' name='cognome' id='cognome'  placeholder='Inserisci il cognome' onkeypress="return handleEnter(this, event)"/>
		    <span class='textfieldRequiredMsg'>Devi inserire il cognome</span></span><br />
			<br /><br />
            
              <span id='sprytextfield2'>
           <label for='mail'>Indirizzo email</label>
           <br /><br />
           <input type='text' name='mail' id='mail'   placeholder='Inserisci email' onkeypress="return handleEnter(this, event)" />
           <span class='textfieldRequiredMsg'>Devi inserire la mail</span></span><br />
		   <br />
           <p style="color:color: #1680B8 !important; font-size:10px !important;">Per maggiori informazioni sulla privacy clicca <a href=	"http://www.area51editore.com/privacy" target="_blank" >qui.</a></p>
            
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
		
		
		
		$destinatario="progettofeb@gmail.com";
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
    
  <!--  </div> fine del contenuto meeting+offerte+community -->
    
    
  <div class="sidebar2">
  
  <div class="domanda" >
  <h1>Accedi ai contenuti<h1>
   <p style="font-size: 20px !important;" >Da <a href="contenuti.php" style="cursor:pointer !important;">qui</a> potrai scaricare i contenuti audio e video relativi all&rsquo;ebook.</p>
   <p style="font-size: 20px !important;">Se hai un tablet o uno smartphone assicurati di avere un&rsquo;applicazione per decomprimere i file e spazio sufficiente.</p>
   
  </div>
  
   <div class="offerte">
        <h1>OFFERTE</h1>
         
        </div>
        
        <!-- end .sidebar2 --></div>
          
        
        
        
  
        
        
 
    
       
    
    
    
 
  <!-- end .container --></div>
  
<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
</body>
</html>