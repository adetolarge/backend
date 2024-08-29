<?php
echo "HelloWorld!";
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
$name = 'Emmanuel';
$age = 30;
$Height = 5.9;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CLASS</title>
</head>
<body>
   <section>
    <div>Name: <?php echo$name?> </div>
    <div>age: <?php echo$age?> </div>
    <div> Height: <?php echo$Height?> </div>
   </section> 
</body>
</html>