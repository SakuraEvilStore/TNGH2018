��reg.php�޸�
if (isset($_POST['login']))	{
	$Link = MySQL_Connect("127.0.0.1", "root", "root") or die ("Can't connect to MySQL");
	MySQL_Select_Db("zx", $Link) or die ("Database "."zx"." do not exists.");
��Ӧ���ݿ�IP���û����롣
$sql = "insert into usecashnow(userid, zoneid, sn, aid, point, cash, status, creatime) values ('$id', '1', '0', '1', '0', '99999900', '1', '$date')";
�Զ���999999Ԫ����