<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Piłka nożna</title>
    <link rel="stylesheet" href="styl2.css">
</head>

<body>
    <div id="baner">
        <h3>Reprezentacja polski w piłce nożnej</h3>
        <img src="obraz1.jpg" alt="reprezentacja">
    </div>


    <div id="lewy">
        <form action="liga.php" method="POST">
            <Select name=pozycjaid>
                <option value="1">Bramkarze</option>
                <option value="2">Obrońcy</option>
                <option value="3">Pomocnicy</option>
                <option value="4">Napastnicy</option>
            </Select>
            <input type="submit" value="Zobacz">
        </form>

        <img src="zad2.png" alt="piłka">
        <p>Autor: Oskar Podrucki</p>
    </div>

    <div id="prawy">
        <ol>
            <?php

            if (isset($_POST['pozycjaid'])) {

                $pozycjaid = $_POST['pozycjaid'];

                $host = 'localhost';
                $user = 'root';
                $password = '';
                $database = 'egzamin';

                $conn = mysqli_connect($host, $user, $password, $database);

                if (!$conn) {
                    die("Nie połączono z bazą: " . mysqli_connect_error());
                }


                $sql = "SELECT `imie`, `nazwisko` FROM `zawodnik` WHERE `pozycja_id`=$pozycjaid;";
                $results = mysqli_query($conn, $sql);

                if (mysqli_num_rows($results) > 0) {
                    while ($row = mysqli_fetch_assoc($results)) {
                        echo "<li>" . $row['imie'] . " " . $row['nazwisko'] . "</li>";
                    }
                }

                mysqli_close($conn);
            } else {
                echo "";
            }



            ?>
        </ol>
    </div>


    <div id="glowny">
        <h3>Liga mistrzów</h3>
    </div>


    <div id="liga">
        <?php

        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'egzamin';

        $conn = mysqli_connect($host, $user, $password, $database);

        if (!$conn) {
            die("Nie połączono z bazą: " . mysqli_connect_error());
        }


        $sql = "SELECT `zespol`, `punkty`, `grupa` FROM `liga` ORDER BY punkty DESC;";
        $results = mysqli_query($conn, $sql);

        if (mysqli_num_rows($results) > 0) {
            while ($row = mysqli_fetch_assoc($results)) {
                echo "<div class=team-info>";
                echo "<h2>" . $row['zespol'] . "</h2>";
                echo "<p>" . $row['punkty'] . "</p>";
                echo "<p>grupa: " . $row['grupa'] . "</p>";
                echo "</div>";
            }
        }

        mysqli_close($conn);

        ?>
    </div>
</body>

</html>