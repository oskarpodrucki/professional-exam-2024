<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel administratora</title>
    <link rel="stylesheet" href="styl4.css">
</head>

<body>


    <div id="baner">
        <h3>Portal Społecznościowy - panel administratora</h3>
    </div>



    <div id="lewy">
        <h4>Użytkownicy</h4>

        <?php

        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "dane4";

        $conn = mysqli_connect($host, $user, $password, $database);

        if(!$conn){
            die("Nieudane połączenie z bazą: " . mysqli_connect_error());
        } 
        
        $sql = "SELECT `id`, `imie`, `nazwisko`, (YEAR(CURDATE())-`rok_urodzenia`) AS wiek FROM `osoby` LIMIT 30;";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo $row['id'].". ".$row['imie']." ".$row['nazwisko']." ".$row['wiek']." lat <br>";
            }
        } else {
            echo "0 resultatów";
        }

        $conn->close();

        ?>

        <a href=settings.html>Inne ustawienia</a>
    </div>



    <div id="prawy">
        <h4>Podaj id użytkownika</h4>
        <form action="users.php" method="post">

        <input type="number" name=id placeholder="id"> <input type=submit value="ZOBACZ" id="submit">

        </form>
        
        <hr>

        <?php
        
        $id = $_POST['id'];

        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "dane4";

        $conn = mysqli_connect($host, $user, $password, $database);

        if(!$conn){
            die("Nieudane połączenie z bazą: " . mysqli_connect_error());
        } 
        
        $sql = "SELECT `imie`, `nazwisko`, `rok_urodzenia`, `opis`, `zdjecie`, hobby.nazwa AS `hobby` FROM `osoby` JOIN hobby ON osoby.Hobby_id = hobby.id WHERE osoby.id = $id;";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<h2>".$id.". ".$row['imie']." ".$row['nazwisko']."</h2>";
                echo "<img src=".$row['zdjecie']." alt=".$id.">";
                echo "<p>Rok urodzenia: ".$row['rok_urodzenia']."</p>";
                echo "<p>Opis: ".$row['opis']."</p>";
                echo "<p>Hobby: ".$row['hobby']."</p>";
            }
        } else {
            echo "0 resultatów";
        }

        $conn->close();

        
        
        ?>
    </div>



    <div id="stopka">
        Stronę wykonał: Oskar Podrucki
    </div>


</body>

</html>