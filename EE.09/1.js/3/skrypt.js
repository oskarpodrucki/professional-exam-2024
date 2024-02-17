function obliczCene() {
	// Pobierz wszystkie checkboxy
	var checkboxy = document.querySelectorAll('#right2 input[type="checkbox"]');

	// Zdefiniuj cennik
	var cennik = {
		"Piling": 45,
		"Maska": 30,
		"Masaż twarzy": 20,
		"Regulacja brwi": 5,
	};

	// Oblicz łączną cenę
	var sumaCen = 0;
	for (var i = 0; i < checkboxy.length; i++) {
		if (checkboxy[i].checked) {
			sumaCen += cennik[checkboxy[i].nextSibling.nodeValue.trim()];
		}
	}

	// Wyświetl wynik
	var wynikElement = document.getElementById("wynik");
	wynikElement.innerHTML = "Cena zabiegów: " + sumaCen + " zł";
}
