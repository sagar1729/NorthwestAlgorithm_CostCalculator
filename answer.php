<?php include('header.php'); ?>
<div id="content">
<?php
$rows=$_POST["rows"];
$cols=$_POST["cols"];
echo "<br/>";
for($i=0;$i<$rows;$i++)
{
for($j=0;$j<$cols;$j++)
{
$a[$i][$j]= $_POST["{$i}{$j}"];
}
echo "<br/>";
}
echo "<br/>Supply:";
for($i=0;$i<$rows;$i++)
{
echo " ".$_POST["s{$i}"];
$a[$i][$cols]=$_POST["s{$i}"];
}
echo "<br/>Demand:";
for($j=0;$j<$cols;$j++)
{
echo " ".$_POST["d{$j}"];
$a[$rows][$j]=$_POST["d{$j}"];
}
echo "<br/>";
$a[$rows][$cols]=$a[0][$cols]+$a[1][$cols]+$a[2][$cols];
$sum=0;
do
{
$count=0;
$flag=0;
$r=$rows+1;
$c=$cols+1;
for($i=0;$i<($r-1);$i++)
{
for($j=0;$j<($c-1);$j++)
{
if(($a[$i][$c-1]!=0)&&($a[$r-1][$j]!=0)&&$flag==0)
{
$min=$a[$i][$j];
$row=$i;
$col=$j;
$flag=1;
$count++;
}
}
}
$supply=$a[$row][$c-1];
$demand=$a[$r-1][$col];
if($supply>=$demand)
{
$temp=$supply-$demand;
$a[$row][$col]=$a[$row][$col]*$demand;
$sum=$sum+$a[$row][$col];
$a[$row][$c-1]=$temp;
$a[$r-1][$col]=0;
}
if($supply<$demand)
{
$temp=$demand-$supply;
$a[$row][$col]=$a[$row][$col]*$supply;
$sum=$sum+$a[$row][$col];
$a[$row][$c-1]=0;
$a[$r-1][$col]=$temp;
}
}while($count!=0);
echo "\n\nTOTAL COST :: \n\n".$sum;
?>
</div>
<?php include('footer.php'); ?>