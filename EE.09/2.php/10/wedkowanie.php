<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klub wędkowania</title>
    <link rel="stylesheet" href="styl2.css">
</head>

<body>

    <div id="baner">
        <h2>Wędkuj z nami</h2>
    </div>


    <div id="lewy">
        <img src="ryba2.jpg" alt="Szczupak">
    </div>

    <div id="prawy">

        <h3>Ryby spokojnego żeru (białe)</h3>
        <?php

        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'wedkowanie';

        $conn = mysqli_connect($host, $user, $password, $database);

        if (!$conn) {
            die('błąd połączenia z bazą');
        }


        $sql = 'SELECT `id`, `nazwa`, `wystepowanie` FROM `ryby` WHERE `styl_zycia` = 2;';
        $results = mysqli_query($conn, $sql);

        if (mysqli_num_rows($results) > 0) {
            while ($row = mysqli_fetch_assoc($results)) {
                echo $row['id'] . ". " . $row['nazwa'] . ", występuje w: " . $row['wystepowanie'] . ", <br>";
            }
        }

        mysqli_close($conn);

        ?>


        <ol>
            <li>
                <a href="https://wedkuje.pl/" target="_blank">Odwiedź także</a>
            </li>
            <li>
                <a href="http://www.pzw.org.pl/" target="_blank">Polski Związek Wędkarski</a>
            </li>
        </ol>


    </div>


    <div id="stopka">
        <p>Stronę wykonał: Oskar Podrucki</p>
    </div>

</body>

</html>

<!-- link do zasad oceniania:
https://egzamin-ee09.blogspot.com/2020/03/zasady-oceniania-arkusza-ee09-01-2001-sg.html -->