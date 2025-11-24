<?php 

echo "  count()  \n ";
$num =[1, 2, 3];
echo count($num) . "\n";

echo "  array_push() & array_pop()  \n ";
$name = ["Ebrahim", "Qaid"];
array_push($name, "Saif");
array_pop($name);
array_push($name, "tesst");
print_r($name);


echo " \n\n array_shift()  \n ";
$s_num = ["one", "two", "three"];
array_shift($s_num);
print_r($s_num);


echo " \n\n array_unshift()  \n ";
$uns_num = ["one", "two", "three"];
array_unshift($uns_num, "four");
print_r($uns_num);


echo " \n\n in_array()  \n ";
$elements = ["one", "two", "three"];
if(in_array("three", $s_num)) {
    echo "found \n";
}


echo "  array_merge()  \n ";
$first_array = [1, 2];
$second_array = [5, 6];
$contntainer = array_merge($first_array, $second_array);
print_r($contntainer);


echo " \n\n sort()  \n ";
$elem = [5, 6, 8, 2, 9, 0, 58];
sort($elem);
print_r($elem);

echo " \n\n str_replace()  \n ";
$m = "Ebrahim thobhani";
echo str_replace("thobhani", "Qaid", $m);


?>