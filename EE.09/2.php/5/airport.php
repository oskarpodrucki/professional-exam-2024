<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css">
</head>

<body>

    <div id="baner1">
        <h2>Odloty z lotniska</h2>
    </div>

    <div id="baner2">
        <img src="zad6.png" alt="logotyp">
    </div>


    <div id="main">
        <h4>Tabela odlotów</h4>
        <table>
            <tr>
                <th>lp.</th>
                <th>numer rejsu</th>
                <th>czas</th>
                <th>kierunek</th>
                <th>status</th>
            </tr>

            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "egzamin";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT `id`, `nr_rejsu`, `czas`, `kierunek`, `status_lotu` FROM `odloty` ORDER BY czas DESC;";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["nr_rejsu"] . "</td>
                <td>" . $row["czas"] . "</td>
                <td>" . $row["kierunek"] . "</td>
                <td>" . $row["status_lotu"] . "</td>
              </tr>";
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>

        </table>
    </div>



    <div id="stopka1">
        <a href="kw1.jpg" target="_blank">Pobierz obraz</a>
    </div>

    <div id="stopka2">
        
        <?php

        if (!isset($_COOKIE["ostatnie_wejscie"])) {

            setcookie("ostatnie_wejscie", date("Y-m-d H:i:s"), time() + 3600);

            echo "<p style='font-style: italic;'>Dzień dobry! Sprawdź regulamin naszej strony</p>";
        } else {

            $czas_ostatniego_wejscia = $_COOKIE["ostatnie_wejscie"];

            echo "<p style='font-weight: bold;'>Miło nam, że nas znowu odwiedziłeś</p>";

            setcookie("ostatnie_wejscie", date("Y-m-d H:i:s"), time() + 3600);
        }
        ?>


    </div>

    <div id="stopka3">
        Autor: Oskar Podrucki
    </div>
</body>

</html>