<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>위치검색</title>

</head>
<body>
  <?
  $id_use = $_POST['id_t'];
  $pw_use = $_POST['pw_t'];
  ?>
<!-- 지도를 표시할 div 입니다 -->
<div id="map" style="width:100%;height:800px;"></div>
<form name="map.php"
method="post" action="market_search.php">
<input type = "hidden" value = "<?echo $_POST['id_t'];?>" name = "id_t">
<input type = "hidden" value = "<?echo $_POST['pw_t'];?>" name = "pw_t">
<input type="submit" value="뒤로가기">
</form>
<?
$la = $_REQUEST['la'];
$al  = $_REQUEST['al'];?>
  <br><?echo($al)?></br><?echo($la)?>;
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=d675cfab9f38f0b730102f3f1a671915"></script>
<script>

    var mapContainer = document.getElementById('map'), // 지도를 표시할 div
    mapOption = {

      center: new daum.maps.LatLng(<?echo($al)?>,<?echo($la)?> ), level: 3 // 지도의 중심좌표
        // 지도의 확대 레벨
    };
// 지도를 표시할 div와  지도 옵션으로  지도를 생성합니다
var map = new daum.maps.Map(mapContainer, mapOption);


var markerPosition  = new daum.maps.LatLng(<?echo($al)?>,<?echo($la)?> );

// 마커를 생성합니다
var marker = new daum.maps.Marker({
    position: markerPosition
});

// 마커가 지도 위에 표시되도록 설정합니다
marker.setMap(map);


</script>
</body>
</html>
