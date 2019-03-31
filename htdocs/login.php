<!DOCTYPE html>


<html><head><meta charset="UTF-8"></head>
<head>
	<title>Login</title>
</head>
</body>
	<h1>Login</h1>
  <form name="login.php" method = "post" action = "main.php">
    <label>아이디: </label>
    <input type = "text" name="id_t">
    <label>비밀번호: </label>
    <input type = "password" name="pw_t">
    <input type = "submit" value="로그인">
  </form>
	<form name="회원가입" method = "post" action = "user_add.php">
		<input type = "submit" value="회원가입">
</body>
<?
  $id = $_REQUEST['id_t'];
  $password = $_REQUEST['pw_t'];

  $connect = mysql_connect("localhost","root","apmsetup");
  mysql_set_charset("utf8",$connect);
  mysql_select_db("dbproject",$connect);

  if(!empty($id))
  {
    $sql="SELECT id FROM user WHERE id='$id' and password='$password'";
    $result = mysql_query($sql,$connect);
    $count=mysql_num_rows($result);

    if($count==1)  //count가 1이라는 것은 아이디와 패스워드가 일치하는 db가 하나 있음을 의미합니다.
    {
			echo "<script>
            document.location.href='main.php';
            </script>";
    }
    else
    {
       echo"Your Login Name or Password is invalid";
    }
  }
?>
</html>
