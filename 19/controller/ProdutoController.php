<?php
require_once 'database/ProdutoRepository.php';

class ProdutoController{
   
    public static function handleRequest($action){
        switch($action){
            case 'listar':
               self::listarProdutos();
                break;
                default:
                http_response_code(400); // Requisição inválida
                echo json_encode(['error'=> 'Ação invalida']);
                break;
        }
    }

    public static function listarProdutos(){
        $produto=  ProdutoRepository::getAllprodutos();
        echo json_encode($produto);
    }
}

?>