<?php
require ('../../bootstrap.php');

use App\Models\Auth;
$auth=new Auth();
if(isset($_POST['register-submit'])){
    $auth->validate([
        'email'=>$_POST['email'],
        'paswordConfirm'=>$_POST['password1']."/".$_POST['password2']
    ]);
    if($auth->errors){
      $_SESSION['errors']=json_encode($auth->errors);
        header('Location:' . '/Backend-Test/register.php' . '');
    }else{
        $auth->register($_POST['name'],$_POST['email'],$_POST['password1']);
        $_SESSION['succes']='Success';
        header('Location:' . '/Backend-Test/register.php' . '');

    }
}

if(isset($_POST['login-submit'])){
    $auth->validate([
        'email'=>$_POST['email'],
    ]);

    if($auth->errors){
        $_SESSION['errors']=json_encode($auth->errors);
        header('Location:' . '/Backend-Test/login.php' . '');
    }else{
        $auth->login($_POST['email'],$_POST['password']);
        $_SESSION['succes']='success';
        header('Location:' . '/Backend-Test/login.php' . '');

    }


}

?>