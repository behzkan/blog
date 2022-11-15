<?php
include 'db.php';
$query = $connection->query("select * from blogs");

$amount = $query->num_rows;
$i = 0;






     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'header.php';?>

    <div class="container">
        <div class="blog-wrapper">
           

            <?php 
                while($i < $amount){
                    $res = $query->fetch_row();
                    $i++;
            ?>
            <div class="blog-box__item">
                <div class="blog-img">
                    <img src="<?=$res[1]?>" alt="">
                </div>
                <div class="blog-wrapper-text">
                    <div class="blog-info">
                    <p class="blog-info__author"><?=$res[2]?></p>
                    <p class="blog-info__date"><?=$res[3]?></p>
                </div>
                <div class="blog-text">
                    <a href="#" class="blog-text__title"><?=$res[4]?></a>
                    <p class="blog-text__subtitle"><?=$res[5]?></p>
                </div>
                <div class="blog__line"></div>
                <div class="blog-box-bottom">
                    <div class="blog__views">5564 <span> views</span></div>
                    <div class="blog-bottom__action">
                        <span><a href='<?php echo "admin.php?edit=$res[0]"; ?>'>&#9998;</a></span>
                        <span><a href='<?php echo "delete.php?delete=$res[0]"; ?>'>&times;</a></span>
                    </div>
                </div>
                </div>
            </div>
                    <?php
                } ?>
            
            
        </div>
    </div>
<!--  -->
    <div class="container"> 
        <div class="create-blog-wrapper">
            <form action="" class="create-blog-form">
                <input type="text" placeholder="Title" class="create-blog__title">
                <textarea name="blog-text" placeholder="Blog text"></textarea>
                <button type="submit" class="btn create__btn">Create</button>
            </form>
        </div>
    </div>

    <!--  -->
    <div class="container"> 
        <div class="create-blog-wrapper">
            <form action="" class="create-blog-form">
                <input type="text" placeholder="Title" class="create-blog__title">
                <textarea name="blog-text" placeholder="Blog text"></textarea>
                <button type="submit" class="btn create__btn">Create</button>
            </form>
        </div>
    </div>
</body>
</html>