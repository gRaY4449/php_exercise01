<?php 

echo 'enter $point:';
$point=trim(fgets(STDIN));

if ($point%2==0) {
    echo '$point is a even number.';
}
if ($point%2!=0) {
    echo '$poijnt is a odd number.';
}

?>
