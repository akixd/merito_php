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



//baza danych pracownikow - imie, nazwisko, wiek, placa
7 rekordó
wypisac tabelke

mozzliwoscc wyszukanai nazwiska za teblicy z wyswietlenie

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


$tab[0][0]='Jan';
$tab[0][1]='Kowalski';
$tab[0][2]= 20;
$tab[0][3]= 3500;

echo "<table border='1'>";
echo "
<tr>
    <th>Imie</th>
    <th>Nazwisko</th>
    <th>Wiek</th>
    <th>Wynagrodzenie</th>
</tr>";

echo $tab[0][0] . "<br>";
echo $tab[0][1] . "<br>"; 
echo $tab[0][2] . "<br>"; 
echo $tab[0][3] . "<br>"; 
?>


</body>
</html>

