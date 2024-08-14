<?php
/*print_r($_POST);*/


$arquivo = fopen('arquivo.hd','a'); // aqui eu uso para abrir o arquivo  

$titulo=str_replace('#', '-',  $_POST['titulo']);// aqui eu uso para criar uma variavel
$categoria=str_replace('#', '-',  $_POST['categoria']);// aqui eu uso para criar uma variavel
$descricao=str_replace('#', '-',  $_POST['descricao']);// aqui eu uso para criar uma variavel

$texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;// aqui foi para fazer a separação de linhas

fwrite($arquivo, $texto);// aqui usei para passar o parâmetro para função

/* echo $texto; */

fclose($arquivo);// aqui eu usei para fechar o arquivo

header('location: abrir_chamado.php');// aqui foi para forçar o redirecionamento

?>