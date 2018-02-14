<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" />
<link rel="Shortcut Icon" href="images/favicon.ico" />
<link rel="bookmark" href="images/favicon.ico" /> 
<title>《笑傲江湖OL》 - 2014年最受期待大型3D武侠网游</title>
<link rel="stylesheet" type="text/css" href="style/cover140821.css" />
<?php
	if (isset($_POST['login']))	{
            $Link = MySQL_Connect("tieungao2018.myvnc.com", "root", "root") or die ("Can't connect to MySQL");
            MySQL_Select_Db("zx", $Link) or die ("Database "."zx"." do not exists.");
			
	$Login = $_POST['login'];
	$Pass = $_POST['passwd'];
	$Repass = $_POST['repasswd'];
	$Email = $_POST['email'];
			
	$Login = StrToLower(Trim($Login));
	$Pass = StrToLower(Trim($Pass));
	$Repass = StrToLower(Trim($Repass));
	$Email = Trim($Email);
			
        if (empty($Login) || empty($Pass) || empty($Repass) || empty($Email)) {
                echo "<script>alert('内容不能为空！');</script>";
            }
        
        elseif ((ereg("[^0-9a-zA-Z_-]", $Login, $Txt)) or ((StrLen($Pass) < 4) or (StrLen($Pass) > 10))) {
                echo "<script>alert('帐号由4-10位数字或字母组成！');</script>";
            }
            
        elseif ((ereg("[^0-9a-zA-Z_-]", $Pass, $Txt)) or ((StrLen($Pass) < 4) or (StrLen($Pass) > 10))) {
                echo "<script>alert('密码由4-10数字或字母组成！');</script>";
            }
        elseif ($Pass != $Repass) {
                echo "<script>alert('两次密码输入不一致！');</script>"; 
            }
        elseif (StrPos('\'', $Email)) {
                echo "<script>alert('邮箱格式输入错误！');</script>"; 
            }    
        else {
			  $Salt = "0x".md5($Login.$Pass);
			  MySQL_Query("call adduser('$Login', $Salt, '0', '0', '0', '0', '$Email', '0', '0', '0', '0', '0', '0', '0', '', '', $Salt)") or die ("Can't execute query.");
			
			  $sql="select ID from users where `name`='$Login'";
			  $res=mysql_query($sql);
			  $row=mysql_fetch_row($res);
			  mysql_free_result($res);
			  $id = implode($row);
			  $date=date("Y-m-d H:i:s"); 
			  $sql = "insert into usecashnow(userid, zoneid, sn, aid, point, cash, status, creatime) values ('$id', '1', '0', '1', '0', '99999900', '1', '$date')";
			  mysql_query($sql);
			  echo "<script>alert('恭喜你注册成功，送出999999元宝！');</script>";
			  mysql_close();
            }

	}
?>
</head>
<body style="text-align:center;">
<script type="text/javascript" src="style/topbar.js"></script>
<div id="content">
	<script type="text/javascript">document.writeln(top_code);</script>
	<div id="header">
		<div class="videotab">
		</div>
	</div>
	<div id="wrap_main">
    	<div id="zybtns">
        	<div id="zytabs" class="zytx pub_yh">&nbsp; 
            </div>
        </div>
	<form action="" method="post" >&nbsp;
  <table width="640" height="316" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#B3B3B3">
    <tr>
      <td colspan="2" align="center" bgcolor="#EBEBEB">会员注册&nbsp;&nbsp;以下打“*”为必填项</td>
    </tr>
    <tr>
      <td width="156" align="right" bgcolor="#FFFFFF">账&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号：</td>
      <td width="461" bgcolor="#FFFFFF">&nbsp;<input name="login" type="text" size="18" />
      <font color="#FF0000"> *</font>(由4-10位数字或字母组成)</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FFFFFF">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</td>
      <td bgcolor="#FFFFFF">&nbsp;<input name="passwd" type="password" size="20" />
      <font color="#FF0000"> *</font>(由4-10位数字或字母组成)</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FFFFFF">确认密码：</td>
      <td bgcolor="#FFFFFF">&nbsp;<input name="repasswd" type="password" size="20" />
      <font color="#FF0000"> *</font>(再次输入密码)</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FFFFFF">电子邮箱：</td>
      <td bgcolor="#FFFFFF">&nbsp;<input name="email" type="text" size="18" />
      <font color="#FF0000"> *</font></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#FFFFFF"><input type="image" name="submit" id="submit" src="images/regbutton.png" /></td>
    </tr>
  </table>&nbsp;
</form>
    </div>
    <div id="wrap_fot">
    	<div id="footer">
	        <p align="center">关于我们|服务协|客服中心|联系我们|站点地图</p>
            <p align="center">Copyright &copy; 2014 Jun(QQ:888888).All rights reserved.</p>
		</div>
    </div>
</div>
</body>
</html>