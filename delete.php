

<?php
include 'db.php';

$id =  $_GET['delete'];

$query = $connection->query("delete from `blogs` where `id`=$id");
header('Location: index.php?delete=true');
exit();
print_r($query);