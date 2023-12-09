function showValue() {

    var dlugoscWlosow = document.querySelector('input[name="promocja"]:checked').value;

    var cena;
    switch (dlugoscWlosow) {
        case "krotkie":
            cena = 25;
            break;
        case "srednie":
            cena = 30;
            break;
        case "poldlugie":
            cena = 40;
            break;
        case "dlugie":
            cena = 50;
            break;
        default:
            cena = 0;
    }

    var wynikElement = document.getElementById('wynik');
    wynikElement.textContent = "Cena strzyżenia: " + cena + " zł";
}