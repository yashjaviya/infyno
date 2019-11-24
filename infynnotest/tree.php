<!DOCTYPE html>
<html>
<body>
<style>
span {
    width: 12px !important;
    display: inline-block;
    text-align: center;
}
</style>
<?php

$nu = 1;
$ch = 65;
$row = 7;
$space = $row * 2 -2;
for($i=1;$i<=$row;$i++)
{
	if($i<=1)
    {
      print_r('&nbsp');
    }
	for($y=$space;$y>=1;$y--)
	{
    	
		print_r("&nbsp");	
	}
    for($a=$i;$a>1;$a--)
    {
    	print_r("<span>".chr($ch)."</span>");
        $ch++;
        break;
    }
    if($i>=3)
    {
    	for($b=$i;$b>=3;$b--)
        {
        	print_r('*');	
        }
    }
    for($k=$i;$k<=$i;$k++)
    {
   		print_r("(");
        print_r($nu);
        print_r(")");
        $nu++;
    }
    if($i>=3)
    {
    	for($b=$i;$b>=3;$b--)
        {
        	print_r('*');	
        }
    }
    for($a=$i;$a>1;$a--)
    {
    	print_r("<span>".chr($ch)."</span>");
        $ch++;
        break;
    }
	print_r('</br>');
    	$space--;
        $space--;
} 
?> 

</body>
</html>