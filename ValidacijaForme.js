function validacija() {
    var x = document.getElementById("ime");
    var y = document.getElementById("naslov");
    var z = document.getElementById("poruka");
    var e = document.getElementById("email");
    var ime = document.getElementById("ime-warning");
    var naslov = document.getElementById("naslov-warning");
    var poruka = document.getElementById("poruka-warning");
    var email = document.getElementById("email-warning");
    var r = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    var a = document.getElementById("artikal");
    var artikal = document.getElementById("artikal-warning");
    var razlog = document.getElementById("razlog");
    if(a.value == "" && razlog.value == "reklamacija")
	{
		artikal.style.visibility = "visible";
	}
	else
	{
		artikal.style.visibility = "hidden";
	}
    if (!r.test(e.value))
    {
        email.style.visibility = "visible";
    }   
    else
    {
        email.style.visibility = "hidden";
    } 
    
    if(x.value == "")
	{
		ime.style.visibility = "visible";
	}
	else
	{
		ime.style.visibility = "hidden";
	}

    if(y.value == "")
	{
		naslov.style.visibility = "visible";
	}
	else
	{
		naslov.style.visibility = "hidden";
	}

    if(z.value == "")
	{
		poruka.style.visibility = "visible";
		return false;
	}
	else
	{
		poruka.style.visibility = "hidden";
		return true;
	}
}

function prikaziTekstIme() {
    document.getElementById("ime-tekst").style.visibility = "visible";
}

function sakrijTekstIme() {
    document.getElementById("ime-tekst").style.visibility = "hidden";
}

function prikaziTekstNaslov() {
    document.getElementById("naslov-tekst").style.visibility = "visible";
}

function sakrijTekstNaslov() {
    document.getElementById("naslov-tekst").style.visibility = "hidden";
}

function prikaziTekstPoruka() {
    document.getElementById("poruka-tekst").style.visibility = "visible";
}

function sakrijTekstPoruka() {
    document.getElementById("poruka-tekst").style.visibility = "hidden";
}

function prikaziTekstEmail() {
    document.getElementById("email-tekst").style.visibility = "visible";
}

function sakrijTekstEmail() {
    document.getElementById("email-tekst").style.visibility = "hidden";
}

function prikaziTekstReklamacija() {
    document.getElementById("artikal-tekst").style.visibility = "visible";
}

function sakrijTekstReklamacija() {
    document.getElementById("artikal-tekst").style.visibility = "hidden";
}

function reklamacija(){
    var artikal1 = document.getElementById("label_artikal");
    var artikal2 = document.getElementById("artikal");
    var razlog = document.getElementById("razlog");
    if (razlog.value == "reklamacija")
    {
        artikal1.style.visibility = "visible";
        artikal2.style.visibility = "visible";
    }   
    else
    {
        artikal1.style.visibility = "hidden";
        artikal2.style.visibility = "hidden";
    } 
} 