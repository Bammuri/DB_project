<?
$connect = mysql_connect("localhost","root","apmsetup");
mysql_query("set names euc-kr");
mysql_select_db("dbproject",$connect);

$no = $_REQUEST['no'];
$id_t = $_POST['id_t'];
$pw_t = $_POST['pw_t'];

$sql = "DELETE FROM market where no='$no';";
$sql1 = "DELETE FROM history where no='$no';";
mysql_query($sql1,$connect);
mysql_query($sql,$connect);
if($sql) {
echo "$load ";
echo "삭제 성공하였습니다.";
}
?>
<script>
      document.location.href='market_search_for_delete.php?';
</script>
