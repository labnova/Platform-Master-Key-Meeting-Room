<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Index</title>
<link rel="stylesheet" href="index_style.css" type="text/css" />
</head>
<body>

 <?php  
session_start();  
$password="12345";    /* inserire su questa riga la password voluta */ 
if (isset($_SESSION['login'])) {  
    if (isset($_POST['logout'])) { 
        unset($_SESSION['login']); 
        $messaggio = "Logout effettuato con successo! Arrivederci!"; 
    } else { 
        header("Location: piattaforma.php");  
    }  
} else { 
    if (isset($_POST['password'])) { 
        if ($_POST['password'] == $password) { 
            $_SESSION['login'] = "verificata"; 
            header("Location: piattaforma.php"); 
        } else { 
            $messaggio = "Errore: password non corretta!"; 
        } 
    }  
} 
?> 




  
    <h1 style="text-align: center;">MASTER KEY MEETING ROOM</h1>
    
    <form class="form-1" name="login" action="index.php" method="post">
    
    <p class="field">
    	<input type="password" name="password"  placeholder="INSERISCI IL CODICE"/> 
        
   </p>
    
    <p class="submit">
    	<button type="submit" name="submit" ><i class="icon-arrow-right icon-large"></i></button>
    </p>
    
     <?php  
	
	if(isset($messaggio)) { 
    echo $messaggio; 
    unset($messaggio); 
}   
?> 
    </form>
    
   

    
 
</body>
</html>