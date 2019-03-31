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
    <input type = "submit" value="메인으로">
  </form>
  <fieldset>
  <h2> 추가하기 </h2>
  <form name="update.php" method = "post" action = "">
    <label><br>상가업소번호: </label>
    <input type = "text" name="no">
    <label><br>상호명: </label>
    <input type = "text" name="name">
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
  </fieldset>

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
    <input type = "submit" value="추가">
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

        if($stdname=="게임룸") {
          $bigcode = "N";
          $bigname = "관광/여가/오락";
          $midcode = "N08";
          $midname = "경마/경륜/성인오락";
          $stdcode = "N08A01";
        }
        else if($stdname=="기타병원") {
          $bigcode = "S";
          $bigname = "의료";
          $midcode = "S01";
          $midname = "병원";
          $stdcode = "S01B99";
        }
        else if($stdname=="기타오락관련산업") {
          $bigcode = "N";
          $bigname = "관광/여가/오락";
          $midcode = "N07";
          $midname = "놀이/여가/취미";
          $stdcode = "N07A11";
        }
        else if($stdname=="내과/외과") {
          $bigcode = "S";
          $bigname = "의료";
          $midcode = "S01";
          $midname = "병원";
          $stdcode = "S01B07";
        }
        else if($stdname=="노래방") {
          $bigcode = "N";
          $bigname = "관광/여가/오락";
          $midcode = "N02";
          $midname = "무도/유흥/가무";
          $stdcode = "N02A01";
        }
        else if($stdname=="노인/치매병원") {
          $bigcode = "S";
          $bigname = "의료";
          $midcode = "S01";
          $midname = "병원";
          $stdcode = "S01B17";
        }
        else if($stdname=="당구장") {
          $bigcode = "N";
          $bigname = "관광/여가/오락";
          $midcode = "N01";
          $midname = "PC/오락/당구/볼링등";
          $stdcode = "N01A03";
        }
        else if($stdname=="동물병원") {
          $bigcode = "S";
          $bigname = "의료";
          $midcode = "S04";
          $midname = "수의업";
          $stdcode = "S04A02";
        }
        else if($stdname=="모텔/여관/여인숙") {
          $bigcode = "O";
          $bigname = "숙박";
          $midcode = "O02";
          $midname = "모텔/여관/여인숙";
          $stdcode = "O02A01";
        }
        else if($stdname=="무도장") {
          $bigcode = "N";
          $bigname = "관광/여가/오락";
          $midcode = "N02";
          $midname = "무도/유흥/가무";
          $stdcode = "N02A06";
        }
        else if($stdname=="볼링장") {
          $bigcode = "N";
          $bigname = "관광/여가/오락";
          $midcode = "N01";
          $midname = "PC/오락/당구/볼링등";
          $stdcode = "N01A06";
        }
        else if($stdname=="비뇨기과") {
          $bigcode = "S";
          $bigname = "의료";
          $midcode = "S01";
          $midname = "병원";
          $stdcode = "S01B12";
        }
        else if($stdname=="비디오감상실") {
          $bigcode = "N";
          $bigname = "관광/여가/오락";
          $midcode = "N01";
          $midname = "PC/오락/당구/볼링등";
          $stdcode = "N01A02";
        }
        else if($stdname=="산부인과") {
          $bigcode = "S";
          $bigname = "의료";
          $midcode = "S01";
          $midname = "병원";
          $stdcode = "S01B10";
        }
        else if($stdname=="소아과") {
          $bigcode = "S";
          $bigname = "의료";
          $midcode = "S01";
          $midname = "병원";
          $stdcode = "S01B11";
        }
        else if($stdname=="수의업-종합") {
          $bigcode = "S";
          $bigname = "의료";
          $midcode = "S04";
          $midname = "수의업";
          $stdcode = "S04A01";
        }
        else if($stdname=="스포츠마사지") {
          $bigcode = "N";
          $bigname = "관광/여가/오락";
          $midcode = "N05";
          $midname = "요가/단전/마사지";
          $stdcode = "N05A06";
        }
        else if($stdname=="신경외과") {
          $bigcode = "S";
          $bigname = "의료";
          $midcode = "S01";
          $midname = "병원";
          $stdcode = "S01B15";
        }
        else if($stdname=="실내사격장") {
          $bigcode = "N";
          $bigname = "관광/여가/오락";
          $midcode = "N04";
          $midname = "스포츠/운동";
          $stdcode = "N04A02";
        }
        else if($stdname=="실내야구연습장") {
          $bigcode = "N";
          $bigname = "관광/여가/오락";
          $midcode = "N04";
          $midname = "스포츠/운동";
          $stdcode = "N04A01";
        }
        else if($stdname=="안과의과") {
          $bigcode = "S";
          $bigname = "의료";
          $midcode = "S01";
          $midname = "병원";
          $stdcode = "S01B13";
        }
        else if($stdname=="안마시술소") {
          $bigcode = "N";
          $bigname = "관광/여가/오락";
          $midcode = "N05";
          $midname = "요가/단전/마사지";
          $stdcode = "N05A07";
        }
        else if($stdname=="약국") {
          $bigcode = "S";
          $bigname = "의료";
          $midcode = "S02";
          $midname = "약국/한약방";
          $stdcode = "S02A01";
        }
        else if($stdname=="언어치료") {
          $bigcode = "S";
          $bigname = "의료";
          $midcode = "S03";
          $midname = "유사의료업";
          $stdcode = "S03B07";
        }
        else if($stdname=="연극/음악/예술관련기타") {
          $bigcode = "N";
          $bigname = "관광/여가/오락";
          $midcode = "N03";
          $midname = "연극/영화/극장";
          $stdcode = "N03A06";
        }
        else if($stdname=="요가/단식") {
          $bigcode = "N";
          $bigname = "관광/여가/오락";
          $midcode = "N05";
          $midname = "요가/단전/마사지";
          $stdcode = "N05A01";
        }
        else if($stdname=="유사의료업기타") {
          $bigcode = "S";
          $bigname = "의료";
          $midcode = "S03";
          $midname = "유사의료업";
          $stdcode = "S03B09";
        }
        else if($stdname=="이비인후과의원") {
          $bigcode = "S";
          $bigname = "의료";
          $midcode = "S01";
          $midname = "병원";
          $stdcode = "S01B14";
        }
        else if($stdname=="인터넷PC방") {
          $bigcode = "N";
          $bigname = "관광/여가/오락";
          $midcode = "N01";
          $midname = "PC/오락/당구/볼링등";
          $stdcode = "N01A01";
        }
        else if($stdname=="일반병원") {
          $bigcode = "S";
          $bigname = "의료";
          $midcode = "S01";
          $midname = "병원";
          $stdcode = "S01B02";
        }
        else if($stdname=="전자오락실") {
          $bigcode = "N";
          $bigname = "관광/여가/오락";
          $midcode = "N01";
          $midname = "PC/오락/당구/볼링등";
          $stdcode = "N01A08";
        }
        else if($stdname=="정형/성형외과") {
          $bigcode = "S";
          $bigname = "의료";
          $midcode = "S01";
          $midname = "병원";
          $stdcode = "S01B08";
        }
        else if($stdname=="치과기공소") {
          $bigcode = "S";
          $bigname = "의료";
          $midcode = "S03";
          $midname = "병원";
          $stdcode = "S03B06";
        }
        else if($stdname=="치과병원") {
          $bigcode = "S";
          $bigname = "의료";
          $midcode = "S03";
          $midname = "병원";
          $stdcode = "S03B03";
        }
        else if($stdname=="치과의원") {
          $bigcode = "S";
          $bigname = "의료";
          $midcode = "S03";
          $midname = "병원";
          $stdcode = "S03B04";
        }
        else if($stdname=="탁구장") {
          $bigcode = "N";
          $bigname = "관광/여가/오락";
          $midcode = "N01";
          $midname = "PC/오락/당구/볼링등";
          $stdcode = "N01A05";
        }
        else if($stdname=="탕제원") {
          $bigcode = "S";
          $bigname = "의료";
          $midcode = "S02";
          $midname = "약국/한약방";
          $stdcode = "S02A03";
        }
        else if($stdname=="한국식유흥주점") {
          $bigcode = "N";
          $bigname = "관광/여가/오락";
          $midcode = "N02";
          $midname = "무도/유흥/가무";
          $stdcode = "N02A05";
        }
        else if($stdname=="한약방") {
          $bigcode = "S";
          $bigname = "의료";
          $midcode = "S02";
          $midname = "약국/한약방";
          $stdcode = "S02A02";
        }
        else if($stdname=="한의원") {
          $bigcode = "S";
          $bigname = "의료";
          $midcode = "S01";
          $midname = "병원";
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
