<?php
		
		$ip = $_SERVER["REMOTE_ADDR"]; 
		$ch = curl_init();
		$str ="http://ip.taobao.com/service/getIpInfo.php?ip=".$ip."";
		curl_setopt($ch,CURLOPT_URL,$str);
		curl_setopt ($ch,CURLOPT_RETURNTRANSFER,true );
		$country = curl_exec($ch);
		print_r($country);
?>