<?php

require_once 'database/PedidoRepository.php';

class PedidoController
{

    public static function handleRequest($action)
    {
        switch ($action) {
            case 'listar':
                self::listarPedidos();
                break;
            case 'buscar':
                self::buscarPorId();
                break;
            case 'buscar_pedido':
                self::listarPedidosProduto();
                break;
            case 'cadastrar':
                self::CadastrarPedido();
                break;
            case 'atualizar':
                self::atualizarPedido();
                break;
            case 'excluir':
                self::excluirPedido();
                break;


            default:
                http_response_code(400); // Requisição inválida
                echo json_encode(['error' => 'Ação invalida']);
                break;
        }
    }

    public static function listarPedidos()
    {
        $pedidos =  PedidoRepository::getAllPedidos();
        echo json_encode($pedidos);
    }

    public static function buscarPorId()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $pedidod = PedidoRepository::getBuscarPorId($id);
            if ($pedidod) {
                echo json_encode($pedidod);
            } else {
                http_response_code(404);
                echo json_encode(['error' => 'Entidade Invalida']);
            }
        } else {
            http_response_code(405);
        }
    }

    public  static function CadastrarPedido()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents("php://input"));
            $pedido = new Pedido(null, $data->data_pedido, $data->status);
            $success = PedidoRepository::inserirPedidos($pedido);
            echo json_encode(['Succes' => $success]);
        } else {
            http_response_code(405);
        }
    }

    public static function atualizarPedido()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data =  json_decode(file_get_contents("php://input"));
            $pedido = new Pedido($data->id, $data->data_pedido, $data->status);
            $success = PedidoRepository::atualizarPedido($pedido);
            echo json_encode(['succes' => $success]);
        } else {
            http_response_code(405);
        }
    }

    public static function excluirPedido()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data =  json_decode(file_get_contents("php://input"));
            $id = $data->id;
            $success = PedidoRepository::deletePedido($id);
            echo json_encode(['success' => $success]);
        } else {
            http_response_code(405);
        }
    }
    public static function listarPedidosProduto()
    {
        $pedidos_produto =  PedidoRepository::buscarPedidoProduto();
        echo json_encode($pedidos_produto);
    }
}
