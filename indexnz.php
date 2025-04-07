<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06.04.2025</title>
</head>
<body>
    
<form action="" method="get">
    Login: <input name="login" type="text"><br />
    Haslo: <input name="pass" type="password"><br />

	<input type="radio" name="sex" value="male">Male<br />
	<input type="radio" name="sex" value="female">Female<br />
    <input type="radio" name="sex" value="bender">Bender<br />

    <input type="checkbox" name="l1" value="Eng">I speak English<br>
    <input type="checkbox" name="l2" value="Ger">I speak German<br>
    <input type="checkbox" name="l3" value="Pol">I speak Polish <br>


    Kraj pochodzenia: <select name="country">
        <option value="England">England</option>
        <option value="USA">USA</option>
        <option value="Poland">Poland</option>
        <option value="Sweden">Sweden</option>
    </select>
        
    <input type="submit" value="Submit">
</form>

<form method="get">
    <label for="search">Szukaj po nazwisku:</label>
    <input type="text" name="search" id="search">
    <input type="submit" value="Szukaj">
</form>

<?php

if (isset($_GET['login']) && isset($_GET['country'])) {
    $login = $_GET['login'];
    $country = $_GET['country'];

    echo "Login: $login <br>";
    echo "Kraj pochodzenia: $country <br>";
    if ($country === "Poland") {
        echo "Polska gurom";
    }
} else {
    echo "Brak danych. Proszę wypełnić formularz.";
}


$tab = [
    ['Jan', 'Kowalski', 20, 3500],
    ['Anna', 'Nowak', 25, 4200],
    ['Piotr', 'Zieliński', 30, 5100],
    ['Kasia', 'Wiśniewska', 28, 3900],
    ['Tomasz', 'Dąbrowski', 35, 6000],
    ['Magda', 'Krawczyk', 22, 3100],
    ['Paweł', 'Wójcik', 40, 7200],
];

echo "<table border='1'>";
echo "
<tr>
    <th>Imie</th>
    <th>Nazwisko</th>
    <th>Wiek</th>
    <th>Wynagrodzenie</th>
</tr>
";

$filteredTab = $tab;

if (isset($_GET['search']) && $_GET['search'] !== '') {
    $searchTerm = strtolower(trim($_GET['search']));
    $filteredTab = array_filter($tab, function ($row) use ($searchTerm) {
        return strpos(strtolower($row[1]), $searchTerm) !== false;
    });
}

foreach ($filteredTab as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}
echo "</table>";

if (isset($_GET['search']) && empty($filteredTab)) {
    echo "<p>Brak wyników dla nazwiska: <strong>" . htmlspecialchars($_GET['search']) . "</strong></p>";
}
?>


</body>
</html>

