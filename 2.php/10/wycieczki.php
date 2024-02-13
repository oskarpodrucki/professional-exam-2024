<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki i urlopy</title>
    <link rel="stylesheet" href="styl3.css">
</head>

<body>

    <div id="baner">
        <h1>BIURO PODRÓŻY</h1>
    </div>


    <div id="lewy">
        <h2>KONTAKT</h2>
        <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
        <p>555666777</p>
    </div>

    <div id="srodkowy">
        <h2>Galeria</h2>

        <?php

        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'egzamin3';

        $conn = mysqli_connect($host, $user, $password, $database);

        $sql = "SELECT `nazwaPliku`, `podpis` FROM `zdjecia` ORDER BY podpis;";
        $results = mysqli_query($conn, $sql);

        if (mysqli_num_rows($results)) {
            while ($row = mysqli_fetch_assoc($results)) {
                echo "<img src='" . $row['nazwaPliku'] . "' alt='" . $row['podpis'] . "'>";
            }
        }

        mysqli_close($conn);

        ?>
    </div>

    <div id="prawy">
        <h2>PROMOCJE</h2>

        <table>
            <tr>
                <td>Jesień</td>
                <td>5%</td>
            </tr>
            <tr>
                <td>Grupa 4+</td>
                <td>10%</td>
            </tr>
            <tr>
                <td>Grupa 10+</td>
                <td>15%</td>
            </tr>
        </table>
    </div>


    <div id="dane">
        <h2>LISTA WYCIECZEK</h2>

        <?php

        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'egzamin3';

        $conn = mysqli_connect($host, $user, $password, $database);

        $sql = "SELECT `id`, `dataWyjazdu`, `cel`, `cena` FROM `wycieczki` WHERE `dostepna` = TRUE;";
        $results = mysqli_query($conn, $sql);

        if (mysqli_num_rows($results)) {
            while ($row = mysqli_fetch_assoc($results)) {
                echo $row['id'] . ". " . $row['dataWyjazdu'] . ", " . $row['cel'] . ", cena: " . $row['cena'] . ", <br>";
            }
        }

        mysqli_close($conn);

        ?>
    </div>


    <div id="stopka">
        <p>Stronę wykonał: Oskar Podrucki</p>
    </div>

</body>

</html>