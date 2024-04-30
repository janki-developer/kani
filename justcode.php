<!--php keywords are not case sensative like(if,else,while,echo),classes,function,user-difined function are not cs-->
<!--php variable are start with character and underscore(not by number)(it contains alpha numaric character and _(A-z,0-9,and-))-->
<!--php variable are case sensative in php-->

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
var_dump($a);
?><br> 

<!--switch case in php-->
<?PHP 
$color="red";
$color="green";

switch($color){
    case "red":
echo "hello";
break;
case "green":
    echo "welcome";
    break;
}
?><br>
<!--switch with defoult value in php-->
<?php
switch($color){
    case "red":
echo "hello";
break;
case "yellow":
    echo "welcome";
    break;

    default:
    echo "neighter";
}
?><br>
<!--while loop. it at stating first check the condition if its true then it enters the loop and executes the block of code(entry control loop)-->
<?php 
$i=1;
while($i <6){
echo "$i";
$i++;
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
?>
