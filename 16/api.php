<?php
require_once 'DatabaseRepository.php';

$action  =$_GET['action'];


switch($action){
    case 'list':
        echo json_encode(DatabaseRepository::getAllContacts());
        break;
    case 'add':
        $data = json_decode(file_get_contents('php://input',true));
        $sucess = DatabaseRepository::InsertContact($data->nome,$data->telefone,$data->email);
        echo json_encode(['Success' => $sucess]);
        break;

    case 'update': 
        $data = json_decode(file_get_contents('php://input',true));
        $success =  DatabaseRepository::updateContact($data->id,$data->nome,$data->telefone,$data->email);
        echo json_encode(['Success' => $success]);
        break;

    case 'delete':
        $id =  $_GET['id'];
        $sucess = DatabaseRepository::deleteContact($id);
        echo json_encode(['success' => $sucess]);
        break;

    default: 
    echo json_encode(['ERROR'=>'Ação inválida']);

}
?>