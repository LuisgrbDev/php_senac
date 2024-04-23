<?php
require_once '../database/contaRepository.php';

$action = $_GET['action'];


switch($action){
    case 'listar':
        listarConta();
        break;

        case 'buscar':
            buscarContaid();
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
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $data =json_decode(file_get_contents("php://input"));
        $idcliente = $data->idcliente;
        $numero = $data->numero;
        $saldo = $data->saldo;
        $tipo =$data->tipo;
        $limite= $data->limite;
        $taxa = $data->taxa;
        $success =  ContaRepository::insertConta($idcliente,$numero,$saldo,$tipo,$limite,$taxa);
        echo json_encode(['succes'=>$success]);
    }else{
        http_response_code(405); // Método não permetido
    }
}

function atualizarConta(){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $data =json_decode(file_get_contents("php://input"));
        $id = $data->id;
        $numero = $data->numero;
        $saldo = $data->saldo;
        $tipo =$data->tipo;
        $limite= $data->limite;
        $taxa = $data->taxa;
        $success =  ContaRepository::updateConta($id,$numero,$saldo,$tipo,$limite,$taxa);
        echo json_encode(['succes'=>$success]);
    }else{
        http_response_code(405); // Método não permetido
    }
}

function excluirConta(){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $data=json_decode(file_get_contents("php://input"));
        $idconta=$data->id;
        $success = ContaRepository::deleteConta($idconta);
        echo json_encode(['success'=>$success]);

    }else{
        http_response_code(405);
    }
}
?>