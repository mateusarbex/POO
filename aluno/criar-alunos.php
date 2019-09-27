<?php
require 'aluno.php';

$aluno1 = new Aluno();
$aluno2 = new Aluno();
$aluno3 = new Aluno();
$aluno4 = new Aluno();
$aluno5 = new Aluno();

$aluno1->setCodAluno('aluno11');
$aluno1->setEmail('aluno1@gmail.com');
$aluno1->setNome('aluno1');
$aluno1->setTelefone('9999-99911');

$aluno2->setCodAluno('aluno21');
$aluno2->setEmail('aluno2@gmail.com');
$aluno2->setNome('aluno2');
$aluno2->setTelefone('9999-99911');

$aluno3->setCodAluno('aluno31');
$aluno3->setEmail('aluno3@gmail.com');
$aluno3->setNome('aluno3');
$aluno3->setTelefone('9999-99911');

$aluno4->setCodAluno('aluno41');
$aluno4->setEmail('aluno4@gmail.com');
$aluno4->setNome('aluno4');
$aluno4->setTelefone('9999-99911');

$aluno5->setCodAluno('aluno51');
$aluno5->setEmail('aluno5@gmail.com');
$aluno5->setNome('aluno5');
$aluno5->setTelefone('9999-99911');

$aluno1->ListarDados();
$aluno2->ListarDados();
$aluno3->ListarDados();
$aluno4->ListarDados();
$aluno5->ListarDados();
?>