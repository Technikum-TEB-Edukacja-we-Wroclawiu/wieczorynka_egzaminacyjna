<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>
        <h1>Pensjonat pod dobrym humorem</h1>
    </header>
    <section>
        <aside class="lewy">
            <a href="index.html">GŁÓWNA</a>
            <img src="1szary.jpg" alt="pokoje">
        </aside>
        <main>
            <a href="cennik.php">CENNIK</a>
            <table>
<?php
// połączenie
$db = mysqli_connect("localhost", "root", "", "wynajem");

// wysłanie zapytania
$q = "SELECT * FROM pokoje;";
$r = mysqli_query($db, $q);

// wyświetlenie
while($row = mysqli_fetch_array($r)) {
    // $row = wiersz z wyniku zapytania
    echo "<tr>
    <td>$row[id]</td>
    <td>$row[nazwa]</td>
    <td>$row[cena]</td>
</tr>";
}

// rozłączenie z bazą
mysqli_close($db);
?>
            </table>
        </main>
        <aside class="prawy">
            <a href="kalkulator.html">KALKULATOR</a>
            <img src="3szary.jpg" alt="pokoje">
        </aside>
    </section>
    <footer>
        Stronę opracował: Adam Karczewski i Przemek Jedlikowski, TEB Wrocław
    </footer>
</body>
</html>