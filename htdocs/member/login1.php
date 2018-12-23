<?php
session_start();

if(isset($_SESSION['id']))
{
    echo $_SESSION['id'];
    echo " 님 안녕하세요!";
}else{
  echo "<script>location.replace('./login2.php');</script>";
}

?>

<html>
  <head>
  </head>
  <body>
    <button onclick="location.href='./logout.php'"> 로그아웃 </button>
  </body>

</html>
