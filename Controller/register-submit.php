<?php

// Kết nối cơ sở dữ liệu
$connect = mysqli_connect('localhost', 'root', '', 'csdlbangiay') or die ('Lỗi kết nối'); mysqli_set_charset($connect, "utf8");

error_reporting(0); 

// Dùng isset để kiểm tra Form
if(isset($_POST['register'])){
$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);


if (empty($username)) {
array_push($errors, "Tên đăng nhập là bắt buộc"); 
}
if (empty($email)) {
array_push($errors, "Email là bắt buộc"); 
}
if (empty($password)) {
array_push($errors, "Mật khẩu là bắt buộc"); 
}

// Kiểm tra username hoặc email có bị trùng hay không
$sql = "SELECT * FROM khachhang WHERE username = '$username' OR email = '$email'";

// Thực thi câu truy vấn
$result = mysqli_query($connect, $sql);

$password = md5($password);

// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
if (mysqli_num_rows($result) > 0)
{
echo '<script language="javascript">alert("Đã trùng Tên đăng nhập hoặc Đã trùng Email !"); window.location="login-register.php";</script>';

// Dừng chương trình
die ();
}
else {
$sql = "INSERT INTO khachhang (username, email, password) VALUES ('$username','$email','$password')";
echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="login-register.php";</script>';

if (mysqli_query($connect, $sql)){
echo "Tên đăng nhập: ".$_POST['username']."<br/>";
echo "Mật khẩu: " .$_POST['password']."<br/>";
echo "Email đăng nhập: ".$_POST['email']."<br/>";

}else {
        echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="login-register.php";</script>';
}
}
}
?>