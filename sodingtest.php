<?php
$input = array(1, 2);
$sum = 0;

while (add($input) <= 4000000) {
    array_push($input, add($input));
}

foreach ($input as $num) {
    if ($num % 2 == 0)
        $sum = $sum+$num;
}

$allnum = implode(', ', $input);

$setcontent = $allnum."<br />Even value sum total : ".$sum;
echo $setcontent;

function add($input)
{
    $addtotal = 0;
    $arrcount = count($input);
    $lasttwo = array_slice($input, $arrcount-2);
    foreach($lasttwo as $thisnum) {
        $addtotal = $addtotal+$thisnum;
    }
    return $addtotal;
}
?>