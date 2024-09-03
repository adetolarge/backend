<?php

$submitted = isset($_GET["UserName"], $_POST["FORM"]);
if($submitted){
    $username =  $_GET["username"];
    echo $username;
}
?>

<form action="" method="post">
    <input type="text" name="Username" placeholder="username">
    <button name="Form1">Submit</button>

</form>;