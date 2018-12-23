<?php
require_once '../dbconfig.php';

$name=$_POST['name'];
$id = $_POST['id'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$phone1 = $_POST['phone1'];
$phone2 = $_POST['phone2'];
$phone3 = $_POST['phone3'];
$email = $_POST['email'];
$date = date('Y-m-d');

if($pass1 == $pass2)

{

	$password = $pass1;

} else

{

	header("Content-Type: text/html; charset=UTF-8");

	echo "<script>alert('비밀번호가 맞지 않습니다.');history.back();</script>";

	exit;
}

$sql = "select * from member where id = '$id'";
$result = $db->query($sql);

$row = $result->num_rows;

if($row){
  echo "<script>alert('중복된 ID가 있습니다.');history.back();</script>";
}

$sql="insert into member (name, id, password, phone1, phone2, phone3, email, regdate)
VALUES ('$name','$id','$password','$phone1','$phone2','$phone3','$email','$date')";

$result = $db->query($sql);


if($result)
{
  echo "<script>alert('회원가입 되었습니다. 로그인 화면으로 이동합니다.');location.replace('./login2.php');</script>";

  exit;

} else
{

  header("Content-Type: text/html; charset=UTF-8");
	echo "<script>alert('회원가입에 실패하였습니다.');</script>";

	exit;

}
?>
