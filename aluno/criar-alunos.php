<?php
require 'aluno.php';
require 'turma.php';

$aluno1 = new Aluno();
$aluno2 = new Aluno();

$aluno1->setCodAluno('aluno11');
$aluno1->setEmail('aluno1@gmail.com');
$aluno1->setNome('aluno1');
$aluno1->setTelefone('9999-99911');

$aluno2->setCodAluno('aluno21');
$aluno2->setEmail('aluno2@gmail.com');
$aluno2->setNome('aluno2');
$aluno2->setTelefone('9999-99911');

$turma = new Turma;
$turma->codTurma = 1;
$turma->descricao = "Aula de Artes";

$aluno1->turma = $turma;
$aluno2->turma = $turma;

echo 'Descrição da turma do aluno 1';
echo '<br>';
echo '<br>';
echo $aluno1->turma->descricao;
echo '<br>';
echo '<br>';
echo 'Código da turma do aluno 1';
echo '<br>';
echo '<br>';
echo $aluno1->turma->codTurma;
echo '<br>';
echo '<br>';
echo 'Descrição da turma do aluno 2';
echo '<br>';
echo '<br>';
echo $aluno2->turma->descricao;
echo '<br>';
echo '<br>';
echo 'Código da turma do aluno 2';
echo '<br>';
echo '<br>';
echo $aluno2->turma->codTurma;
echo '<br>';
echo '<br>';
?>