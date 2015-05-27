<?php
 
    $veza = new PDO("mysql:dbname=optikalara;host=localhost;charset=utf8", "root", "");
    $veza->exec("set names utf8");
    $emailReg = '/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/';  
    $emailOK = 0;
    $imeOK = 0;
    $porukaOK = 0;
    if (isset($_POST['ime']) && preg_replace('/\s+/','', $_POST['ime']) != '')
        $imeOK = 1;
    if (isset($_POST['poruka']) && preg_replace('/\s+/','', $_POST['poruka']) != '')
        $porukaOK = 1;
    if (preg_match($emailReg, $_POST['mail']) && isset($_POST['mail']) && preg_replace('/\s+/','', $_POST['mail']) != '')
        $emailOK = 1;
    if (empty($_POST['mail']))
        $emailOK = 1;
    if ($imeOK == 1 && $emailOK == 1 && $porukaOK == 1)
    {
        $upis = $veza->prepare("INSERT INTO komentar (id, datumivrijeme, autor, email, tekst, novost) VALUES ('NULL', NOW(), :ime, :mail, :poruka, :id)");
        $upis->bindParam(':ime', $_POST['ime'], PDO::PARAM_STR, 100);
	    $upis->bindParam(':mail', $_POST['mail'], PDO::PARAM_STR, 100);
	    $upis->bindParam(':poruka', $_POST['poruka'], PDO::PARAM_STR, 100);
        $upis->bindParam(':id', $_POST['id'], PDO::PARAM_STR, 100);
        $id=$_POST['id'];
        if($upis->execute()) 
        {
            $poruka = "Ostavili ste komentar na željenu novost!";
		    echo "<script type='text/javascript'>alert('$poruka');</script>";
            include 'index.php';
        }
        if (isset($_POST['mail']))
        {
            echo "<a href='mailto:" . $_POST['mail'] . "?body=" . $_POST['poruka'] . "'>";
        }
    }
    else
    {
        $poruka = "Polja za ime i poruku ne smiju biti prazna! Ukoliko ste unijeli e-mail, on mora biti ispravnog formata (example@hotmail.com)";
		echo "<script type='text/javascript'>alert('$poruka');</script>";
        include 'index.php';
    }
    

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
