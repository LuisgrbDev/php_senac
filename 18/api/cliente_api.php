<?php
require_once '../database/ClienteRepository.php';
require_once '../model/cliente.php';
$action = $_GET['action'];

switch ($action) {
    default:
        http_response_code(400); // Requisição inválida
        echo json_encode(['error' => 'Ação invalida']);
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


function listarClientes()
{
    $cliente = clienteRepository::getAllclientes();
    echo json_encode($cliente);
}

function buscarClienteporId()
{
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {

        $id = $_GET['id'];
        $cliente = clienteRepository::getClienteById($id);
        if ($cliente) {
            echo json_encode($cliente);
        } else {
            http_response_code(404); //cliente não encontrado
            echo json_encode(['error' => 'Cliente não encontrado']);
        }
    } else {
        http_response_code(405); // MÉTODO NÃO PERMITIDO
    }
}

function cadastrarCliente()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents("php://input"));
        $cliente = new Cliente($nome,$cpf);
        $success = clienteRepository::insertCliente($cliente);
        echo json_encode(['success' => $success]);
    }else{
        http_response_code(405); //MÉTODO NÃO PERMITIDO
    }
}


function atualizarCliente()
{

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents("php://input"));
        $cliente = new Cliente($data->id, $data->nome, $data->cpf);
        $success = clienteRepository::updateCliente($cliente);
        echo json_encode(['success' => $success]);
    }else{
        http_response_code(405); //MÉTODO NÃO PERMITIDO
    }

}

function excluirCliente()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents("php://input"));
        $id = $data->id;
        $success = clienteRepository::deleteCliente($id);
        echo json_encode(['success' => $success]);
    }else{
        http_response_code(405); //MÉTODO NÃO PERMITIDO
    }
}

//Create Read Update Delete
//Create = Post (insert);
// Read = GET (select);
// Update =  POST (GET) update
