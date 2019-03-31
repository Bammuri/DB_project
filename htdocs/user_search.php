<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr"></head>
<h1>Search</h1>

<?
$connect = mysql_connect("localhost","root","apmsetup");
mysql_query("set names euc-kr");
mysql_select_db("dbproject",$connect);
?>

<body>
  <form name="search.php" method = "post" action = "main.php">
    <input type = "hidden" value = "<?echo $_POST['id_t'];?>" name = "id_t">
    <input type = "hidden" value = "<?echo $_POST['pw_t'];?>" name = "pw_t">
    <input type = "submit" value="메인으로">
  </form>
  <form name="search.php" method = "post" action = "">
    <label><br>아이디: </label>
    <input type = "text" name="id">
    <label><br>비밀번호: </label>
    <input type = "text" name="password">
    <label><br>이름: </label>
    <input type = "text" name="name">
    <label><br>소속: </label>
    <input type = "text" name="group">
    <label><br>전화번호: </label>
    <input type = "text" name="telnum">
    <input type = "submit" value="검색">
    <input type = "submit" value="초기화">
  </form>

    <table border="1">
      <thead>
        <tr>
          <th> 아이디</th>
          <th> 비밀번호 </th>
          <th> 이름 </th>
          <th> 소속 </th>
          <th> 전화번호 </th>
        </tr>
      </thead>
  <tbody>
    <?
      $id = $_REQUEST['id'];
      $password = $_REQUEST['password'];
      $name = $_REQUEST['name'];
      $group = $_REQUEST['group'];
      $telnum = $_REQUEST['telnum'];

      $where_arr = array();
      if(!empty($id)){ $where_arr[] = "id like '%$id%'";}
      if(!empty($password)){ $where_arr[] = "password like '%$password%'";}
      if(!empty($name)){ $where_arr[] = "name like '%$name%'";}
      if(!empty($group)){ $where_arr[] = "grou like '%$group%'";}
      if(!empty($telnum)){ $where_arr[] = "telnum like '%$telnum%'";}

      $where = $where_arr ? implode(" and ", $where_arr) : "1=1";

      $sql = "SELECT * from user where $where order by id";

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
