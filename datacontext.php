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
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="id">id:</label>
    <input type="text" id="id" name="id"><br><br>
    <label for="seller_id">seller_id:</label>
    <input type="text" id="seller_id" name="seller_id"><br><br>
    <label for="title">title:</label>
    <input type="text" id="title" name="title"><br><br>
    <label for="description">description:</label>
    <input type="text" id="description" name="description"><br><br>
    <label for="rating">rating:</label>
    <input type="text" id="rating" name="rating"><br><br>
    <label for="image">image:</label>
    <input type="file" id="image" name="image"><br><br>
    <label for="price">price:</label>
    <input type="text" id="price" name="price"><br><br>   
    <input type="submit" value="Submit">
</form>
