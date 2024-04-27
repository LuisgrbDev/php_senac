<?php
require_once 'database/ProdutoRepository.php';

class ProdutoController
{

    public static function handleRequest($action)
    {
        switch ($action) {
            case 'listar':
                self::listarProdutos();
                break;

            case 'buscar':
                self::buscarProdutoPorId();
                break;

            case 'cadastrar':
                self::cadastrarProduto();
                break;
            case 'atualizar':
                self::atualizarProduto();
                break;
            case 'excluir':
                self::excluirProduto();
                break;

            default:
                http_response_code(400); // Requisição inválida
                echo json_encode(['error' => 'Ação invalida']);
                break;
        }
    }

    public static function listarProdutos()
    {
        $produto =  ProdutoRepository::getAllprodutos();
        echo json_encode($produto);
    }

    public static function buscarProdutoPorId()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $produto = ProdutoRepository::getProdutoById($id);

            if ($produto) {
                echo json_encode($produto);
            } else {
                http_response_code(404);
                echo json_encode(['error' => 'Entidade invalida']);
            }
        } else {
            http_response_code(405);
        }
    }

    public static function cadastrarProduto()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $data = json_decode(file_get_contents("php://input"));
            $produto = new Produto(null, $data->nome,$data->descricao,$data->preco);

            $success = ProdutoRepository::insertProduct($produto);
            echo json_encode(['Success' => $success]);
        }else{
            http_response_code(405);
        }
    }

    public static function atualizarProduto()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $data = json_decode(file_get_contents("php://input"));
            $produto = new Produto($data->id, $data->nome,$data->descricao,$data->preco);

            $success = ProdutoRepository::updateProduto($produto);
            echo json_encode(['Success' => $success]);
        }else{
            http_response_code(405);
        }
    }

    public static function excluirProduto()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $data = json_decode(file_get_contents("php://input"));
            $id = $data->id;
            $success = ProdutoRepository::deleteProduto($id);
            echo json_encode(['Success' => $success]);
        }else{
            http_response_code(405);
        }
    }
}
