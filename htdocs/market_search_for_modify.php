<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr"></head>
<h1>Search</h1>

<?
$connect = mysql_connect("localhost","root","apmsetup");
mysql_query("set names euc-kr");
mysql_select_db("dbproject",$connect);

echo $_POST['id_t'];
echo $_POST['pw_t'];

?>

<body>
  <form name="search_for_modify.php" method = "post" action = "main.php">
    <input type = "hidden" value = "<?echo $_POST['id_t'];?>" name = "id_t">
    <input type = "hidden" value = "<?echo $_POST['pw_t'];?>" name = "pw_t">
    <input type = "submit" value="��������">
  </form>
  <fieldset>
  <h2> ����_�˻��ϱ� </h2>
  <form name="search_for_modify.php" method = "post" action = "">
    <label><br>�󰡾��ҹ�ȣ: </label>
    <input type = "text" name="no">
    <label><br>��ȣ��: </label>
    <input type = "text" name="name">
    <label><br>��з���: </label>
    <input type = "text" name="bigname">
    <label><br>�ߺз���: </label>
    <input type = "text" name="midname">
    <label><br>ǥ�ػ���з���: </label>
    <fieldset>
    <label><br>���ӷ�</label>
    <input type = "checkbox" name="stdname" value="���ӷ�">
    <label>��Ÿ����</label>
    <input type = "checkbox" name="stdname" value="��Ÿ����">
    <label>��Ÿ�������û��</label>
    <input type = "checkbox" name="stdname" value="��Ÿ�������û��">
    <label>����/�ܰ�</label>
    <input type = "checkbox" name="stdname" value="����/�ܰ�">
    <label>�뷡��</label>
    <input type = "checkbox" name="stdname" value="�뷡��">
    <label>����/ġ�ź���</label>
    <input type = "checkbox" name="stdname" value="����/ġ�ź���">
    <label><br>�籸��</label>
    <input type = "checkbox" name="stdname" value="�籸��">
    <label>��������</label>
    <input type = "checkbox" name="stdname" value="��������">
    <label>����/����/���μ�</label>
    <input type = "checkbox" name="stdname" value="����/����/���μ�">
    <label>������</label>
    <input type = "checkbox" name="stdname" value="������">
    <label>������</label>
    <input type = "checkbox" name="stdname" value="������">
    <label>�񴢱��</label>
    <input type = "checkbox" name="stdname" value="�񴢱��">
    <label>���������</label>
    <input type = "checkbox" name="stdname" value="���������">
    <label><br>����ΰ�</label>
    <input type = "checkbox" name="stdname" value="����ΰ�">
    <label>�Ҿư�</label>
    <input type = "checkbox" name="stdname" value="�Ҿư�">
    <label>���Ǿ�-����</label>
    <input type = "checkbox" name="stdname" value="���Ǿ�-����">
    <label>������������</label>
    <input type = "checkbox" name="stdname" value="������������">
    <label>�Ű�ܰ�</label>
    <input type = "checkbox" name="stdname" value="�Ű�ܰ�">
    <label>�ǳ������</label>
    <input type = "checkbox" name="stdname" value="�ǳ������">
    <label>�ǳ��߱�������</label>
    <input type = "checkbox" name="stdname" value="�ǳ��߱�������">
    <label><br>�Ȱ��ǿ�</label>
    <input type = "checkbox" name="stdname" value="�Ȱ��ǿ�">
    <label>�ȸ��ü���</label>
    <input type = "checkbox" name="stdname" value="�ȸ��ü���">
    <label>�౹</label>
    <input type = "checkbox" name="stdname" value="�౹">
    <label>���ġ��</label>
    <input type = "checkbox" name="stdname" value="���ġ��">
    <label>����/����/�������ñ�Ÿ</label>
    <input type = "checkbox" name="stdname" value="����/����/�������ñ�Ÿ">
    <label>�䰡/�ܽ�</label>
    <input type = "checkbox" name="stdname" value="�䰡/�ܽ�">
    <label><br>�����Ƿ����Ÿ</label>
    <input type = "checkbox" name="stdname" value="�����Ƿ����Ÿ">
    <label>�̺����İ��ǿ�</label>
    <input type = "checkbox" name="stdname" value="�̺����İ��ǿ�">
    <label>���ͳ�PC��</label>
    <input type = "checkbox" name="stdname" value="���ͳ�PC��">
    <label>�Ϲݺ���</label>
    <input type = "checkbox" name="stdname" value="�Ϲݺ���">
    <label><br>���ڿ�����</label>
    <input type = "checkbox" name="stdname" value="���ڿ�����">
    <label>����/�����ܰ�</label>
    <input type = "checkbox" name="stdname" value="����/�����ܰ�">
    <label>ġ�������</label>
    <input type = "checkbox" name="stdname" value="ġ�������">
    <label>ġ������</label>
    <input type = "checkbox" name="stdname" value="ġ������">
    <label>ġ���ǿ�</label>
    <input type = "checkbox" name="stdname" value="ġ���ǿ�">
    <label><br>Ź����</label>
    <input type = "checkbox" name="stdname" value="Ź����">
    <label>������</label>
    <input type = "checkbox" name="stdname" value="������">
    <label>�ѱ�����������</label>
    <input type = "checkbox" name="stdname" value="�ѱ�����������">
    <label>�Ѿ��</label>
    <input type = "checkbox" name="stdname" value="�Ѿ��">
    <label>���ǿ�</label>
    <input type = "checkbox" name="stdname" value="���ǿ�">
    <label>�佺Ʈ����</label>
    <input type = "checkbox" name="stdname" value="�佺Ʈ����">
  </fieldset>

    <label><br>�����ּ�: </label>
    <input type = "text" name="add">
    <label><br>���θ��ּ�: </label>
    <input type = "text" name="roadadd">
    <input type = "submit" value="�˻�">
    <input type = "submit" value="�ʱ�ȭ">
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
          <th> ���� </th>
        </tr>
      </thead>
  <tbody>
    <?
      $no = $_REQUEST['no'];
      $name = $_REQUEST['name'];
      $bigname = $_REQUEST['bigname'];
      $midname = $_REQUEST['midname'];
      $stdname = $_REQUEST['stdname'];
      $add = $_REQUEST['add'];
      $roadadd = $_REQUEST['roadadd'];

      $where_arr = array();
      if(!empty($no)){ $where_arr[] = "no like '%$no%'";}
      if(!empty($name)){ $where_arr[] = "name like '%$name%'";}
      if(!empty($bigname)){ $where_arr[] = "bigname like '%$bigname%'";}
      if(!empty($midname)){ $where_arr[] = "midname like '%$midname%'";}
      if(!empty($stdname)){ $where_arr[] = "stdname like '%$stdname%'";}
      if(!empty($add)){ $where_arr[] = "add like '%$add%'";}
      if(!empty($roadadd)){ $where_arr[] = "roadadd like '%$roadadd%'";}

      $where = $where_arr ? implode(" and ", $where_arr) : "1=1";

      $sql = "SELECT * from market where $where order by no";
      $result = mysql_query($sql,$connect);

      $fields = mysql_num_fields($result);
      while($row = mysql_fetch_row($result)) {
        echo("<tr>");

        for($i=0;$i<$fields;$i++) {
          echo("<td> $row[$i] </td>");
        }
        echo("<td>
        <form method = 'post' action = 'market_modify.php'>
        <input name='num' value='$row[0]' size='5'>
        <input type='submit'  value='����'>
        </td>");
        echo("<tr>");
      }

      mysql_close();
      ?>
  </tbody>
</table>



</html>
