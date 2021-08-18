<?php
require 'header.php';
 ?>
<?php echo 'Olá pessoal'; ?>
<?php 
include_once 'footer.php';
 ?>

 /*
 require aplica erro fatal para caso falha (interrompe o script)
 include retorna warning para caso de falha (nao interrompe o script)
 _once faz com que o include/require seja adicionado apenas uma vez em caso de duplicata