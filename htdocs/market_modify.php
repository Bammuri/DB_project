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
    <input type = "submit" value="���ư���">
  </form>
  <fieldset>
  <h2> �����ϱ� </h2>
  <body>

    <form name="modify.php" method = "post" action = "">
    <label>�󰡾��ҹ�ȣ: </label>
    <input type = "text" name="no">
    <label><br>��ȣ��: </label>
    <input type = "text" name="name">
    <label><br>��з��ڵ�: </label>
    <input type = "text" name="bigcode">
    <label><br>��з���: </label>
    <input type = "text" name="bigname">
    <label><br>�ߺз��ڵ�: </label>
    <input type = "text" name="midcode">
    <label><br>�ߺз���: </label>
    <input type = "text" name="midname">
    <label><br>ǥ�ػ���з��ڵ�: </label>
    <input type = "text" name="stdcode">
    <label><br>ǥ�ػ���з���: </label>
    <input type = "text" name="stdname">
    <label><br>�����ּ�: </label>
    <input type = "text" name="add">
    <label><br>���θ��ּ�: </label>
    <input type = "text" name="roadadd">
    <label><br>�������ȣ: </label>
    <input type = "text" name="oldmail">
    <label><br>�ſ����ȣ: </label>
    <input type = "text" name="newmail">
    <label><br>�浵: </label>
    <input type = "text" name="longitude">
    <label><br>����: </label>
    <input type = "text" name="latitude">
    <input type = "hidden" name="num" value="<?echo $load?>">
    <input type = "submit" value="����">
  </form>

  <table border="1">
    <thead>
      <tr>
        <th> �󰡾��ҹ�ȣ </th>
        <th> ��ȣ�� </th>
        <th> ��з��ڵ� </th>
        <th> ��з��� </th>
        <th> �ߺз��ڵ� </th>
        <th> �ߺз��� </th>
           <th> ǥ�ػ���з��ڵ� </th>
           <th> ǥ�ػ���з��� </th>
           <th> �����ּ� </th>
           <th> ���θ��ּ� </th>
           <th> �������ȣ </th>
           <th> �ſ����ȣ </th>
        <th> �浵 </th>
        <th> ���� </th>
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
