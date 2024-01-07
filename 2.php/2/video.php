<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video On Demand</title>
    <link rel="stylesheet" href="styl3.css">
</head>

<body>

    <div id="baner1">
        <h1>Internetowa wypożyczalnia filmów</h1>
    </div>

    <div id="baner2">
        <table>
            <tr>
                <th>Kryminały</th>
                <th>Horror</th>
                <th>Przygody</th>
            </tr>
            <tr>
                <th>20</th>
                <th>30</th>
                <th>20</th>
            </tr>
        </table>
    </div>


    <div id="lista1">

        <h3>Polecamy</h3>

        <?php

        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "dane3";

        $conn = mysqli_connect($host, $user, $password, $database);

        if (!$conn) {
            die("Nieudane połączenie z bazą: " . mysqli_connect_error());
        }

        $sql = "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id IN(18, 22, 23, 25);";
        $result = $conn->query(($sql));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='film'>";
                echo "<h4>" . $row['id'] . ". " . $row['nazwa'] . "</h4>";
                echo "<img src='" . $row['zdjecie'] . "' alt='film'>";
                echo "<p>" . $row['opis'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "0 resultatów";
        }

        $conn->close();


        ?>

    </div>

    <div id="lista2">

        <h3>Filmy fantastyczne</h3>

        <?php

        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "dane3";

        $conn = mysqli_connect($host, $user, $password, $database);

        if (!$conn) {
            die("Nieudane połączenie z bazą: " . mysqli_connect_error());
        }

        $sql = "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE `Rodzaje_id` = 12;";
        $result = $conn->query(($sql));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='film'>";
                echo "<h4>" . $row['id'] . ". " . $row['nazwa'] . "</h4>";
                echo "<img src='" . $row['zdjecie'] . "' alt='film'>";
                echo "<p>" . $row['opis'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "0 resultatów";
        }

        $conn->close();


        ?>

    </div>


    <div id="stopka">
        <form action="video.php" method="POST">
            Usuń film nr.:<input type="number" name=id> <input type=submit>
        </form>
        Stronę wykonał: <a href="mailto:ja@poczta.com">Oskar Podrucki</a>

        <?php

        if (isset($_POST['id'])) {

            $id = $_POST['id'];

            $host = "localhost";
            $user = "root";
            $password = "";
            $database = "dane3";

            $conn = mysqli_connect($host, $user, $password, $database);

            if (!$conn) {
                die("Nieudane połączenie z bazą: " . mysqli_connect_error());
            }

            $sql = "DELETE FROM `produkty` WHERE id = " . $id . ";";
            $conn->query(($sql));

            $conn->close();

            // Poczekaj 5 sekund
            sleep(2);

            // Przekieruj na tę samą stronę
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        }



        ?>
    </div>

</body>

</html>