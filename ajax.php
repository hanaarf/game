<?php
    include 'db.php';
    if (isset($_POST['fullname']) && isset($_POST['password']) && isset($_POST['username'])) {

        $id=substr(str_shuffle("0123456789"),0,5);
        $fullname = $_POST['fullname'];
        $password = $_POST['password'];
        $username = $_POST['username'];
        if (empty($fullname) || empty($password) || empty($username)){
            echo "Please Fill Out The Form!";
            exit;
        }

        $Sql = 'INSERT into users (id,fullname,password,username) VALUES("'.$id.'","'.$fullname.'","'.$password.'","'.$username.'")';
        mysqli_query($conn,$Sql);

        echo 'success';
    }

    elseif (isset($_POST['Login_username']) && isset($_POST['login_password'])) {
        $Login_username = $_POST['Login_username'];
        $login_password = $_POST['login_password'];

        $Sql = "Select * from users where username ='$Login_username' && password = '$login_password'";
        $res = mysqli_query($conn,$Sql);
        
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            $_SESSION['id'] = $row['id'];
            $arr = array("status" => 'success', 'message' => `welcome back $username `);
        }else {
            $arr = array("status" => 'error', 'message' => 'Check username or password');
        }
        echo  json_encode($arr);
    }
?>