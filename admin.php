<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    include 'header.php'; ?>
<div class="container"> 
    <?php
    if(isset($_COOKIE['username'])){
        ?>
    <div class="create-blog-wrapper">
        <p><?php if(isset($_GET['created'])): echo "Blog created"; endif ?></p>
        <form action="create.php" class="create-blog-form" method="POST">
            <input type="text" name="title"  placeholder="Write blog title" class="create-blog__title"
            value="cvknde"
            >
            <textarea name="blog-text" placeholder="Blog text"
            value="cvknde" 
            ></textarea>
            <button type="submit" class="btn create__btn">Create</button>
        </form>
    </div>
<?php
    }else{
        header('Location: auth.php?error=not authorized');
        exit();
    }
    ?> 
</div>
</body>
</html>