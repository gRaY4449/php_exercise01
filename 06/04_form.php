<?php 

$num1=$_GET['num1'];
$num2=$_GET['num2'];
$operator=$_GET['operator'];

switch ($operator) {
    case 'addition':
        echo "$num1+$num2=".$num1+$num2;
        break;
    case 'subtraction':
        echo "$num1-$num2=".$num1-$num2;
        break;
    case 'multiplication':
        echo "$num1*$num2=".$num1*$num2;
        break;
    case 'division':
        echo "$num1/$num2=".$num1/$num2;
        break;
    default:
        echo 'please enter correct operator';
        break;
}


switch ($operator) {
    case 'addition':
        $operator_sign='+';
        $last_value=$num1+$num2;
        break;
    case 'subtraction':
        $operator_sign = '-';
        $last_value = $num1-$num2;
        break;
    case 'multiplication':
        $operator_sign = '*';
        $last_value = $num1*$num2;
        break;
    case 'division':
        $operator_sign = '/';
        $last_value = $num1/$num2;
        break;
    default:
        echo 'please enter correct operator';
        break;
}
echo "<br>$num1 $operator_sign $num2 = $last_value";

?>
