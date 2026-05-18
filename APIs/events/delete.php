<?php
session_start();
//include "../services/usrCheck.php";
include "../services/DBconnect.php";

$id = $_POST["id_evnt"];

$query = "DELETE FROM events WHERE id = " . $id;

if($conn->query($query) === TRUE){
    //die ("Evento eliminato con successo");
    http_response_code(200);
    header("Location: planner.html");
}else{
    http_response_code(400);
    echo "Errore";
}