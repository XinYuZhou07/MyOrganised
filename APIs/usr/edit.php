<?php
    session_start();
    include "../services/usrCheck.php";
    include "../services/DBconnect.php";

    $name = $_POST['name'] ?? null;
    $surname = $_POST['surname'] ?? null;
    $email = $_POST['email'] ?? null;
    $avatar = $_POST['avatar'] ?? null;

    if (!$name && !$surname && !$email && !$avatar) {
        http_response_code(400);
        exit;
    }else{
        if ($name){
            $stmt = $conn->prepare("UPDATE users SET `name` = '" . $name . "' where id = " . $_SESSION['user_id']);
            $stmt->execute();
        }
        if($surname){
            $stmt = $conn->prepare("UPDATE users SET `surname` = '" . $surname . "' where id = " . $_SESSION['user_id']);
            $stmt->execute();
        }
        if($email){
            $stmt = $conn->prepare("UPDATE users SET `email` = '" . $email . "' where id = " . $_SESSION['user_id']);
            $stmt->execute();
        }
        if($avatar){
            $stmt = $conn->prepare("UPDATE users SET `avatar` = '" . $avatar . "' where id = " . $_SESSION['user_id']);
            $stmt->execute();
        }
        http_response_code(200);
        header("Location: ../../HTML/planner.html");
    }

?>