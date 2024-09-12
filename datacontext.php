<?php

$db = new mysqli("localhost", "root","", "tola_practice");


if ($db->connect_errno){
    die;
}

try {
    $db ->query("INSERT into `product_name`
    (`seller_id`, `title`, `description`, `rating`, `image`, `price`) VALUES
    ('1','Perfume','perfume',3,'tola.png',2000)");
} catch (\Throwable $th) {
    var_dump($db);
}


?> 
