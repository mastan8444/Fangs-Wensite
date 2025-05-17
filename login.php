<?php

session_start();

include 'db_connection.php';

$pinno = $_POST['pinno'];
$password = $_POST['password'];
if($pinno && $password){
    $query = "SELECT * FROM login_table WHERE Pinno = '$pinno' AND Password = '$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($pinno === '21030-CM-486' && $password === '486Shaik') {
            header('Location: 420.html');
            $_SESSION['logged_in'] = false;
        }
        else{
            if ($pinno === '21030-CM-485' && $password === '485PlatinaMASH') {
                $_SESSION['logged_in'] = true;
                $_SESSION['pinno'] = $pinno;
                $_SESSION['password'] = $password;
                header('Location: admin.php');
            } 
            else {
                $_SESSION['pinno'] = $pinno;
                $_SESSION['password'] = $password;
                $_SESSION['logged_in'] = true;
                header('Location: Home_Page.php');
            }
        }    
    } 
    else {
        $string =  "Login Details mismatched or not found. Please try again.";
        $url = "index.html?str=" . urlencode($string);
        header("Location: $url");
    }
}
else{
        $_SESSION['logged_in'] = false;
        header('Location: Home_Page.php');
}

$conn->close();
?> 