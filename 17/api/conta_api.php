<?php
require_once '../database/contaRepository.php';

$action = $_GET['action'];


switch($action){
    case 'listar':
        listarConta();
        break;

    case 'cadastrar':
        cadastarConta();
        break;

    case 'atualizar':
        atualizarConta();
        break;

    case 'excluir':
        excluirConta();
        break;

        
        default:
        http_response_code(400);
        echo json_encode(['error' => 'Ação invalida']);
}

function listarConta(){
    $result = ContaRepository::getAllContas();
    echo json_encode($result);
}


function buscarContaid(){
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            $id =  $_GET['id'];
            $conta =  ContaRepository::getContabyId($id);
            if($conta){
                echo json_encode($conta);

            }else{
                http_response_code(400);
                echo json_encode(['ERROR' => 'Cliente não encontrado']);
            }
        } else{
            http_response_code(405);
        }
}

function cadastarConta(){
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $data =json_decode(file_get_contents("php://input"));
        $
    }
}

function atualizarConta(){

}

function excluirConta(){

}
?>