<?php
// echo "HelloWorld!";
// the dollar sign $ in the variable declaration. datatypes still retain their syntax except from objects.
/** PHP is wide space insensive ie. $x = 5; this is for variable declaration 
 * variables are declared with the dollar sign and the assignment operators in php.
 * variables declared are case sensitve meaning that variables a and A are different. 
 * variable names must be descriptive.
 * never allow variabe names contain space of special characters
 * data types include the 
 * (integers i.e 20), (double or floating numbers), boolean(data type for true or  false), 
 * Null (datatype with no variable), strings, arrays(datatype surrounded of box bracket) 
 * in php we have[numeric array],[asscoiative array(they come like the same thing like javascript object but in form of array)]
 * const variable doesn't change just like in javascript
 * HOW SERVERS WORK
 * They are programmed to respond to http request
 * OPERATORS IN PHP
 * 1 Arithmetic operators. (addition subtraction multiplication division, modulus(%), eponent(**))
 * 2 Comparisons Operators. (single equal(assignment), double equal(comarison operator that gives boolean), tripple equal(checks the data tyepe and the vales),!=(not equal), <>not equal, greater than less than etc..)
 * 3. Assignment operator i.e equal to sign. for assigning values to a varibles
 * 4. Conditional Operators. used to check values between booleans. i.e logic gates 
 * 
*/
// $name = 'Emmanuel';
// $age = 30;
// $Height = 5.9;


?>
<?php
$x = 2;
$y = 2;
$z = 1;

if($x == $y){
    print("Hello World");

}elseif($x == $z){
    print("Maybe World");
}
else{
    print("Bye World");
}


/** How to use the 
 * in php we don't need to use plus sign we use the dot sign
 * FOR EACH LOOP: A loop used only on arrays
 * 
*/
// EXAMPLE OF THE FOR EACH STATEMENT IN JS AND PHP

$x = ["Mango", "orange", "Pawpaw"];
foreach($x as $item){
    echo "<br>" .$item;
}







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CLASS</title>
</head>
<body>
   <!-- <section>
    <div>Name: <?php echo$name?> </div>
    <div>age: <?php echo$age?> </div>
    <div> Height: <?php echo$Height?> </div> -->
   </section> 
</body>
<script>
//     let x = 2;
//     let y = 1;
//     let z = 2;

// if(x == y){
//     alert("Hello World")

// }else if(x == z){
//     alert("Maybe World")
// }
// else{
//     alert("Bye World")
// }

// FOR EACH IN JS
var x = ["Mango", "orange", "Pawpaw"];
x.forEach((item)=>{
    console.log(item)
})
</script>
</html>