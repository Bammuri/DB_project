<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr"></head>
<h1>Search</h1>

<?
$connect = mysql_connect("localhost","root","apmsetup");
mysql_query("set names euc-kr");
mysql_select_db("dbproject",$connect);
$load = $_REQUEST['id'];
?>

<body>
  <form name="search.php" method = "post" action = "user_search_for_modify.php">
    <input type = "submit" value="���ư���">
  </form>
  <fieldset>
  <h2> �����ϱ� </h2>
  <body>
  <form  method = "post" action = "">
    <label><br>���̵�: </label>
    <input type = "text" name="id">
    <label><br>��й�ȣ: </label>
    <input type = "text" name="password">
    <label><br>�̸�: </label>
    <input type = "text" name="name">
    <label><br>�Ҽ�: </label>
    <input type = "text" name="group">
    <label><br>��ȭ��ȣ: </label>
    <input type = "text" name="telnum">
    <input type = "hidden" name ="id" value="<?echo $load?>">
    <input type = "submit" value="����">
  </form>

    <table border="1">
      <thead>
        <tr>
          <th> ���̵�</th>
          <th> ��й�ȣ </th>
          <th> �̸� </th>
          <th> �Ҽ� </th>
          <th> ��ȭ��ȣ </th>
        </tr>
      </thead>
  <tbody>
    <?
      $sql = "SELECT * from user where id='$load';";
        $result =mysql_query($sql,$connect);

      $id = $_REQUEST['id'];
      $password = $_REQUEST['password'];
      $name = $_REQUEST['name'];
      $group = $_REQUEST['group'];
      $telnum = $_REQUEST['telnum'];

      $where_arr = array();
      if(!empty($id)){ $where_arr[] = "id='$id'";}
      if(!empty($password)){ $where_arr[] = "password='$password'";}
      if(!empty($name)){ $where_arr[] = "name='$name'";}
      if(!empty($group)){ $where_arr[] = "grou='$group'";}
      if(!empty($telnum)){ $where_arr[] = "telnum='$telnum'";}
      $where = $where_arr ? implode(", ", $where_arr) : "1=1";

      $sql = "UPDATE user SET $where WHERE id='$load';";
      mysql_query($sql,$connect);

      $sql = "SELECT * from user where id='$load';";

      $result = mysql_query($sql,$connect);

      $fields = mysql_num_fields($result);
      while($row = mysql_fetch_row($result)) {
        echo("<tr>");

        for($i=0;$i<$fields;$i++) {
          echo("<td> $row[$i] </td>");
        }
        echo("<tr>");
        }

          ?>
  </tbody>
</table>

</fieldset>

</html>
