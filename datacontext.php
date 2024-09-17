<?php
session_start()
// $db = new mysqli("localhost", "root","", "tola_practice");
// if ($db->connect_errno){
//     die;
// }


// $db ->query("INSERT into `product_name`
// (`seller_id`, `title`, `description`, `rating`, `image`, `price`) VALUES
// (?,?,?,?,?,?)");
// $id = 1;
// $query = 'INSERT into `product_name`
// (`seller_id`, `title`, `description`, `rating`, `image`, `price`) VALUES
// (?,?,?,?,?,?)';

// $stmt = $db->prepare($query);
// if($stmt){
//     $stmt->bind_param('issisi',$seller_id, $title, $description, $rating, $image, $price);

//     $seller_id = 1;
//     $title = "Perfume";
//     $description = "perf";
//     $rating = 5;
//     $image = "tola.png";
//     $price = 2500;
//     $stmt->execute();    
// }
// // ?> 

<?php
$db = new mysqli("localhost", "root","", "tola_practice");

if ($db->connect_errno){
    die;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if($_SESSION["CSRF-TOKEN"] != $_POST["CSRF-Token"]){
        echo "Error Veryfying CSRF TOKEN";
    }else{
        $id = $_POST['id'];
        $seller_id = $_POST['seller_id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $rating = $_POST['rating'];
        $image = $_POST["image"];
        $price = $_POST['price'];
    
        $query = ("INSERT INTO product_name (`id`, `seller_id`, `title`, `description`, `rating`, `image`, `price`) VALUES (?, ?, ?, ?, ?, ?, ?)");
    
        $stmt = $db->prepare($query);
        if($stmt){
            $stmt->bind_param('iissisi',$id, $seller_id, $title, $description, $rating, $image, $price);
            $id;
            $seller_id;
            $title;
            $description;
            $rating;
            $image;
            $price;
            $stmt->execute();    
        }
    }




    // if ($db) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: ";
    // }
}
$db->close();

$_session["CSRF-Token"] = uniqid();


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
    <input type="hidden" name="CSRF-token" value="<?php echo $_SESSION["CSRF-TOKEN"]?>"> 
    <input type="submit" value="Submit">
</form>

