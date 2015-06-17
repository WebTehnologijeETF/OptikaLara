<?php
     $novost_id=$_GET['novost_id'];
     $veza = new PDO("mysql:dbname=optikalara;host=localhost;charset=utf8", "root", "");
     $veza->exec("set names utf8");
     $rezultat_kom = $veza->query("select id, email, tekst, UNIX_TIMESTAMP(datumivrijeme) vrijeme, autor, novost from komentar order by datumivrijeme desc");
     $rezultat_nov = $veza->query("select id, naslov, tekst, UNIX_TIMESTAMP(datumivrijeme) vrijeme, autor, slika from novost where id='$novost_id' order by datumivrijeme desc");
     
      if (!$rezultat_kom) 
     {
          $greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();
     }
     if (!$rezultat_nov) 
     {
          $greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();
     }

     echo 
         "<h1 id=naslovi>NOVOSTI</h1>";
     
     foreach ($rezultat_nov as $novost) 
     {
          echo 
             "<div id=novosti>",
             "<h3>" .$novost['naslov']. "</h3>",
             "<p class=datum1>" .$novost['autor']. ",&nbsp;&nbsp;" .date("d.m.Y. (h:i)", $novost['vrijeme']). "</p>",
             "<img src=".$novost['slika']." alt=novost1_slika height=250 width=250 style=margin-left:30px>",
             "<p> <br>" .$novost['tekst']. "<br> <br> <br>", 
             "</p>",
             "</div><br><br>",
             "<h1 id=naslovi>Komentari</h1>";
         foreach ($rezultat_kom as $komentar)
         {
             if ($novost_id == $komentar['novost']){
             echo
             "<div id=komentari style=margin-left:-50px>",
             "<p class=datum1> Autor: " .$komentar['autor']. ",&nbsp;&nbsp;" .date("d.m.Y. (h:i)", $komentar['vrijeme']). 
              "<br>E-mail autora: " .$komentar['email'].
              "</p>",
             "</div>",
             "<div id=slike>",
             "<p>" .$komentar['tekst']. "<br> <br> <br>", 
             "</p></div>",
             "<br><br>";
             }
         }
        echo
             "<form style=margin-left:50px action=upisKomentara.php method=post id=slike> <br>
             <p style=margin-left:20px> Popunite polja ispod da bi ostavili komentar na novost. Obavezno unesite polja za ime i poruku! </p> 
             <input type=hidden name=id value=$novost_id> <br>
             <label> Ime: </label>
             <input type=text name=ime class=kontakt1> <br><br>
             <label> E-mail: </label>
             <input type=text name=mail class=kontakt1> <br><br>
		     <label> Poruka: </label>
		     <textarea placeholder=Ostavite poruku... style=margin-left:190px rows=10 cols=50 name=poruka id=poruka1>  </textarea> <br> <br>
		     <input class=Button value=Komentariši type=submit name=ok id=potvrdi1> <br><br><br>
		     </form>";
     }
                  
    ?>
