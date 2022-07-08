<?php
        require_once('../Models/db/config.php');
        $conn = mysqli_connect("localhost","root","","csdlbangiay");
		if(!$conn) {
			die("Không kết nối :" . mysql_connect_error());
		}
		mysqli_set_charset($conn,"UTF-8");
        if(isset($_POST["submit"]) && $_POST["admin_username"] != '' && $_POST["admin_password"] != '')
        {
            $ad_user = $_POST['admin_username'];
            $ad_pass = $_POST['admin_password'];
            $ad_pass= md5($ad_pass);
            $sql = "SELECT * FROM acc_admin WHERE admin_user = '$ad_user' AND admin_pass = '$ad_pass'";  
           	$res = mysqli_query( $conn, $sql );
			if(mysqli_num_rows($res) > 0)
			{
				echo "Đăng nhập thành công !!!";
			}
			else
			{
				echo "Bạn đã nhập sai tài khoản hoặc mật khẩu !!~";
			}
        }
        else {
        	echo" Location : loginadmin.php  " ;
        }
        
		
		mysqli_close($conn);
 ?>