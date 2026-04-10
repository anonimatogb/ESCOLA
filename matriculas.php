<?php

require_once 'config.php';

$sql= "SELECT 
alunos.nome AS aluno,
cursos.nome AS curso,
matriculas.id,
matriculas.data_matricula
FROM matriculas
INNER JOIN alunos ON matriculas.aluno_id = alunos.id
INNER JOIN cursos ON matriculas.cursos_id = cursos.id";
$stmt=$pdo->query($sql);

echo "<h1>Matriculas</h1>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>ID Aluno</th><th>ID Curso</th><th>Data Matricula</th></tr>";
foreach ($stmt as $row) {
    echo "<tr>";
    echo "<td>" . ($row['id']) . "</td>";
    echo "<td>" . ($row['aluno']) . "</td>";
    echo "<td>" . ($row['curso']) . "</td>";
    echo "<td>" . ($row['data_matricula']) . "</td>";
    echo "</tr>";
}
echo "</table>";
echo"  <a href='alunos.php'>Ver Alunos</a>";
echo"  <a href='cursos.php'>Ver Cursos</a>";