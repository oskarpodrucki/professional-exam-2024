<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warzywniak</title>
    <link rel="stylesheet" href="styl2.css">
</head>

<body>

    <div id="baner1">
        <h1>Internetowy sklep z eko-warzywami</h1>
    </div>

    <div id="baner2">
        <ol>
            <li>warzywa</li>
            <li>owoce</li>
            <li><a href="soki">soki</a></li>
        </ol>
    </div>


    <div id="glowny">

        <?php

        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "dane2";

        $conn = mysqli_connect($host, $user, $password, $database);

        if (!$conn) {
            die("Nieudane połączenie z bazą: " . mysqli_connect_error());
        }

        $sql = "SELECT `nazwa`, `ilosc`, `opis`, `cena`, `zdjecie` FROM `produkty` WHERE `Rodzaje_id` IN(1,2);";
        $result = $conn->query(($sql));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='produkt'>";
                echo "<img src='" . $row['zdjecie'] . "' alt='warzywniak'>";
                echo "<h5>" . $row['nazwa'] . "</h5>";
                echo "<p>opis: " . $row['opis'] . "</p>";
                echo "<p>ilosc: " . $row['ilosc'] . "</p>";
                echo "<h2>" . $row['cena'] . " zł</h2>";
                echo "</div>";
            }
        } else {
            echo "0 rezultatów";
        }

        $conn->close();

        ?>

    </div>


    <div id="stopka">

        <form action="sklep.php" method="POST">
            Nazwa: <input type=text name=name> Cena: <input type=number name=price> <input type=submit value="Dodaj produkt">
        </form>

        <?php

        if (isset($_POST['name']) && isset($_POST['price'])) {
           
            $name = $_POST["name"];
            $price = $_POST["price"];

            $host = "localhost";
            $user = "root";
            $password = "";
            $database = "dane2";

            $conn = mysqli_connect($host, $user, $password, $database);

            if (!$conn) {
                die("Nieudane połączenie z bazą: " . mysqli_connect_error());
            }

            $sql = "INSERT INTO `produkty`( `Rodzaje_id`, `Producenci_id`, `nazwa`, `ilosc`, `opis`, `cena`, `zdjecie` ) VALUES (?, ?, ?, '10', '', ?, 'owoce.jpg')";

            $stmt = $conn->prepare($sql);
            $rodzaje_id = 1;
            $producenci_id = 1;
            $stmt->bind_param("iisi", $rodzaje_id, $producenci_id, $name, $price);
            $stmt->execute();

            $stmt->close();
            $conn->close();

            sleep(2);

            header("Location: " . $_SERVER['PHP_SELF']);
            exit;

        }

        ?>

        Stronę wykonał: Oskar Podrucki
    </div>

</body>

</html>