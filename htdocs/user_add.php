<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr"></head>
<h1>ȸ���߰�</h1>

<?
$connect = mysql_connect("localhost","root","apmsetup");
mysql_query("set names euc-kr");
mysql_select_db("dbproject",$connect);
?>
<form name="�α�������" method = "post" action = "login.php">
  <input type = "hidden" value = "<?echo $_POST['id_t'];?>" name = "id_t">
  <input type = "hidden" value = "<?echo $_POST['pw_t'];?>" name = "pw_t">
  <input type = "submit" value="�α�������">
</form>
<body>

  <fieldset>
  <h2> ȸ���߰�</h2>
  <form name="update.php" method = "post" action = "">
    <label><br>ID: </label>
    <input type = "text" name="id">
    <label><br>��й�ȣ: </label>
    <input type = "text" name="password">
    <label><br>�̸�: </label>
    <input type = "text" name="name">
    <label><br>�Ҽ�: </label>
    <input type = "text" name="group">
    <label><br>��ȭ��ȣ: </label>
    <input type = "text" name="telnum">
    <input type = "submit" value="ȸ������">
  </form>

  <table border="1">
    <thead>
      <tr>
        <th> ID</th>
        <th> ��й�ȣ </th>
        <th> �̸� </th>
        <th> �Ҽ� </th>
        <th> ��ȭ��ȣ </th>

      </tr>+
    </thead>


<?
  $id = $_REQUEST['id'];
  $password = $_REQUEST['password'];
  $stdname = $_REQUEST['name'];
  $name = $_REQUEST['group'];
  $group = $_REQUEST['telnum'];


  if(!empty($id)) {
      $sql = "insert into user values
      ('{$id}', '{$password}', '{$stdname}', ' {$name}', '{$group}');";

    $result = mysql_query($sql,$connect);


    $sql = "select * from user ;";
    $result = mysql_query($sql,$connect);

    $fields = mysql_num_fields($result);
    while($row = mysql_fetch_row($result)) {
      echo("<tr>");

      for($i=0;$i<$fields;$i++) {
        echo("<td> $row[$i] </td>");
      }
      echo("<tr>");
    }
  }
  else{  $sql = "select * from user ;";
    $result = mysql_query($sql,$connect);

    $fields = mysql_num_fields($result);
    while($row = mysql_fetch_row($result)) {
      echo("<tr>");

      for($i=0;$i<$fields;$i++) {
        echo("<td> $row[$i] </td>");
      }
      echo("<tr>");
    }
  }
  ?>
  </table>


  </fieldset>
  </body>
</html>
