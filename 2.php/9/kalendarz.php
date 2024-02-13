<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mój kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>

<body>


    <div id="baner1">
        <img src="logo1.png" alt="Mój kalendarz">
    </div>

    <div id="baner2">
        <h1>KALENDARZ</h1>

        <?php

        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'egzamin5';

        $conn = mysqli_connect($host, $user, $password, $database);

        if (!$conn) {
            die("błąd połączenia z bazą");
        }

        $sql = "SELECT `miesiac`, `rok` FROM `zadania` WHERE `dataZadania` = '2020-07-01';";
        $results = mysqli_query($conn, $sql);

        if (mysqli_num_rows($results) > 0) {
            while ($row = mysqli_fetch_assoc($results)) {
                echo "<h3>miesiąc: " . $row['miesiac'] . ", rok: " . $row['rok'] . "</h3>";
            }
        }

        mysqli_close($conn);

        ?>
    </div>


    <div id="glowny">

        <?php

        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'egzamin5';

        $conn = mysqli_connect($host, $user, $password, $database);

        if (!$conn) {
            die("błąd połączenia z bazą");
        }

        $sql = "SELECT `dataZadania`, `wpis` FROM `zadania` WHERE `miesiac` = 'lipiec';";
        $results = mysqli_query($conn, $sql);

        if (mysqli_num_rows($results) > 0) {
            while ($row = mysqli_fetch_assoc($results)) {
                echo "<div class='daneDnia'>";
                echo "<h5>" . $row['dataZadania'] . "</h5>";
                echo "<p>" . $row['wpis'] . "</p>";
                echo "</div>";
            }
        }


        if (isset($_POST['wpisEdit'])) {
            $wpis = $_POST['wpisEdit'];

            $sqlEdit = "UPDATE `zadania` SET `wpis`='$wpis' WHERE `dataZadania` = '2020-07-13';";
            if (mysqli_query($conn, $sqlEdit) === TRUE) {
                echo "";
            } else {
                echo "";
            }
        }

        mysqli_close($conn);

        ?>

    </div>


    <div id="stopka">

        <form action="kalendarz.php" method="POST">
            dodaj wpis: <input type="text" name="wpisEdit"> <input type="submit" value="DODAJ">
        </form>
        <p>Stronę wykonał: Oskar Podrucki</p>
    </div>


</body>

</html>