<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
</body>

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


?>
</html>