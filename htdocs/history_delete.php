<?
echo $_POST['id_t'];
echo $_POST['pw_t'];
$id_use = $_POST['id_t'];
?>
<?
$connect = mysql_connect("localhost","root","apmsetup");
mysql_query("set names euc-kr");
mysql_select_db("dbproject",$connect);

$id = $_REQUEST['id'];
$no = $_REQUEST['no'];


$sql = "DELETE FROM history where no='$no'&& id='$id';";
mysql_query($sql,$connect);
if($sql) {
echo "$load ";
echo "삭제 성공하였습니다.";
}
?>
<script>
      document.location.href='history_search_for_delete.php';
</script>
