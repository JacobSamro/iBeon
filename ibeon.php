<?php
/*
Project iBeon 2
@original author Jacob Samro
@started on 01-12-2014 Monday @ 9:52 PM.
*/

class ibeon {
# removes all spaces
function remSpaces($data)
{
	$data=str_replace(" ", "", $data);
	return $data;
}
# removes all numbers
function remNumbers($data)
{
	$data=preg_replace('/[0-9]+/',"", $data);
	return $data;
}
# removes all symbols
function remSymbols($data)
{
	$data=preg_replace('/[^\p{L}\p{N}\s]/u', '', $data);
	return $data;
}
# removes all except numbers
function onlyNumbers($data)
{
	$data=preg_replace("/[^0-9]/", "", $data);
	return $data;
}
# removes all except alphabets
function onlyAlpabets($data)
{
	$data=preg_replace("/[^A-Za-z]/", "", $data);
	return $data;
}
# return an integer value of number of "Spaces" in the givein input
function countSpaces($data)
{
	$count=0;
	for ($i=0; $i < strlen($data); $i++) { 
		if($data[$i]==" ")
			$count+=1;
	}
	return $count;
}
# return an integer value of number of "Numbers" in the givein input
function countNumbers($data)
{
	$data=preg_replace("/[^0-9]/", "", $data);
	return strlen($data);
}

# return an integer value of number of "Alpabets" in the givein input
function countAlpabets($data)
{
	$data=preg_replace("/[^A-Za-z]/", "", $data);
	return strlen($data);
}

function strNext($data)
{
	$dNum=array();
	for ($i=0; $i < strlen($data); $i++) { 	$dNum[$i]=ord($data[$i])+1;	}
	$data="";
	for ($i=0; $i < sizeof($dNum); $i++) { 	$data.=chr($dNum[$i]);	}
	return $data;
}

function strPrev($data)
{
	$dNum=array();
	for ($i=0; $i < strlen($data); $i++) { 		$dNum[$i]=ord($data[$i])-1;	}
	$data="";
	for ($i=0; $i < sizeof($dNum); $i++) { 		$data.=chr($dNum[$i]);	}
	return $data;
}

}
?>
