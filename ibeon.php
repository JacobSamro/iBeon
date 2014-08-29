<?php
/*
Project iBeon
@original authors Jacob Samro, Reshma Ramesh & Shree Gowtham
@contributers GunaSekar
@started on 25-7-2014 Friday 11:44 PM by Pencil
*/

# removes all spaces
function ib_remSpaces($data)
{
	$data=str_replace(" ", "", $data);
	return $data;
}
# removes all numbers
function ib_remNumbers($data)
{
	$data=preg_replace('/[0-9]+/',"", $data);
	return $data;
}
# removes all symbols
function ib_remSymbols($data)
{
	$data=preg_replace('/[^\p{L}\p{N}\s]/u', '', $data);
	return $data;
}
# removes all except numbers
function ib_onlyNum($data)
{
	$data=preg_replace("/[^0-9]/", "", $data);
	return $data;
}
# removes all except alphabets
function ib_onlyAlpabets($data)
{
	$data=preg_replace("/[^A-Za-z]/", "", $data);
	return $data;
}
# return an integer value of number of "Spaces" in the givein input
function ib_countSpaces($data)
{
	$count=0;
	for ($i=0; $i < strlen($data); $i++) { 
		if($data[$i]==" ")
			$count+=1;
	}
	return $count;
}
# return an integer value of number of "Numbers" in the givein input
function ib_countNum($data)
{
	$data=preg_replace("/[^0-9]/", "", $data);
	return strlen($data);
}

# return an integer value of number of "Alpabets" in the givein input
function ib_countAlpabets($data)
{
	$data=preg_replace("/[^A-Za-z]/", "", $data);
	return strlen($data);
}

function ib_strNext($data)
{
	$dNum=array();
	for ($i=0; $i < strlen($data); $i++) { 		$dNum[$i]=ord($data[$i])+1;	}
	$data="";
	for ($i=0; $i < sizeof($dNum); $i++) { 		$data.=chr($dNum[$i]);	}
	return $data;
}

function ib_strPrev($data)
{
	$dNum=array();
	for ($i=0; $i < strlen($data); $i++) { 		$dNum[$i]=ord($data[$i])-1;	}
	$data="";
	for ($i=0; $i < sizeof($dNum); $i++) { 		$data.=chr($dNum[$i]);	}
	return $data;
}
?>
