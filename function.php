<?php
function pr($arr){
	echo '<pre>';
	print_r($arr);
}

function prx($arr){
	echo '<pre>';
	print_r($arr);
	die();
}

function get_safe_value($con,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($con,$str);
	}
}
function get_Data($con,$table){
    $sql = "select * from $table";
    $res = mysqli_query($con,$sql);
    $data = array();
    while($row=mysqli_fetch_assoc($res)){
		$data[]=$row;
	}
	return $data;
}
?>