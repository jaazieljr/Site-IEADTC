<?php
$nome = $_POST['firstName'];
$sobrenome = $_POST['lastName'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$dest = 'ieadtcgba@gmail.com';

$dados = 'Nome: '.$nome.' '.$sobrenome.';\n'.
'Email: '.$email.'; Celular:'.$telefone.'\n'.
'Assunto: '.$assunto.'\n'.
'Menssagem: '.$mensagem.'\n';

echo $dados;
?>