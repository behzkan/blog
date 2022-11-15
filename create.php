<?php
    require 'db.php';

    if(isset($_POST['title']) AND isset($_POST['blog-text'])){

        $title = $_POST['title'];
        $text = $_POST['blog-text'];
        $query = $connection->query("insert into `blogs`(`img`, `author`, `published`, `blog_title`, `blog_text`, `views`) values 
        ('img/tree.jpg', 'Bekzhan', now(), '$title', 
        '$text', 0)");

        if($query == 1){
            header('Location: admin.php?created=true');
            exit();
        }
        echo 'error';
    }

