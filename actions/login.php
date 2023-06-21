<?php 
    session_start();

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        if ($email == 'admin@gmail.com' && $password == '1234') {
            $_SESSION['login'] = true;
            header('location: ../admin/dashboard');
        } else {
            echo "Invalid Credentials";
        }
    }

?>