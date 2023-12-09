function getColor() {

    // Wartości
    var H = document.getElementById('input').value;
    var S = [100, 80, 60, 40, 20];
    var L = 50

    for (var i = 1; i <= 5; i++) {
        document.getElementById('cell' + i).style.backgroundColor = 'hsl(' + H + ', ' + S[i - 1] + '%, ' + L + '%' + ')';
    }
    
}

getColor();

