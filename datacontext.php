<?php


$db = new mysqli("localhost", "root","", "tola_practice");
if ($db->connect_errno){
    die;
}




// $db ->query("INSERT into `product_name`
// (`seller_id`, `title`, `description`, `rating`, `image`, `price`) VALUES
// (?,?,?,?,?,?)");
$id = 1;
$query = 'INSERT into `product_name`
(`seller_id`, `title`, `description`, `rating`, `image`, `price`) VALUES
(?,?,?,?,?,?)';

$stmt = $db->prepare($query);
if($stmt){
    $stmt->bind_param('issisi',$seller_id, $title, $description, $rating, $image, $price);

    $seller_id = 1;
    $title = "Perfume";
    $description = "perf";
    $rating = 5;
    $image = "tola.png";
    $price = 2500;
    $stmt->execute();    
}

?> 
