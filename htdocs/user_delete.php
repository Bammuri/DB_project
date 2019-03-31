<?
$connect = mysql_connect("localhost","root","apmsetup");
mysql_query("set names euc-kr");
mysql_select_db("dbproject",$connect);

$load = $_REQUEST['id'];


$sql = "DELETE FROM user where id='$load';";
$sql1 = "DELETE FROM history where id='$load';";
mysql_query($sql1,$connect);
mysql_query($sql,$connect);
if($sql) {
echo "$load ";
echo "삭제 성공하였습니다.";
}
?>


<script>
      document.location.href='user_search_for_delete.php';
</script>
