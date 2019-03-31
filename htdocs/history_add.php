<!DOCTYPE html>

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr"></head>
<h1>Update</h1>

<?
$connect = mysql_connect("localhost","root","apmsetup");
mysql_query("set names euc-kr");
mysql_select_db("dbproject",$connect);
echo $_POST['id_t'];
echo $_POST['pw_t'];
$id_use = $_POST['id_t'];
$pw_use = $_POST['pw_t'];
?>
<body>
  <form name="search.php" method = "post" action = "history_search_for_add.php">
    <input type = "hidden" value = '<?echo $id_use?>' name = "id_t">
    <input type = "hidden" value = '<?echo $pw_use?>' name = "pw_t">
    <input type = "submit" value="다른북마크 추가">
  </form>
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

      <?
        $no = $_REQUEST['no'];
        $name = $_REQUEST['name'];
        $bigname = $_REQUEST['bigname'];
        $midname = $_REQUEST['midname'];
        $stdname = $_REQUEST['stdname'];


        echo $id_use;
        if(!empty($no)) {
          $sql = "insert into history values
          ('$id_use','{$no}', '{$name}', '{$bigname}',  '{$midname}',
           '{$stdname}')";

        $result = mysql_query($sql,$connect);


        $sql = "select * from history;";
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
<body>
</html>
