<?php

require_once 'config.php';

$sql= "SELECT * FROM matriculas";
$stmt=$pdo->query($sql);

echo "<h1>Matriculas</h1>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>ID Aluno</th><th>ID Curso</th><th>Data Matricula</th></tr>";
foreach ($stmt as $row) {
    echo "<tr>";
    echo "<td>" . ($row['id']) . "</td>";
    echo "<td>" . ($row['aluno_id']) . "</td>";
    echo "<td>" . ($row['cursos_id']) . "</td>";
    echo "<td>" . ($row['data_matricula']) . "</td>";
    echo "</tr>";
}
echo "</table>";
echo"  <a href='alunos.php'>Ver Alunos</a>";
echo"  <a href='cursos.php'>Ver Cursos</a>";