<?php
require_once '../database/contaRepository.php';

$action = $_GET['action'];


switch($action){
    case 'listar':
        listarConta();
        break;

        default:
        http_response_code(400);
        echo json_encode(['error' => 'Ação invalida']);
}

function listarConta(){
    $result = ContaRepository::getAllContas();
    echo json_encode($result);
}

?>