<?
echo $_POST['id_t'];
echo $_POST['pw_t'];
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr"></head>
<h1>Search</h1>

<?
$connect = mysql_connect("localhost","root","apmsetup");
mysql_query("set names euc-kr");
mysql_select_db("dbproject",$connect);
$id_use = $_POST['id_t'];
?>

<body>
  <form name="search.php" method = "post" action = "main.php">
    <input type = "hidden" value = "<?echo $_POST['id_t'];?>" name = "id_t">
    <input type = "hidden" value = "<?echo $_POST['pw_t'];?>" name = "pw_t">
    <input type = "submit" value="메인으로">
  </form>
  <fieldset>

    <table border="1">
      <thead>
        <tr>
          <th> ID </th>
          <th> 상가업소번호 </th>
          <th> 상호명 </th>
          <th> 대분류명 </th>
          <th> 중분류명 </th>
          <th> 표준산업분류명 </th>
        </tr>
      </thead>
  <tbody>
    <?
      $ID = $_REQUEST['ID'];
      $no = $_REQUEST['no'];
      $name = $_REQUEST['name'];
      $bigname = $_REQUEST['bigname'];
      $midname = $_REQUEST['midname'];
      $stdname = $_REQUEST['stdname'];

      $where_arr = array();
      if(!empty($no)){ $where_arr[] = "no like '%$ID%'";}
      if(!empty($no)){ $where_arr[] = "no like '%$no%'";}
      if(!empty($name)){ $where_arr[] = "name like '%$name%'";}
      if(!empty($bigname)){ $where_arr[] = "bigname like '%$bigname%'";}
      if(!empty($midname)){ $where_arr[] = "midname like '%$midname%'";}
      if(!empty($stdname)){ $where_arr[] = "stdname like '%$stdname%'";}

      $where = $where_arr ? implode(" and ", $where_arr) : "1=1";

      $sql = "SELECT * from history ";

          $result = mysql_query($sql,$connect);

          $fields = mysql_num_fields($result);
          while($row = mysql_fetch_row($result)) {
            echo("<tr>");

            for($i=0;$i<$fields;$i++) {
              echo("<td> $row[$i] </td>");}
            }
          echo("<tr>");
          mysql_close()
          ?>
  </tbody>
</table>
</html>
