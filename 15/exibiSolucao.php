<?php
require_once 'solucao.php';

$repository = new DatabaseRepository();

//print_r($repository->getAllItens());
//echo $repository->addItem('Abacaxi',2);

//$repository->updateItem(4,"Arroz",1,1);
$repository->deleteITem(4)

?>