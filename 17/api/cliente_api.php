<?php
require_once '../database/ClienteRepository.php';

$action = $_GET['action'];

switch($action){
    default:
    http_response_code(400);// Requisição inválida
    echo json_encode(['error'=> 'Ação invalida']);
    break;

    case 'listar':
        listarClientes();
        break;
}

function listarClientes(){
    $cliente = clienteRepository::getAllclientes();
    echo json_encode($cliente);
}
?>