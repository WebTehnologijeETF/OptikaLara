<?php 
 
ini_set("SMTP","webmail.etf.unsa.ba");
ini_set("smtp_port","25");
ini_set('sendmail_from', 'lbesic1@etf.unsa.ba');
 $dodatneopcije="From:"."lbesic1@etf.unsa.ba"."\r\n";
 $dodatneopcije.="CC:"."smuminovic2@etf.unsa.ba"."\r\n";
 $dodatneopcije.="Content-Type:text/plain;\r\n charset=utf-8";
 $primaoc='lbesic11@etf.unsa.ba';
 $tema='Obraćanje';
 $poruka="Ola-la";
 mail($primaoc,$tema,$poruka,'From:lbesic1@etf.unsa.ba'.'\r\n'.'CC:lbesic1@etf.unsa.ba');
 echo "Zahvaljujemo što nas kontaktirali.";
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
