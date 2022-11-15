<?php
include 'db.php';
include 'header.php';

if($isAuth != 1){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autorization</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container"> 
    <div class="create-blog-wrapper">
        <form action="auth.php" class="create-blog-form" method="POST">
            <input type="text" name="username" minlength="5" maxlength="20" placeholder="email or username" class="create-blog__title">
            <input type="password" name="password" minlength="5" maxlength="20" placeholder="password" class="create-blog__title">
            <button type="submit" class="btn create__btn">Login</button>
        </form>
    </div>
</div>
</body>
</html>

<?php 
}else{
    header('Location: admin.php');
}
if(isset($_POST['username']) AND isset($_POST['password'])):
    $username = $_POST['username'];
    $password = md5($_POST['password']);
 

    $query = $connection->query("select * from `users_data`");
    print_r($query);
    
    $result = $query->fetch_assoc();

    if(count($result) != 0){
        setcookie('username', $username, time() + 3600 * 24, '/');
        header('Location: admin.php');
        exit();
    }else {
        header('Location: auth.php');
    }
endif;