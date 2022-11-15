<?php 
if(isset($_COOKIE['username']) && empty($_COOKIE['username'])){
    $isAuth = FALSE;
}else{
    $isAuth = TRUE;
}?>

<div class="wrapper">
    <nav class="header-menu">
        <ul class="header-menu-list">
            <li><a href="index.php" class="header-menu-list__item">POISE</a></li>
            <li><a href="#" class="header-menu-list__item">ABOUT</a></li>
            <li><a href="#" class="header-menu-list__item">CONTACT</a></li>
            <li><a href="
            <?php if($isAuth){
                echo 'admin.php';
            }else{
                echo 'auth.php';
            }
            ?>
            " class="header-menu-list__item">CREATE BLOG</a></li>
        </ul>
    </nav>
</div>