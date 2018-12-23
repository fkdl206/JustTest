<doctype html>
<html>
<head>
<title>회원가입</title>
</head>
<body>
<form name="join" method="post" action="memberSave.php">
 <h1>회원가입</h1>
 <table border="1">
  <tr>
   <td>아이디</td>
   <td><input type="text" size="30" name="id"></td>
  </tr>
  <tr>
   <td>비밀번호</td>
   <td><input type="password" size="30" name="pwd"></td>
  </tr>
  <tr>
   <td>비밀번호재입력</td>
   <td><input type="password" size="30" name="pwd2"></td>
  </tr>
  <tr>
   <td>이름</td>
   <td><input type="text" size="12" maxlength="10" name="name"></td>
  </tr>
  <tr>
   <td>이메일</td>
   <td><input type="text" size="30" name="email"></td>
  </tr>
 </table>
 <input type=submit value="submit"><input type=reset value="rewrite">
</form>
</body>
</html>