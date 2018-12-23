<?php
 $host = 'localhost';
 $user = 'root';
 $pw = '123456';
 $dbName = 'members';
 $mysqli = new mysqli($host, $user, $pw, $dbName);
 
 $id=$_POST['id'];
 $password=md5($_POST['pwd']);
 $password2=$_POST['pwd2'];
 $name=$_POST['name'];
 $email=$_POST['email'];
 
 $sql = "insert into account_info (id, pwd, name, email)";
 $sql = $sql. "values('$id','$password','$name','$email')";
 if($mysqli->query($sql)){
  echo 'success inserting';
 }else{
  echo 'fail to insert sql';
 }
?>