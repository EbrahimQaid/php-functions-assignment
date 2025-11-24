<?php 

echo "  strlen()  \n ";
echo strlen("Ebrahim Qaid");

echo " \n\n substr()  \n ";
echo substr("Ebrahim Qaid", 8, 11);

echo " \n\n str_replace()  \n ";
echo str_replace("thobhani", "Qaid", "Ebrahim thobhani");

echo " \n\n strtolower()  \n ";
echo strtolower( "   Ebrahim " );


echo " \n\n strtoupper()  \n ";
echo strtoupper("Ebrahim Qaid");

echo " \n\n strpos()  \n ";
echo strpos("Ebrahim Qaid", 8, 11);

echo " \n\n explode()  \n ";
$m = "Ebrahim thobhani";
$exname = explode(",", $m);
print_r($exname);

echo " \n\n implode()  \n ";
$imname = ["Ebrahim", "thobhani"];
echo implode(" - ", $imname);

echo " \n\n trim()  \n ";
echo trim( "   Ebrahim " );


?>