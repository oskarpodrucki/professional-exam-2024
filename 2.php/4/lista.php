<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista przyjaciół</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>


    <div id="baner">
        <h1>Portal Społecznościowy - moje konto</h1>
    </div>


    <div id="glowny">

        <h2>Moje zainteresowania</h2>

        <ul>
            <li>muzyka</li>
            <li>film</li>
            <li>komputery</li>
        </ul>

        <h2>Moi znajomi</h2>

        <?php

        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "dane";

        $conn = mysqli_connect($host, $user, $password, $database);

        if (!$conn) {
            die(mysqli_connect_error());
        }

        $sql = "SELECT `imie`, `nazwisko`, `opis`, `zdjecie` FROM `osoby` WHERE Hobby_id IN(1,2,6);";
        $results = $conn->query(($sql));

        if ($results->num_rows > 0) {
            while ($row = $results->fetch_assoc()) {
                echo "<div id='foto'><img src='" . $row['zdjecie'] . "' alt='przyjaciel'></div>";
                echo "<div id='opis'><h3>" . $row['imie'] . " " . $row['nazwisko'] . "</h3><p>Ostatni wpis: " . $row['opis'] . "</p></div>";
                echo "<div id='hr'><hr></div>";
            }
        } else {
            echo mysqli_connect_error();
        }

        $conn->close();

        ?>

    </div>


    <div id="stopka1">
        Stronę wykonał: Oskar Podrucki
    </div>

    <div id="stopka1">
        <a href="mailto:ja@portal.pl">Napisz do mnie</a>
    </div>


</body>

</html>