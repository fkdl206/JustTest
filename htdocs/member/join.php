
<html>
 <head>
  <meta charset="utf-8">
  <title>Join</title>
 </head>

 <body>
 <center>
   <form action=join_ok.php method='post'>
     <table style='margin:0 auto; margin-top:5%;'>

   		<tr>

   			<th colspan='2'>회원가입</th>

   		</tr>

      <tr>

        <td>이름</td>

        <td><input type='text' size='16' name='name'/></td>

      </tr>

   		<tr>

   			<td>아이디</td>

   			<td><input type='text' size='16' name='id'/></td>

   		</tr>

   		<tr>

   			<td>비밀번호</td>

   			<td><input type='password' size='20' name='pass1' minlength='8'/></td>
        <!--minlength설정을 통해 최소길이를 지정하여 무차별대입공격에 대한 위험성을 낮춤-->

   		</tr>

   		<tr>

   			<td>비밀번호 확인</td>

   			<td><input type='password' size='20' name='pass2'/></td>

   		</tr>

      <tr>

        <td>핸드폰</td>

        <td><input type='text' size='4' name='phone1' />
        - <input type='text' size='4' name='phone2' />
      - <input type='text' size='4' name='phone3' /></td>

      </tr>

   		<tr>

   			<td>이메일</td>

   			<td><input type='text' size='16' name='email'/></td>

   		</tr>



   		<tr>

   			<td colspan='2' style='text-align:right;'><input type='submit' value='등록'/>
        <input type=button value="취소" onclick="history.back();"></td>

   		</tr>

   </table>
  </form>
  </body>
</html>
