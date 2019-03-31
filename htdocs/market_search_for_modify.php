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
    <input type = "submit" value="메인으로">
  </form>
  <fieldset>
  <h2> 수정_검색하기 </h2>
  <form name="search_for_modify.php" method = "post" action = "">
    <label><br>상가업소번호: </label>
    <input type = "text" name="no">
    <label><br>상호명: </label>
    <input type = "text" name="name">
    <label><br>대분류명: </label>
    <input type = "text" name="bigname">
    <label><br>중분류명: </label>
    <input type = "text" name="midname">
    <label><br>표준산업분류명: </label>
    <fieldset>
    <label><br>게임룸</label>
    <input type = "checkbox" name="stdname" value="게임룸">
    <label>기타병원</label>
    <input type = "checkbox" name="stdname" value="기타병원">
    <label>기타오락관련산업</label>
    <input type = "checkbox" name="stdname" value="기타오락관련산업">
    <label>내과/외과</label>
    <input type = "checkbox" name="stdname" value="내과/외과">
    <label>노래방</label>
    <input type = "checkbox" name="stdname" value="노래방">
    <label>노인/치매병원</label>
    <input type = "checkbox" name="stdname" value="노인/치매병원">
    <label><br>당구장</label>
    <input type = "checkbox" name="stdname" value="당구장">
    <label>동물병원</label>
    <input type = "checkbox" name="stdname" value="동물병원">
    <label>모텔/여관/여인숙</label>
    <input type = "checkbox" name="stdname" value="모텔/여관/여인숙">
    <label>무도장</label>
    <input type = "checkbox" name="stdname" value="무도장">
    <label>볼링장</label>
    <input type = "checkbox" name="stdname" value="볼링장">
    <label>비뇨기과</label>
    <input type = "checkbox" name="stdname" value="비뇨기과">
    <label>비디오감상실</label>
    <input type = "checkbox" name="stdname" value="비디오감상실">
    <label><br>산부인과</label>
    <input type = "checkbox" name="stdname" value="산부인과">
    <label>소아과</label>
    <input type = "checkbox" name="stdname" value="소아과">
    <label>수의업-종합</label>
    <input type = "checkbox" name="stdname" value="수의업-종합">
    <label>스포츠마사지</label>
    <input type = "checkbox" name="stdname" value="스포츠마사지">
    <label>신경외과</label>
    <input type = "checkbox" name="stdname" value="신경외과">
    <label>실내사격장</label>
    <input type = "checkbox" name="stdname" value="실내사격장">
    <label>실내야구연습장</label>
    <input type = "checkbox" name="stdname" value="실내야구연습장">
    <label><br>안과의원</label>
    <input type = "checkbox" name="stdname" value="안과의원">
    <label>안마시술소</label>
    <input type = "checkbox" name="stdname" value="안마시술소">
    <label>약국</label>
    <input type = "checkbox" name="stdname" value="약국">
    <label>언어치료</label>
    <input type = "checkbox" name="stdname" value="언어치료">
    <label>연극/음악/예술관련기타</label>
    <input type = "checkbox" name="stdname" value="연극/음악/예술관련기타">
    <label>요가/단식</label>
    <input type = "checkbox" name="stdname" value="요가/단식">
    <label><br>유사의료업기타</label>
    <input type = "checkbox" name="stdname" value="유사의료업기타">
    <label>이비인후과의원</label>
    <input type = "checkbox" name="stdname" value="이비인후과의원">
    <label>인터넷PC방</label>
    <input type = "checkbox" name="stdname" value="인터넷PC방">
    <label>일반병원</label>
    <input type = "checkbox" name="stdname" value="일반병원">
    <label><br>전자오락실</label>
    <input type = "checkbox" name="stdname" value="전자오락실">
    <label>정형/성형외과</label>
    <input type = "checkbox" name="stdname" value="정형/성형외과">
    <label>치과기공소</label>
    <input type = "checkbox" name="stdname" value="치과기공소">
    <label>치과병원</label>
    <input type = "checkbox" name="stdname" value="치과병원">
    <label>치과의원</label>
    <input type = "checkbox" name="stdname" value="치과의원">
    <label><br>탁구장</label>
    <input type = "checkbox" name="stdname" value="탁구장">
    <label>탕제원</label>
    <input type = "checkbox" name="stdname" value="탕제원">
    <label>한국식유흥주점</label>
    <input type = "checkbox" name="stdname" value="한국식유흥주점">
    <label>한약방</label>
    <input type = "checkbox" name="stdname" value="한약방">
    <label>한의원</label>
    <input type = "checkbox" name="stdname" value="한의원">
    <label>토스트전문</label>
    <input type = "checkbox" name="stdname" value="토스트전문">
  </fieldset>

    <label><br>지번주소: </label>
    <input type = "text" name="add">
    <label><br>도로명주소: </label>
    <input type = "text" name="roadadd">
    <input type = "submit" value="검색">
    <input type = "submit" value="초기화">
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
          <th> 수정 </th>
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
        <input type='submit'  value='수정'>
        </td>");
        echo("<tr>");
      }

      mysql_close();
      ?>
  </tbody>
</table>



</html>
