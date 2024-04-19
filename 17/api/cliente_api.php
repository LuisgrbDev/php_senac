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

    case 'buscar':
        buscarClienteporId();
        break;

    case 'cadastrar':
        cadastrarCliente();
        break;
    
    case 'atualizar':
        atualizarCliente();
        break;
    
    case 'excluir':
        excluirCliente();
        break;
}


function listarClientes(){
    $cliente = clienteRepository::getAllclientes();
    echo json_encode($cliente);
}

function buscarClienteporId(){
    $id = $_GET['id'];
    
}

function cadastrarCliente(){

}
function atualizarCliente(){

}

function excluirCliente(){

}

//Create Read Update Delete
//Create = Post (insert);
// Read = GET (select);
// Update =  POST (GET) update
?>