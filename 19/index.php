<?php
require_once 'controller/PedidoController.php';

$entity = $_GET['entity'];
$action = $_GET['action'];

switch($entity){
    case 'pedido':
        require_once 'controller/PedidoController.php';
        PedidoController::listarPedidos($action);
        break;
        
        default:
        http_response_code(400);
        echo json_encode(['error' => 'Entidade inválida!']);
        break;
}
?>