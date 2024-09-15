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
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    <input type="submit" value="Submit">
</form>
<?php
// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Insert data into database
    $sql = "INSERT INTO your_table_name (name, email) VALUES ('$name', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

