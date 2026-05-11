<?php
    session_start();
    include "../services/DBconnect.php";

    $idUsr = $_SESSION['user_id'] ?? null;
    $idItem = $_GET['elementID'] ?? null;

    if ($idUsr !== null && $idItem !== null){
        $stmt = $conn->prepare("INSERT INTO `usrRoutines` (`idUsr`, `idRoutine`) VALUES (?, ?)");
        $stmt->bind_param("ii", $idUsr, $idItem);
        $stmt->execute();
        http_response_code(200);
        header("Location: ../../HTML/thanks.html");
    }else{
        http_response_code(400);
    }
?>