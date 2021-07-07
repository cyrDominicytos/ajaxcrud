<?php

$love = 0;
$temps = 0;
echo "<Marquee behavior ='scroll' style='font-size: 15px font-weight:bold;color : red;' scrollamount ='300' scrolldelay ='5000'>Bonjour ma chérie </Marquee>";
//echo "<marquee style='color : red;' orientation='left'>Bonjour ma chérie</marquee>";
echo "<br>";
while(1)
{
$temps++;
$love+=2;

echo "Le temps passe : ".$temps."  ";
echo "Et t'aime plus fort : ".$love;
echo "<br>";


}

echo "C'est fini entre nous : ";
echo "<br>";

return 0;

?>