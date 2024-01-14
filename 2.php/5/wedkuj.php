<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>

<body>


    <div id="baner">
        <h1>Portal dla wędkarzy</h1>
    </div>

    <div id="prawy">
        <img src="ryba1.jpg" alt="Sum">

        <br>

        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>

    <div id="lewy1">
        <h3>Ryby zamieszkujące rzeki</h3>

        <ol>
            <?php
            $serwer = "localhost";
            $uzytkownik = "root";
            $haslo = "";
            $nazwa_bazy = "wedkowanie";

            $id_polaczenia = mysqli_connect($serwer, $uzytkownik, $haslo, $nazwa_bazy);

            if (!$id_polaczenia) {
                die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
            }

            $zapytanie = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM `ryby` JOIN lowisko ON ryby.id = lowisko.Ryby_id WHERE lowisko.rodzaj = 3;";
            $wynik_zapytania = mysqli_query($id_polaczenia, $zapytanie);

            while ($wiersz = mysqli_fetch_array($wynik_zapytania)) {
                echo "<li>{$wiersz['nazwa']} pływa w rzece {$wiersz['akwen']}, {$wiersz['wojewodztwo']}</li>";
            }

            mysqli_close($id_polaczenia);
            ?>
        </ol>

    </div>

    <div id="lewy2">
        <h3>Ryby drapieżne naszych wód</h3>

        <table>
            <tr>
                <th>L.p.</th>
                <th>Gatunek</th>
                <th>Występowanie</th>
            </tr>

            <?php
            $serwer = "localhost";
            $uzytkownik = "root";
            $haslo = "";
            $nazwa_bazy = "wedkowanie";

            $id_polaczenia = mysqli_connect($serwer, $uzytkownik, $haslo, $nazwa_bazy);

            if (!$id_polaczenia) {
                die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
            }

            $zapytanie = "SELECT `id`, `nazwa`, `wystepowanie` FROM `ryby` WHERE `styl_zycia` = 1;";
            $wynik_zapytania = mysqli_query($id_polaczenia, $zapytanie);

            echo "<table border='1'>";
            while ($wiersz = mysqli_fetch_assoc($wynik_zapytania)) {
                echo "<tr>";
                foreach ($wiersz as $wartosc) {
                    echo "<td>{$wartosc}</td>";
                }
                echo "</tr>";
            }
            echo "</table>";

            mysqli_close($id_polaczenia);
            ?>
        </table>
    </div>


    <div id="stopka">
        <p>Stronę wykonał: Oskar Podrucki</p>
    </div>

</body>

</html>