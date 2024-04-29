
<?php 

$a=20;
$b=30;

$c=$a+$b;
echo "Sum:",$c;
?><br>

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
<!--while loop-->
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
