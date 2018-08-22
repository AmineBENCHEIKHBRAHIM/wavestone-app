<?php 

if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']))
{
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    if($username == getenv('ADMIN_LOGIN') && $password == getenv('ADMIN_PASSWORD')){
        //echo 'Redirecting to dashboard';
        
        
        header("Location: ".getenv('DOMAIN_NAME_UNSECURE')."dashboard.php"); /* Redirect browser */
        exit;
        
    }else{
        echo 'wrong login or password';
        header("Location: ".getenv('DOMAIN_NAME_UNSECURE')."index.php"); /* Redirect browser */
        exit;
    }
}

else {
    echo 'Missgin login OR password';
    header("Location: ".getenv('DOMAIN_NAME_UNSECURE')."index.php"); /* Redirect browser */
    exit;
}

?>