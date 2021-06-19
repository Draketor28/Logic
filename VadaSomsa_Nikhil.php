<?php
$bread = 9;
$vada = 2;
$samosa = 3;
$costVadaPav = 10;
$costSamosaPav = 15;
$samosaPav = 0;
$vadaPav = 0;
for($bread>1;$bread-=2;$bread++)
{
if($samosa>0)
{
$samosaPav++;
$samsosa--;
}
else if($vada > 0)
{
$vadaPav++;
$vada--;
}
else
{
break;
}
}
$tot = $costVadaPav*$vadaPav+$costSamosaPav*$samosaPav;
echo  "Maximum profit is: " +$tot;

?>