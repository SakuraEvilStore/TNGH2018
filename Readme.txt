打开reg.php修改
if (isset($_POST['login']))	{
	$Link = MySQL_Connect("127.0.0.1", "root", "root") or die ("Can't connect to MySQL");
	MySQL_Select_Db("zx", $Link) or die ("Database "."zx"." do not exists.");
对应数据库IP及用户密码。
$sql = "insert into usecashnow(userid, zoneid, sn, aid, point, cash, status, creatime) values ('$id', '1', '0', '1', '0', '99999900', '1', '$date')";
自动送999999元宝。