<?php
require_once 'database/pedidoRepository.php';
require_once 'database/ProdutoRepository.php';



$action =$_GET['action'];
 switch($action){
    case 'listar':
        echo json_encode(PedidoRepository::getAllPedidos());
        break;

        case 'listarProduto':
            echo json_encode(ProdutoRepository::getAllprodutos());
            break;

        case 'buscarProdutoId':
            echo json_encode(ProdutoRepository::getProdutoById($id));
            break;

        default;
}

?>