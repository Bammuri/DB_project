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
	<h1><br>���� ��Ǻм��� ���� ����� �������� �ý���(��ġ��ver.)</br>
	���뺸�뿡 ���Ű� ȯ���մϴ�~</h1>
	<img src="bonobono.jpg" border="0">
	<form name="main.php"
	method="post" action="market_search.php">
	<input type = "hidden" value = "<?echo $id_tmp;?>" name = "id_t">
	<input type = "hidden" value = "<?echo $pw_tmp;?>" name = "pw_t">
	<input type="submit" value="�󰡰˻�&��ġ����">
	</form>
	<form name="main.php"
	method="post" action="market_add.php">
	<input type = "hidden" value = "<?echo $id_tmp;?>" name = "id_t">
	<input type = "hidden" value = "<?echo $pw_tmp;?>" name = "pw_t">
	<input type="submit" value="���߰��ϱ�">
	</form>
	<form name="main.php"
	method="post" action="market_search_for_modify.php">
	<input type = "hidden" value = "<?echo $id_tmp;?>" name = "id_t">
	<input type = "hidden" value = "<?echo $pw_tmp;?>" name = "pw_t">
	<input type="submit" value="�󰡼����ϱ�">
	</form>
	<form name="main.php"
	method="post" action="market_search_for_delete.php">
	<input type = "hidden" value = "<?echo $id_tmp;?>" name = "id_t">
	<input type = "hidden" value = "<?echo $pw_tmp;?>" name = "pw_t">
	<input type="submit" value="�󰡻����ϱ�">
	</form>
	<form name="main.php"
	method="post" action="user_search.php">
	<input type = "hidden" value = "<?echo $id_tmp;?>" name = "id_t">
	<input type = "hidden" value = "<?echo $pw_tmp;?>" name = "pw_t">
	<input type="submit" value="ȸ���˻��ϱ�">
	</form>
	<form name="main.php"
	method="post" action="user_search_for_modify.php">
	<input type = "hidden" value = "<?echo $id_tmp;?>" name = "id_t">
	<input type = "hidden" value = "<?echo $pw_tmp;?>" name = "pw_t">
	<input type="submit" value="ȸ�������ϱ�">
	</form>
	<form name="main.php"
	method="post" action="user_delete.php">
	<input type="submit" value="ȸ�������ϱ�">
	</form>
	<form name="main.php"
	method="post" action="history_search.php">
	<input type = "hidden" value = "<?echo $id_tmp;?>" name = "id_t">
	<input type = "hidden" value = "<?echo $pw_tmp;?>" name = "pw_t">
	<input type="submit" value="ȸ���ϸ�ũ����">
	</form>
	<form name="main.php"
	method="post" action="history_my.php">
	<input type = "hidden" value = "<?echo $id_tmp;?>" name = "id_t">
	<input type = "hidden" value = "<?echo $pw_tmp;?>" name = "pw_t">
	<input type="submit" value="���ϸ�ũ����">
	</form>
	<form name="main.php"
	method="post" action="history_search_for_add.php">
	<input type = "hidden" value = "<?echo $id_tmp;?>" name = "id_t">
	<input type = "hidden" value = "<?echo $pw_tmp;?>" name = "pw_t">
	<input type="submit" value="ȸ���ϸ�ũ�߰�">
	</form>
	<form name="main.php"
	method="post" action="history_search_for_delete.php">
	<input type = "hidden" value = "<?echo $id_tmp;?>" name = "id_t">
	<input type = "hidden" value = "<?echo $pw_tmp;?>" name = "pw_t">
	<input type="submit" value="ȸ���ϸ�ũ����">
	</form>
	<form name="main.php"
	method="post" action="login.php">
	<input type="submit" value="�α׾ƿ�">
	</form>

</body>
	<table border="1">
	  <thead>
	    <tr>
	      <th> ID </th>
	      <th> ��й�ȣ</th>
	      <th> �̸� </th>
	      <th> �Ҽ� </th>
	      <th> ��ȭ��ȣ </th>
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
