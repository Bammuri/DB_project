<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr"></head>
<head>
	<title>MAIN</title>
</head>

  <?
	echo $_POST['id_t'];
	echo $_POST['pw_t'];
	$id_tmp = $_POST['id_t'];
	$pw_tmp = $_POST['pw_t'];
	?>
	<h1><br>지역 상권분석을 통한 사용자 맞춤정보 시스템(조치원ver.)</br>
	보노보노에 오신걸 환영합니다~</h1>
	<img src="bonobono.jpg" border="0">
	<form name="main.php"
	method="post" action="market_search.php">
	<input type = "hidden" value = "<?echo $id_tmp;?>" name = "id_t">
	<input type = "hidden" value = "<?echo $pw_tmp;?>" name = "pw_t">
	<input type="submit" value="상가검색&위치보기">
	</form>
	<form name="main.php"
	method="post" action="market_add.php">
	<input type = "hidden" value = "<?echo $id_tmp;?>" name = "id_t">
	<input type = "hidden" value = "<?echo $pw_tmp;?>" name = "pw_t">
	<input type="submit" value="상가추가하기">
	</form>
	<form name="main.php"
	method="post" action="market_search_for_modify.php">
	<input type = "hidden" value = "<?echo $id_tmp;?>" name = "id_t">
	<input type = "hidden" value = "<?echo $pw_tmp;?>" name = "pw_t">
	<input type="submit" value="상가수정하기">
	</form>
	<form name="main.php"
	method="post" action="market_search_for_delete.php">
	<input type = "hidden" value = "<?echo $id_tmp;?>" name = "id_t">
	<input type = "hidden" value = "<?echo $pw_tmp;?>" name = "pw_t">
	<input type="submit" value="상가삭제하기">
	</form>
	<form name="main.php"
	method="post" action="user_search.php">
	<input type = "hidden" value = "<?echo $id_tmp;?>" name = "id_t">
	<input type = "hidden" value = "<?echo $pw_tmp;?>" name = "pw_t">
	<input type="submit" value="회원검색하기">
	</form>
	<form name="main.php"
	method="post" action="user_search_for_modify.php">
	<input type = "hidden" value = "<?echo $id_tmp;?>" name = "id_t">
	<input type = "hidden" value = "<?echo $pw_tmp;?>" name = "pw_t">
	<input type="submit" value="회원수정하기">
	</form>
	<form name="main.php"
	method="post" action="user_delete.php">
	<input type="submit" value="회원삭제하기">
	</form>
	<form name="main.php"
	method="post" action="history_search.php">
	<input type = "hidden" value = "<?echo $id_tmp;?>" name = "id_t">
	<input type = "hidden" value = "<?echo $pw_tmp;?>" name = "pw_t">
	<input type="submit" value="회원북마크보기">
	</form>
	<form name="main.php"
	method="post" action="history_my.php">
	<input type = "hidden" value = "<?echo $id_tmp;?>" name = "id_t">
	<input type = "hidden" value = "<?echo $pw_tmp;?>" name = "pw_t">
	<input type="submit" value="내북마크보기">
	</form>
	<form name="main.php"
	method="post" action="history_search_for_add.php">
	<input type = "hidden" value = "<?echo $id_tmp;?>" name = "id_t">
	<input type = "hidden" value = "<?echo $pw_tmp;?>" name = "pw_t">
	<input type="submit" value="회원북마크추가">
	</form>
	<form name="main.php"
	method="post" action="history_search_for_delete.php">
	<input type = "hidden" value = "<?echo $id_tmp;?>" name = "id_t">
	<input type = "hidden" value = "<?echo $pw_tmp;?>" name = "pw_t">
	<input type="submit" value="회원북마크삭제">
	</form>
	<form name="main.php"
	method="post" action="login.php">
	<input type="submit" value="로그아웃">
	</form>

</body>
	<table border="1">
	  <thead>
	    <tr>
	      <th> ID </th>
	      <th> 비밀번호</th>
	      <th> 이름 </th>
	      <th> 소속 </th>
	      <th> 전화번호 </th>
	    </tr>
	  </thead>
	  <tbody>
<?
	$connect = mysql_connect("localhost","root","apmsetup");
	mysql_query("set names euc-kr");
	mysql_select_db("dbproject",$connect);


	$sql = "select * from user;";


	$result = mysql_query($sql,$connect);
	$fields = mysql_num_fields($result);
	while($row = mysql_fetch_row($result)) {
		echo("<tr>");

		for($i=0;$i<$fields;$i++) {
			echo("<td> $row[$i] </td>");
		}


		echo("<tr>");
	}
	mysql_close();


	?>
</tbody>
</table>

</html>
