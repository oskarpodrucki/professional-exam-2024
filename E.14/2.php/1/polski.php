<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szkoła Ponadgimnazjalna</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>

    <div id="baner">
        <h1>Oceny uczniów: język polski</h1>
    </div>


    <div id="lewy">
        <h2>Lista uczniów</h2>
        <ol>
            <?php

            $host = 'localhost';
            $user = 'root';
            $password = '';
            $database = 'szkola';

            $conn = mysqli_connect($host, $user, $password, $database);

            $sql = "SELECT `imie`, `nazwisko` FROM `uczen`;";
            $results = mysqli_query($conn, $sql);

            if (mysqli_num_rows($results) > 0) {
                while ($row = mysqli_fetch_assoc($results)) {
                    echo "<li>" . $row['imie'] . " " . $row['nazwisko'] . "</li>";
                }
            }

            mysqli_close($conn)

            ?>
        </ol>
    </div>

    <div id="prawy">
        <h2>Uczeń:
            <?php

            $host = 'localhost';
            $user = 'root';
            $password = '';
            $database = 'szkola';

            $conn = mysqli_connect($host, $user, $password, $database);

            $sql = "SELECT `imie`, `nazwisko` FROM `uczen` WHERE id = 2;";
            $results = mysqli_query($conn, $sql);

            if (mysqli_num_rows($results) > 0) {
                while ($row = mysqli_fetch_assoc($results)) {
                    echo $row['imie'] . " " . $row['nazwisko'];
                }
            }

            mysqli_close($conn)

            ?>
        </h2>
        <p>Średnia ocen z języka polskiego:
            <?php

            $host = 'localhost';
            $user = 'root';
            $password = '';
            $database = 'szkola';

            $conn = mysqli_connect($host, $user, $password, $database);

            $sql = "SELECT AVG(`ocena`) AS srednia FROM `ocena` WHERE `przedmiot_id` = 1 AND `uczen_id` = 2;";
            $results = mysqli_query($conn, $sql);

            if (mysqli_num_rows($results) > 0) {
                while ($row = mysqli_fetch_assoc($results)) {
                    echo $row['srednia'];
                }
            }

            mysqli_close($conn)

            ?>
        </p>
    </div>


    <div id="stopka">
        <h2>Zespół Szkół Ponadgimnazjalnych</h2>
        <p>Stronę opracował: Oskar Podrucki</p>
    </div>


</body>

</html>