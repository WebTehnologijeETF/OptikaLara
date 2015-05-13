<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="stil.css">
    </head>
    <body>
        <link rel="stylesheet" type="text/css" href="stil.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <h2>Provjerite da li ste ispravno popunili kontakt formu!</h2>
        <p class="tekst_formaOK">Podaci koje ste unijeli:</p>
        <table class="tabela2">
            <tr>
                <th class="cjenovnik" colspan="2">PODACI</th>
            </tr>
            <tr>
                <td class="sredina">Ime</td>
                <td class="cijene"><?php print $_REQUEST['ime']; ?></td> 
            </tr>
            <tr>
                <td class="sredina">Datum rođenja</td>
                <td class="cijene"><?php print $_REQUEST['datum']; ?></td> 
            </tr>
            <tr>
                <td class="sredina">E-mail</td>
                <td class="cijene"><?php print $_REQUEST['mail']; ?></td> 
            </tr>
            <tr>
                <td class="sredina">Razlog obraćanja</td>
                <td class="cijene"><?php print $_REQUEST['razlog']; ?></td> 
            </tr>
            <tr>
                <td class="sredina">Artikal</td>
                <td class="cijene"><?php print $_REQUEST['artikal']; ?></td> 
            </tr>
            <tr>
                <td class="sredina">Naslov</td>
                <td class="cijene"><?php print $_REQUEST['naslov']; ?></td> 
            </tr>
            <tr>
                <td class="sredina">Poruka</td>
                <td class="cijene"><?php print $_REQUEST['poruka']; ?></td> 
            </tr>
            <tr>
                <td colspan="2" class="cjenovnik"></td> 
            </tr>
            </table>

        <p class="tekst_formaOK">Da li ste sigurni da želite poslati ove podatke?</p>
        <form id="formica-mail" action="Mail.php" method="get">
        <input type="submit" value="Siguran/na sam" id="OK" name="uredu">
            </form>
        <br><br><br>
        <h2>KONTAKT FORMA</h2> <br>
        <form name="formica"> 
                    <!-- onsubmit="return validacija()"> -->
                    <label class="kontakt">*Ime i prezime: </label>
                    <input type="text" class="kontakt1" id="ime" name="ime" value="<?php print $_REQUEST['ime']; ?>">
                    <br><br>
                    <label class="kontakt">Datum rođenja: </label>
                    <input type="date" name="datum" class="kontakt1" name="datum" value="<?php print $_REQUEST['datum']; ?>"><br><br>
                    <label class="kontakt">*E-mail: </label>
                    <input type="email" name="mail" class="kontakt1" id="email" value="<?php print $_REQUEST['mail']; ?>">
                    <br><br>
              <!--      <label class="kontakt">Općina: </label>
                    <input type="text" class="kontakt1" id="opcina"><br><br>
                    <label class="kontakt">Mjesto: </label>
                    <input type="text" class="kontakt1" id="mjesto"><p id="greska"></p><br> -->
                    <label class="kontakt">Razlog obraćanja: </label>
                    <select name="razlog" class="kontakt1" id="razlog"> <!--onchange="reklamacija()" //koristi JavaScript pa zakomentarisano za potrebe 4.spirale -->
                        <option value="pohvala">Pohvala</option>
                        <option value="reklamacija">Reklamacija</option>
                        <option value="kritika">Kritika</option>
                        <option value="drugo">Drugo</option>
                     <?php          
                             print $_REQUEST['razlog']; 
                         ?> 
                    </select> <br><br>
                       <label class="kontakt" id="label_artikal">Artikal: </label> 
                    <input type="text" id="artikal" class="kontakt1" name="artikal" value="<?php print $_REQUEST['artikal']; ?>">
                    <br><br> 
                    <label class="kontakt">*Naslov: </label> 
                    <input type="text" id="naslov" class="kontakt1" name="naslov" value="<?php print $_REQUEST['naslov']; ?>">
                    <br><br>
                    <label class="kontakt">*Poruka: </label> <br>
                    <textarea rows="10" cols="50" id="poruka" name="poruka">
                         <?php          
                             if(isset($poruka))
                             {
                                 print $_REQUEST['poruka'];
                             }
                         ?> 
                    </textarea>
                    <br><br>
                    <input type="submit" name="OK" value="Potvrdi" id="potvrdi">
                    <input type="button" name="NOK" value="Poništi" id="ponisti">
            <br><br><br>
            </form>
    </body>
</html>
