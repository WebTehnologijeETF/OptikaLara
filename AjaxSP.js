function otvori(link) {
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("desni").innerHTML = ajax.responseText 
        }
    }
	ajax.open("GET", link, true);
	ajax.send();
}