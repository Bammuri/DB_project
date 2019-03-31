<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr"></head>
<h1>Modify</h1>

<?
$connect = mysql_connect("localhost","root","apmsetup");
mysql_query("set names euc-kr");
mysql_select_db("dbproject",$connect);

$load = $_REQUEST['num'];
?>
  <form name="modify.php" method = "post" action = "market_search_for_modify.php">
    <input type = "submit" value="돌아가기">
  </form>
  <fieldset>
  <h2> 수정하기 </h2>
  <body>

    <form name="modify.php" method = "post" action = "">
    <label>상가업소번호: </label>
    <input type = "text" name="no">
    <label><br>상호명: </label>
    <input type = "text" name="name">
    <label><br>대분류코드: </label>
    <input type = "text" name="bigcode">
    <label><br>대분류명: </label>
    <input type = "text" name="bigname">
    <label><br>중분류코드: </label>
    <input type = "text" name="midcode">
    <label><br>중분류명: </label>
    <input type = "text" name="midname">
    <label><br>표준산업분류코드: </label>
    <input type = "text" name="stdcode">
    <label><br>표준산업분류명: </label>
    <input type = "text" name="stdname">
    <label><br>지번주소: </label>
    <input type = "text" name="add">
    <label><br>도로명주소: </label>
    <input type = "text" name="roadadd">
    <label><br>구우편번호: </label>
    <input type = "text" name="oldmail">
    <label><br>신우편번호: </label>
    <input type = "text" name="newmail">
    <label><br>경도: </label>
    <input type = "text" name="longitude">
    <label><br>위도: </label>
    <input type = "text" name="latitude">
    <input type = "hidden" name="num" value="<?echo $load?>">
    <input type = "submit" value="적용">
  </form>

  <table border="1">
    <thead>
      <tr>
        <th> 상가업소번호 </th>
        <th> 상호명 </th>
        <th> 대분류코드 </th>
        <th> 대분류명 </th>
        <th> 중분류코드 </th>
        <th> 중분류명 </th>
           <th> 표준산업분류코드 </th>
           <th> 표준산업분류명 </th>
           <th> 지번주소 </th>
           <th> 도로명주소 </th>
           <th> 구우편번호 </th>
           <th> 신우편번호 </th>
        <th> 경도 </th>
        <th> 위도 </th>
      </thead>
      <tbody>
      <?
      $sql = "SELECT * from market where no='$load';";
      $result = mysql_query($sql,$connect);

      $load = $_REQUEST['num'];
      $no = $_REQUEST['no'];
      $name = $_REQUEST['name'];
      $bigcode = $_REQUEST['bigcode'];
      $bigname = $_REQUEST['bigname'];
      $midcode = $_REQUEST['midcode'];
      $midname = $_REQUEST['midname'];
      $stdcode = $_REQUEST['stdcode'];
      $stdname = $_REQUEST['stdname'];
      $add = $_REQUEST['add'];
      $roadadd = $_REQUEST['roadadd'];
      $oldmail = $_REQUEST['oldmail'];
      $newmail = $_REQUEST['newmail'];
      $longitude = $_REQUEST['longitude'];
      $latitude = $_REQUEST['latitude'];

      $where_arr = array();
      if(!empty($no)){ $where_arr[] = "no='$no'";}
      if(!empty($name)){ $where_arr[] = "name='$name'";}
      if(!empty($bigcode)){ $where_arr[] = "bigcode='$bigcode'";}
      if(!empty($bigname)){ $where_arr[] = "bigname='$bigname'";}
      if(!empty($midcode)){ $where_arr[] = "midcode='$midcode'";}
      if(!empty($midname)){ $where_arr[] = "midname='$midname'";}
      if(!empty($stdcode)){ $where_arr[] = "stdcode='$stdcode'";}
      if(!empty($stdname)){ $where_arr[] = "stdname='$stdname'";}
      if(!empty($add)){ $where_arr[] = "address='$add'";}
      if(!empty($roadadd)){ $where_arr[] = "roadadd='$roadadd'";}
      if(!empty($oldmail)){ $where_arr[] = "oldmail='$oldmail'";}
      if(!empty($newmail)){ $where_arr[] = "newmail='$newmail'";}
      if(!empty($longitude)){ $where_arr[] = "longitude='$longitude'";}
      if(!empty($latitude)){ $where_arr[] = "latitude='$latitude'";}
      $where = $where_arr ? implode(", ", $where_arr) : "1=1";

      $sql = "UPDATE market SET $where WHERE no='$load';";
      mysql_query($sql,$connect);

      $sql = "SELECT * from market where no='$load';";
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
