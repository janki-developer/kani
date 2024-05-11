<!--php keywords are not case sensative like(if,else,while,echo),classes,function,user-difined function are not cs-->
<!--php variable are start with character and underscore(not by number)(it contains alpha numaric character and _(A-z,0-9,and-))-->
<!--all variable name are case sencative-->
<!--php variable are case sensative in php-->
<!--php 8.2.12 is latest version of php(php 7 supports new operator <=>)-->
<!-- php statement end with ;-->
<!--php variable scope 1.local 2.global 3.static-->


<!--variable declaration in php-->
<?php 

$a=20;
$b=30;

$c=$a+$b;
echo "Sum:",$c;
?><br>

<!--sum of two number in php-->
<?php 
$a=200;
$b=300;
echo "sum of two nimber is:",$a+$b;
?><br>

<!--php support data type string,integer,float(double),boolean,array,object,null,resource(we can assign a one value to multiple variable)-->
<!--to get the data type we can use var_dump--><br>
<?php 
$a= null;
var_dump($a); //is used to find the datatype of php
?><br> 

<!--switch case with function in php-->
<?PHP 
$color="green";

switch($color){
    case "red":
echo "hello";

break;
case "green":
    echo "welcome";
    break;
}
?>
<br>

<!--switch with defoult value in php-->
<?php 
$color="red";

switch($color){
    case "red":
        echo "hello";
        break;
        case "green":
            echo "welcome";
            break;
            default:
            echo "neigther";

}
?><br>
<!--while loop. it at stating first check the condition if its true then it enters the loop and executes the block of code(entry control loop)-->
<!--four type of loop in php for,while , do while, foreach-->
<?php 
$i=1;
while($i <6){
echo "$i <br>";
$i++;
}
?><br>

<?php // do while loop
$i=1;
do{
    echo $i;
    $i++;
}
    while($i < 10)

?><br>

<!--for loop-->
<?php 
for($i=0; $i<20; $i++){
    echo "$i";
}
?><br>

<!-- foreach loop-->
<?php 
$colors = array("red" , "green" , "blue" , "yellow");
foreach($colors as $x){
    echo  "$x <br>";
}
?><br>

<!--while loop with break stetament(stop the loop when it get if value)-->
<?php 
$i=1;
while($i <100){
    if($i==10) break;
echo "$i";
$i++;
}
?><br>
<!--while loop with continue stetament(6 skip and continue forward and backword value)-->
<?php 
$i=0;
while($i <19){
$i++;
if($i==6) continue;
echo "$i";
}
?><br>
<?php 
$i=0;
while($i <100){
    echo "$i<br>";
    $i+=10;
}
?><br>


<?php 
echo phpversion();// it desdribe the latest version of php
?><br>

<!--php string function-->
<?php 
$a="janki";
$b="kami";
echo strlen ($a);
//echo strlen('hello php'); another way to find strlength
?><br>

<?php 
echo strrev('hello php string'); // for reverse string
?><br>

<?php 
$oldtxt = "hello janki";
echo str_replace("janki", "kami", $oldtxt);
?><br>

<?php //php multply we can add like00(+,-,/)
echo 100*200
?><br>

<?php //php conditional ststement if, elseif, ifelse, if elseif else, switch
$m=40;
$n=10;
if ($m > $n) { //
  echo "hello php";
}
?><br>

<?php // if two condition not same then print hello php world
$m=40;
$n=10;
if ($m != $n) { //
  echo "hello php world";
}
?><br>

<?php // if condition same then print yes otherwise no
$m=40;
$n=10;
if ($m == $n) { //
  echo "yes";
} else{
    echo "no";
}
?><br>

<?php // if t is equal s then print 1, t>s then print 2 otherwise 3
$t=50;
$s=50;
if($t==$s){
    echo "1";
}elseif($t > $s){
    echo "2";
}else{
     echo "3";
}
?>

