<?php
$a=$_POST['a'];
$b=$_POST['b'];
$button = $_POST['operation'];
switch($button){
    case "addition":
        echo $a+$b;
        break;        
    case "subtraction":
        echo $a-$b;
        break; 
    case "multiplication":
        echo $a*$b;
        break; 
    case "division":
        echo $a/$b;
        break;           
    default:
        echo "no button was pressed";
    }
?>