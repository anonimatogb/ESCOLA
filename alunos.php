<?php

require_once 'config.php';

$Sql = "SELECT * FROM alunos";
$stmt = $pdo->query($Sql);

echo "<h1>Alunos</h1>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Nome</th><th>Email</th></tr>";
foreach ($stmt as $row) {
    echo "<tr>";
    echo "<td>" . ($row['id']) . "</td>";
    echo "<td>" . ($row['nome']) . "</td>";
    echo "<td>" . ($row['email']) . "</td>";
    echo "</tr>";
}
echo "</table>";

echo"  <a href='cursos.php'>Ver Cursos</a>";
echo"  <a href='matriculas.php'>Ver Matriculas</a>";