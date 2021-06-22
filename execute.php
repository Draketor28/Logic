<?php
if(isset($_POST['submit_form']))
{
$bread = $_POST['bread'];
$vada = $_POST['vada'];
$samosa = $_POST['samosa'];
$costVadaPav = $_POST['cvpav'];
$costSamosaPav = $_POST['cspav'];
$samosaPav = 0;
$vadaPav = 0;
for(;$bread>1;$bread-=2)
{
if($vada > 0)
{
$vadaPav++;
$vada--;
}
else if($samosa>0)
{
$samosaPav++;
$samosa--;
}
else
{
break;
}
}
    
$tot = ($costVadaPav*$vadaPav)+($costSamosaPav*$samosaPav);
echo  "Maximum profit is: " . $tot;
}
?>