<?php
     $veza = new PDO("mysql:dbname=optikalara;host=localhost;charset=utf8", "root", "");
     $veza->exec("set names utf8");
     $rezultat = $veza->query("select id, naslov, tekst, UNIX_TIMESTAMP(datumivrijeme) vrijeme, autor, slika from novost order by datumivrijeme desc");
     $rezultat_kom = $veza->query("select id, email, tekst, UNIX_TIMESTAMP(datumivrijeme) vrijeme, autor, novost from komentar");
     
     if (!$rezultat) 
     {
          $greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();
     }

     echo 
         "<h1 id=naslovi>NOVOSTI</h1>";

     foreach ($rezultat as $novost) 
     {
         $broj_kom = $veza->query("select count(*) from komentar where novost=".$novost['id'].";");
         
         if (!$broj_kom) 
         {
              $greska = $veza->errorInfo();
              print "SQL greška: " . $greska[2];
              exit();
         }
         $br = $broj_kom->fetchColumn();
         echo 
         "<div id=novosti>",
         "<h3>" .$novost['naslov']. "</h3>",
         "<p class=datum1>" .$novost['autor']. ",&nbsp;&nbsp;" .date("d.m.Y. (h:i)", $novost['vrijeme']). "</p>",
         "<img src=".$novost['slika']." alt=novost1_slika height=250 width=250 style=margin-left:30px>",
         "<p> <br>" .$novost['tekst']. "<br> <br> <br>", 
		 "<a href=komentari.php?novost_id=".$novost['id']." title=komentari style=margin-left:300px class=link>Komentari(".$br.")</a>", 
         "</p>",
         "</div><br><br>";
     }
    ?>
