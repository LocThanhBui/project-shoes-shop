<?php 
	require_once('config.php');
	
	function execute($sql)
	{
		$conn = mysqli_connect( HOST , USERNAME , PASSWORD , DATABASE );

		//INSEET,UPDATE,DELETE
		if(mysqli_query( $conn, $sql ))
		{
			echo "thêm thành công !!!";
		}
		else {
			echo "thêm thất bại !!~";
		}
		

		mysqli_close($conn);
	}
	
	function executeResult($sql){
		$conn = mysqli_connect( HOST , USERNAME , PASSWORD,DATABASE );
		$result = mysqli_query( $conn, $sql );
		$data = array();
		while ($row = mysqli_fetch_array($result,1)) {
			$data[] = $row;
		    
		}
		
		mysqli_close($conn);

		return $data;
	}
	function executeSingleResult($sql){
		$conn = mysqli_connect( HOST , USERNAME , PASSWORD,DATABASE );
		$result = mysqli_query( $conn, $sql );
	 	$row = mysqli_fetch_array($result , 1);
		
		mysqli_close($conn);

		return $row;
	}
	function format_currency($n=0)
	{
		$n = (string)$n;
		$n = strrev($n);
		$res = '';
		for ($i = 0; $i < strlen($n); $i++) {
			if($i%3==0 && $i!=0)
			{
				$res.='.';
			}
			$res.=$n[$i];
		}
		$res = strrev($res);
		return $res;
	}
 ?>