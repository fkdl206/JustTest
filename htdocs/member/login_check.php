<?php
session_start();
require_once '../dbconfig.php';

$id=$db->real_escape_string($_POST['id']);
$pass=$db->real_escape_string($_POST['pass']); /*입력값을 독립적으로 지키기 위하여 사용
연결의 현재 문자 세트를 고려하여 SQL 문에서 사용할 특수 문자를 문자열에서 이스케이프 처리합니다.라고 php공식사이트에 기재되어있음*/
?>

<html>

  <head>
    <meta charset="utf-8">
    <title>login_ok</title>
  </head>

  <body>
    <?php
    $sql = "select id, password from member where id='{$id}' and password='{$pass}'";

    $result = $db->query($sql);
    $row = $result->num_rows;

    if($row)
    {
      $_SESSION['id'] = $id;
      echo "<script>alert('로그인에 성공하셨습니다.');
      window.close();
      </script>";
    }else{
      echo "<script>alert('로그인에 실패하셨습니다.');
      location.replace('./login2.php');
      </script>";
    }
    ?>
  </body>
</html>
