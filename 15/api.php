<?php
require_once 'DatabaseRepository.php';

$repository = new DatabaseRepository();
$action = isset($_GET['action'])? $_GET['action'] : '';

switch($action) {
    case 'list':
    echo json_encode($repository->getAllItens());
    break;

    case 'add':
    $data =json_decode(file_get_contents('php://input',true));
    $nomeProduto = $data->nome_produto;
    $quantidade = $data->quantidade;
    echo json_decode($repository->addItem($nomeProduto, $quantidade));
    break;

    case 'compraItem':
        $data = json_decode(file_get_contents('php://input',true));
        $id = $data->id;
        $comprado = $data->comprado;
        echo json_decode($repository->compraItem($id, $comprado));
        break; 

        case 'delete':
            $id = $_GET['id'];
            echo json_decode($repository->deleteITem($id));
            break;
            
        case 'itensComprados':
            echo json_encode($repository->getAllComprado());
            break;
}

?>