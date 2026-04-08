<?php

require_once 'config.php';

$sql="SELECT * FROM cursos";
$stmt=$pdo->query($sql);

echo "<h1>Cursos</h1>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Nome</th><th>Carga Horária</th></tr>";
foreach ($stmt as $row) {
    echo "<tr>";
    echo "<td>" . ($row['id']) . "</td>";
    echo "<td>" . ($row['nome']) . "</td>";
    echo "<td>" . ($row['carga_horaria']) . "</td>";
    echo "</tr>";
}
echo "</table>";

echo"  <a href='alunos.php'>Ver Alunos</a>";
echo"  <a href='matriculas.php'>Ver Matriculas</a>";