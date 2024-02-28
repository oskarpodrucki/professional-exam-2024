<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki krajoznawcze</title>
    <link rel="stylesheet" href="styl4.css">
</head>

<body>

    <div id="baner">
        <h1>WITAMY W BIURZE PODRÓŻY</h1>
    </div>


    <div id="dane">
        <h3>ARCHIWUM WYCIECZEK</h3>

        <?php

        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'egzamin4';

        $conn = mysqli_connect($host, $user, $password, $database);

        $sql = 'SELECT `id`, `cel`, `cena` FROM `wycieczki` WHERE `dostepna` = FALSE;';
        $results = mysqli_query($conn, $sql);

        if (mysqli_num_rows($results) > 0) {
            while ($row = mysqli_fetch_assoc($results)) {
                echo $row['id'] . ". " . $row['cel'] . ", cena: " . $row['cena'] . "<br>";
            }
        }

        mysqli_close($conn)

        ?>

    </div>


    <div id="lewy">
        <h3>NAJTANIEJ...</h3>

        <table>
            <tr>
                <th>Włochy</th>
                <th>od 1200 zł</th>
            </tr>
            <tr>
                <th>Francja</th>
                <th>od 1200 zł</th>
            </tr>
            <tr>
                <th>Hiszpania</th>
                <th>od 1400 zł</th>
            </tr>
        </table>
    </div>

    <div id="srodkowy">
        <h3>TU BYLIŚMY</h3>

        <?php

        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'egzamin4';

        $conn = mysqli_connect($host, $user, $password, $database);

        $sql = 'SELECT `nazwaPliku`, `podpis` FROM `zdjecia` ORDER BY podpis DESC;';
        $results = mysqli_query($conn, $sql);

        if (mysqli_num_rows($results) > 0) {
            while ($row = mysqli_fetch_assoc($results)) {
                echo "<img src=" . $row['nazwaPliku'] . " alt=" . $row['podpis'] . ">";
            }
        }

        mysqli_close($conn)

        ?>
    </div>

    <div id="prawy">
        <h3>SKONTAKTUJ SIĘ</h3>

        <a href="mailto:wycieczki@wycieczki.ph">napisz do nas</a>

        <p>telefon: 555666777</p>
    </div>


    <div id="stopka">
        <p>Stronę wykonał: Oskar Podrucki</p>
    </div>

</body>

</html>