<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr"></head>
<h1>Update</h1>

<?
$connect = mysql_connect("localhost","root","apmsetup");
mysql_query("set names euc-kr");
mysql_select_db("dbproject",$connect);
?>

<body>
  <form name="submit2.php" method = "post" action = "main.php">
    <input type = "hidden" value = "<?echo $_POST['id_t'];?>" name = "id_t">
    <input type = "hidden" value = "<?echo $_POST['pw_t'];?>" name = "pw_t">
    <input type = "submit" value="��������">
  </form>
  <fieldset>
  <h2> �߰��ϱ� </h2>
  <form name="update.php" method = "post" action = "">
    <label><br>�󰡾��ҹ�ȣ: </label>
    <input type = "text" name="no">
    <label><br>��ȣ��: </label>
    <input type = "text" name="name">
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
  </fieldset>

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
    <input type = "submit" value="�߰�">
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
        </tr>
      </thead>

      <?
        $no = $_REQUEST['no'];
        $name = $_REQUEST['name'];
        $stdname = $_REQUEST['stdname'];
        $add = $_REQUEST['add'];
        $roadadd = $_REQUEST['roadadd'];

        $oldmail = $_REQUEST['oldmail'];
        $newmail = $_REQUEST['newmail'];
        $longitude = $_REQUEST['longitude'];
        $latitude = $_REQUEST['latitude'];

        if($stdname=="���ӷ�") {
          $bigcode = "N";
          $bigname = "����/����/����";
          $midcode = "N08";
          $midname = "�渶/���/���ο���";
          $stdcode = "N08A01";
        }
        else if($stdname=="��Ÿ����") {
          $bigcode = "S";
          $bigname = "�Ƿ�";
          $midcode = "S01";
          $midname = "����";
          $stdcode = "S01B99";
        }
        else if($stdname=="��Ÿ�������û��") {
          $bigcode = "N";
          $bigname = "����/����/����";
          $midcode = "N07";
          $midname = "����/����/���";
          $stdcode = "N07A11";
        }
        else if($stdname=="����/�ܰ�") {
          $bigcode = "S";
          $bigname = "�Ƿ�";
          $midcode = "S01";
          $midname = "����";
          $stdcode = "S01B07";
        }
        else if($stdname=="�뷡��") {
          $bigcode = "N";
          $bigname = "����/����/����";
          $midcode = "N02";
          $midname = "����/����/����";
          $stdcode = "N02A01";
        }
        else if($stdname=="����/ġ�ź���") {
          $bigcode = "S";
          $bigname = "�Ƿ�";
          $midcode = "S01";
          $midname = "����";
          $stdcode = "S01B17";
        }
        else if($stdname=="�籸��") {
          $bigcode = "N";
          $bigname = "����/����/����";
          $midcode = "N01";
          $midname = "PC/����/�籸/������";
          $stdcode = "N01A03";
        }
        else if($stdname=="��������") {
          $bigcode = "S";
          $bigname = "�Ƿ�";
          $midcode = "S04";
          $midname = "���Ǿ�";
          $stdcode = "S04A02";
        }
        else if($stdname=="����/����/���μ�") {
          $bigcode = "O";
          $bigname = "����";
          $midcode = "O02";
          $midname = "����/����/���μ�";
          $stdcode = "O02A01";
        }
        else if($stdname=="������") {
          $bigcode = "N";
          $bigname = "����/����/����";
          $midcode = "N02";
          $midname = "����/����/����";
          $stdcode = "N02A06";
        }
        else if($stdname=="������") {
          $bigcode = "N";
          $bigname = "����/����/����";
          $midcode = "N01";
          $midname = "PC/����/�籸/������";
          $stdcode = "N01A06";
        }
        else if($stdname=="�񴢱��") {
          $bigcode = "S";
          $bigname = "�Ƿ�";
          $midcode = "S01";
          $midname = "����";
          $stdcode = "S01B12";
        }
        else if($stdname=="���������") {
          $bigcode = "N";
          $bigname = "����/����/����";
          $midcode = "N01";
          $midname = "PC/����/�籸/������";
          $stdcode = "N01A02";
        }
        else if($stdname=="����ΰ�") {
          $bigcode = "S";
          $bigname = "�Ƿ�";
          $midcode = "S01";
          $midname = "����";
          $stdcode = "S01B10";
        }
        else if($stdname=="�Ҿư�") {
          $bigcode = "S";
          $bigname = "�Ƿ�";
          $midcode = "S01";
          $midname = "����";
          $stdcode = "S01B11";
        }
        else if($stdname=="���Ǿ�-����") {
          $bigcode = "S";
          $bigname = "�Ƿ�";
          $midcode = "S04";
          $midname = "���Ǿ�";
          $stdcode = "S04A01";
        }
        else if($stdname=="������������") {
          $bigcode = "N";
          $bigname = "����/����/����";
          $midcode = "N05";
          $midname = "�䰡/����/������";
          $stdcode = "N05A06";
        }
        else if($stdname=="�Ű�ܰ�") {
          $bigcode = "S";
          $bigname = "�Ƿ�";
          $midcode = "S01";
          $midname = "����";
          $stdcode = "S01B15";
        }
        else if($stdname=="�ǳ������") {
          $bigcode = "N";
          $bigname = "����/����/����";
          $midcode = "N04";
          $midname = "������/�";
          $stdcode = "N04A02";
        }
        else if($stdname=="�ǳ��߱�������") {
          $bigcode = "N";
          $bigname = "����/����/����";
          $midcode = "N04";
          $midname = "������/�";
          $stdcode = "N04A01";
        }
        else if($stdname=="�Ȱ��ǰ�") {
          $bigcode = "S";
          $bigname = "�Ƿ�";
          $midcode = "S01";
          $midname = "����";
          $stdcode = "S01B13";
        }
        else if($stdname=="�ȸ��ü���") {
          $bigcode = "N";
          $bigname = "����/����/����";
          $midcode = "N05";
          $midname = "�䰡/����/������";
          $stdcode = "N05A07";
        }
        else if($stdname=="�౹") {
          $bigcode = "S";
          $bigname = "�Ƿ�";
          $midcode = "S02";
          $midname = "�౹/�Ѿ��";
          $stdcode = "S02A01";
        }
        else if($stdname=="���ġ��") {
          $bigcode = "S";
          $bigname = "�Ƿ�";
          $midcode = "S03";
          $midname = "�����Ƿ��";
          $stdcode = "S03B07";
        }
        else if($stdname=="����/����/�������ñ�Ÿ") {
          $bigcode = "N";
          $bigname = "����/����/����";
          $midcode = "N03";
          $midname = "����/��ȭ/����";
          $stdcode = "N03A06";
        }
        else if($stdname=="�䰡/�ܽ�") {
          $bigcode = "N";
          $bigname = "����/����/����";
          $midcode = "N05";
          $midname = "�䰡/����/������";
          $stdcode = "N05A01";
        }
        else if($stdname=="�����Ƿ����Ÿ") {
          $bigcode = "S";
          $bigname = "�Ƿ�";
          $midcode = "S03";
          $midname = "�����Ƿ��";
          $stdcode = "S03B09";
        }
        else if($stdname=="�̺����İ��ǿ�") {
          $bigcode = "S";
          $bigname = "�Ƿ�";
          $midcode = "S01";
          $midname = "����";
          $stdcode = "S01B14";
        }
        else if($stdname=="���ͳ�PC��") {
          $bigcode = "N";
          $bigname = "����/����/����";
          $midcode = "N01";
          $midname = "PC/����/�籸/������";
          $stdcode = "N01A01";
        }
        else if($stdname=="�Ϲݺ���") {
          $bigcode = "S";
          $bigname = "�Ƿ�";
          $midcode = "S01";
          $midname = "����";
          $stdcode = "S01B02";
        }
        else if($stdname=="���ڿ�����") {
          $bigcode = "N";
          $bigname = "����/����/����";
          $midcode = "N01";
          $midname = "PC/����/�籸/������";
          $stdcode = "N01A08";
        }
        else if($stdname=="����/�����ܰ�") {
          $bigcode = "S";
          $bigname = "�Ƿ�";
          $midcode = "S01";
          $midname = "����";
          $stdcode = "S01B08";
        }
        else if($stdname=="ġ�������") {
          $bigcode = "S";
          $bigname = "�Ƿ�";
          $midcode = "S03";
          $midname = "����";
          $stdcode = "S03B06";
        }
        else if($stdname=="ġ������") {
          $bigcode = "S";
          $bigname = "�Ƿ�";
          $midcode = "S03";
          $midname = "����";
          $stdcode = "S03B03";
        }
        else if($stdname=="ġ���ǿ�") {
          $bigcode = "S";
          $bigname = "�Ƿ�";
          $midcode = "S03";
          $midname = "����";
          $stdcode = "S03B04";
        }
        else if($stdname=="Ź����") {
          $bigcode = "N";
          $bigname = "����/����/����";
          $midcode = "N01";
          $midname = "PC/����/�籸/������";
          $stdcode = "N01A05";
        }
        else if($stdname=="������") {
          $bigcode = "S";
          $bigname = "�Ƿ�";
          $midcode = "S02";
          $midname = "�౹/�Ѿ��";
          $stdcode = "S02A03";
        }
        else if($stdname=="�ѱ�����������") {
          $bigcode = "N";
          $bigname = "����/����/����";
          $midcode = "N02";
          $midname = "����/����/����";
          $stdcode = "N02A05";
        }
        else if($stdname=="�Ѿ��") {
          $bigcode = "S";
          $bigname = "�Ƿ�";
          $midcode = "S02";
          $midname = "�౹/�Ѿ��";
          $stdcode = "S02A02";
        }
        else if($stdname=="���ǿ�") {
          $bigcode = "S";
          $bigname = "�Ƿ�";
          $midcode = "S01";
          $midname = "����";
          $stdcode = "S01B06";
        }

        if(!empty($no)) {
          $sql = "insert into market values
          ('{$no}', '{$name}', '{$bigcode}', '{$bigname}', '{$midcode}', '{$midname}',
          '{$stdcode}', '{$stdname}', '{$add}', '{$roadadd}', '{$oldmail}', '{$newmail}',
          '{$longitude}', '{$latitude}');";

        $result = mysql_query($sql,$connect);


        $sql = "select * from market ;";
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
