
<?php
include 'database.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $email = $_POST['email'];
    $password = $_POST['password'];


    $stmt = $dbCon->prepare("SELECT user_id, password, group_id FROM users WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $hashed_password, $group_id);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            // Verification success! User has logged-in!

            // Create sessions
            session_regenerate_id();
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['email'] = $email;

            // Determine the user's role based on the group_id (You can fetch this from your roles or groups table)
            $role = ''; // Change this to match your role assignment logic

         if ($group_id === 1) {
            $role = 'admin';
        } elseif ($group_id === 2) {
            $role = 'customer';
        } elseif ($group_id === 3) {
            $role = 'store_owner';
        } elseif ($group_id === 4) {
            $role = 'driver';
        }           

            switch ($role) {
                case 'admin':
                    header('Location: ../Dashboard-adm.php');
                    break;
                case 'store_owner':
                    header('Location: ../storePlatform-SO.php');
                    break;
                case 'driver':
                    header('Location: ...'); // Specify the driver's destination
                    break;
                case 'customer':
                default:
                    header('Location: ../dashboard.blade.php');
                    break;
            }
        } else {
            echo 'Incorrect username and/or password!';
        }
    } else {
        echo 'Incorrect username and/or password!';
    }

    $stmt->close();
}
?>
