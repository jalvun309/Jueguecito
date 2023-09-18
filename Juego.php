<!DOCTYPE html>
<html>
<head>
    <title>Piedra, Papel y Tijeras</title>
</head>
<body>
<h1>Juego de Piedra, Papel y Tijeras</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jugador = $_POST["jugador"];
    $opciones = array("piedra", "papel", "tijeras");
    $computadora = $opciones[array_rand($opciones)];

    echo "<p>Tu elección: $jugador</p>";
    echo "<p>Elección de la computadora: $computadora</p>";

    if ($jugador == $computadora) {
        echo "<p>¡Empate!</p>";
    } elseif (($jugador == "piedra" && $computadora == "tijeras") ||
        ($jugador == "papel" && $computadora == "piedra") ||
        ($jugador == "tijeras" && $computadora == "papel")) {
        echo "<p>¡Ganaste!</p>";
    } else {
        echo "<p>¡La computadora gana!</p>";
    }
}
?>

<form method="post">
    <label for="jugador">Elige una opción:</label>
    <select name="jugador" id="jugador">
        <option value="piedra">Piedra</option>
        <option value="papel">Papel</option>
        <option value="tijeras">Tijeras</option>
    </select>
    <input type="submit" value="Jugar">
</form>
</body>
</html>
