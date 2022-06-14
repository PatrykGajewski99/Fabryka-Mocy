function zapisz()
{
    var item = {};
    item.imie = document.getElementById('imie').value;
    item.nazwisko = document.getElementById('nazwisko').value;
    item.telefon = document.getElementById('telefon').value;
    item.email = document.getElementById('email').value;
    item.wiadomosc = document.getElementById('wiadomosc').value;
var sprawdzam1=document.getElementById('imie');
var sprawdzam2=document.getElementById('nazwisko');
var sprawdzam3=document.getElementById('telefon');
var sprawdzam4=document.getElementById('email');
var sprawdzam5=document.getElementById('wiadomosc');
const czy1=sprawdzam1.checkValidity();
const czy2=sprawdzam2.checkValidity();
const czy3=sprawdzam3.checkValidity();
const czy4=sprawdzam4.checkValidity();
const czy5=sprawdzam5.checkValidity();
    var lista = JSON.parse(localStorage.getItem('lista'));
    if (lista == null)
        lista =[];
if (czy1==true && czy2 == true && czy3==true && czy4==true && czy5==true)
    	{
lista.push(item);
    localStorage.setItem('lista', JSON.stringify(lista));
}
}
function wyczysc() {
	localStorage.clear();
wyswietl();
}
function wyswietl()
{
     var lista = JSON.parse(localStorage.getItem('lista'));
    var el = document.getElementById('list');
    var str = "<h4>Dane zawarte w liscie</h4>";
    if (lista == null)
        el.innerHTML = str + "<p>Pusty lista</p>";
    else {
        for (i = 0; i < lista.length; i++) {
            str += "<button class='edycja' onclick='EdytujZadanie(" + i + ")' >Edit </button>";
            str += " " + lista[i].imie + " " + lista[i].nazwisko + " " + lista[i].telefon + " " + lista[i].email + " " + lista[i].wiadomosc + "<br />";
        }
        el.innerHTML = str;
    }
}
function EdytujZadanie(i) {
    var lista = JSON.parse(localStorage.getItem('lista'));
    if (confirm("Edytowac zadanie?"))
    {
        document.getElementById('imie').value = lista[i].imie;
        document.getElementById('nazwisko').value = lista[i].nazwisko;
        document.getElementById('telefon').value = lista[i].telefon;
        document.getElementById('email').value = lista[i].email;
        document.getElementById('wiadomosc').value = lista[i].wiadomosc;
        lista.splice(i, 1);
    } 
    localStorage.setItem('lista', JSON.stringify(lista)); 
  
}