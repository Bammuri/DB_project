<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr"></head>
<h1>Search</h1>

<?
$connect = mysql_connect("localhost","root","apmsetup");
mysql_query("set names euc-kr");
mysql_select_db("dbproject",$connect);
$id_use = $_POST['id_t'];
$pw_use = $_POST['pw_t'];
echo $_POST['id_t'];
echo $_POST['pw_t'];
?>

<body>
  <form name="search_for_delete.php" method = "post" action = "main.php">
    <input type = "hidden" value = "<?echo $_POST['id_t'];?>" name = "id_t">
    <input type = "hidden" value = "<?echo $_POST['pw_t'];?>" name = "pw_t">
    <input type = "submit" value="��������">
  </form>
  <fieldset>
  <h2> �����Ϸ��� �ϸ�ũ�� ���̵�� ��й�ȣ�� �Է��ϼ���</h2>
  <form name="search.php" method = "post" action = "">
    <label><br>���̵�: </label>
    <input type = "text" name="id">
    <label><br>��й�ȣ: </label>
    <input type = "text" name="password">
    <input type = "submit" value="�˻�">
    <input type = "submit" value="�ʱ�ȭ">
  </form>

    <table border="1">
      <thead>
        <tr>
          <th> ID </th>
          <th> ��ȣ�� </th>
          <th> �󰡾��ҹ�ȣ </th>
          <th> ��з��� </th>
          <th> �ߺз��� </th>
          <th> ǥ�ػ���з��� </th>
          <th> ���� </th>
        </tr>
      </thead>
  <tbody>
    <?
    $id = $_REQUEST['id'];


      $where_arr = array();
      if(!empty($id)){ $where_arr[] = "id like '%$id%'";}


      $where = $where_arr ? implode(" and ", $where_arr) : "1=1";

      $sql = "SELECT * from history where $where";
      $result = mysql_query($sql,$connect);

      $fields = mysql_num_fields($result);
      while($row = mysql_fetch_row($result)) {
        echo("<tr>");

        for($i=0;$i<$fields;$i++) {
          echo("<td> $row[$i] </td>");
        }
        echo("<td>
        <form method = 'post' action = 'history_delete.php'>
        <input type= 'hidden' name='id' value='$row[0]' size='5'>
        <input type= 'hidden' name='no' value='$row[1]' size='5'>
        <input type= 'hidden' name='id_t' value='$id_use' size='5'>
        <input type= 'hidden' name='pw_t' value='$pw_use' size='5'>
        <input type='submit' value='����'>
        </td>");
        echo("<tr>");
      }

      if($_POST['num']) {
        $tmp = $_POST['num'];
        $sql_2 = "DELETE FROM history where ID='$id_use' and no='$tmp';";
        $result = mysql_query($sql_2,$connect);
      }

      mysql_close();
      ?>
  </tbody>
</table>


</html>
