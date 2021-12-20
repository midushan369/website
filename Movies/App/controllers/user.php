<?php

include(ROOT_PATH ."/App/database/db.php");
include(ROOT_PATH ."/App/helpers/validate.php");


$errors = array();
$Username = '';
$email = '';
$password = '';
$passwordConf = '';
$id ='';
$user = selectAll('user');

$table = 'user';


if(isset($_GET['admin']) && isset($_GET['id']) ) {
 
    $Admin = $_GET['admin'];
    $P_id = $_GET['id'];
    $count = update($table, $P_id, ['admin' => $Admin]);
    $_SESSION['message'] = "post  user  status cheged successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/users/index.php");
    exit();

}

if(isset($_GET['id']))
{
   $count = delete($table, $_GET['id']);
   $_SESSION['message'] = "post deleted successfully";
   $_SESSION['type'] = "success";
   header("location: " . BASE_URL . "/admin/post/index.php");
   exit();

}



function loginUser($user)
{
    

    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'You are now logged in';
    $_SESSION['email'] = $user['Email'];
    $_SESSION['type'] = 'success';
    if ($_SESSION['admin']) {
        header('location: ' . BASE_URL . '/admin/coment/index.php');

    } else {
        header('location: ' . BASE_URL . '/index.php');
        
    }
    exit();
}

if(isset($_POST['register-btn']))
{
   $errors = validateUser($_POST);

    if(count($errors)=== 0)
    {
        unset($_POST['register-btn'], $_POST['passwordConf']);
        $_POST['admin'] =0;
    
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
         
        $user_id = create('user', $_POST);
        $user = selectOne('user', ['id' => $user_id]);
         
         //log user
         loginUser($user);
         
    }
    else{

        $Username = $_POST['Username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
}

if (isset($_POST['login-btn'])) {
    $errors = validateLogin($_POST);

    if (count($errors) === 0) {
        $user = selectOne('user', ['Username' => $_POST['Username']]);

        if ($user && password_verify($_POST['password'], $user['password'])) {
            loginUser($user);
        } else {
           array_push($errors, 'Wrong credentials');
        }
    }
}

