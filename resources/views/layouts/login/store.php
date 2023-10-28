<?php

//CHANGES

include 'database.php';
include 'rolePrefix.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  
    $role = 'customer'; 

    
    $stmt = $dbCon->prepare("SELECT group_id FROM user_groups WHERE group_name = ?");
    $stmt->bind_param("s", $role);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($group_id);
        $stmt->fetch();

        /
        $stmt = $dbCon->prepare("INSERT INTO users (username, email, password, group_id) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $name, $email, $hashed_password, $group_id);

        if ($stmt->execute()) {
            echo "Registration successful.";
            header('Location: Login.php');
        } else {
            echo "Registration failed.";
        }
        $stmt->close();
    } else {
        echo "Role not found.";
    }
}
?>
