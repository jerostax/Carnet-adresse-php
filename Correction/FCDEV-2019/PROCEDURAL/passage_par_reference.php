<?php 

$var1 = "Mickey";
$var2 = &$var1;

echo $var1.'<br>';
echo $var2.'<br>';

$var1 = "Minnie";

echo $var1.'<br>';
echo $var2.'<br>';

function incremente(&$var)
{
	return ++$var;
}

$mavar = 1;

echo incremente($mavar).'<br>';
echo incremente($mavar).'<br>';
echo incremente($mavar).'<br>';
echo incremente($mavar).'<br>';
echo incremente($mavar).'<br><br>';

echo $mavar;







