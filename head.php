<?php
include_once("mysql.php");

if(isset($_POST["btnlogin"]))
{
	$logres = mysql_query("SELECT * FROM stuacc WHERE email='$_POST[txtemail]' AND password='$_POST[txtpass]' ");

	if(mysql_num_rows($logres) == 1)
	{
		$_SESSION["logid"] = $_POST["txtemail"];
	header("Location: profile.php");
	}
	else
	{
header("Location: login.php");
	}
}
?>
<div class=head><div style="padding-top: 50px"><div style="background-image: url(images/logo4.png); background-repeat: no-repeat; position:relative; left:60px;"> <div style="position: relative; left: 200px; top: -20px; text-align: left;">
	<table width=75% >
	<tr>
		<td width="60%" style="text-align: left; font: 25px arial; color: #7FDBE6;"><img src="images/logo3.png" width="273" height="87" /><br></td>
		<td width="40%" align=right>&nbsp;</td>
	</tr>
	</table>
</div></div></div></div>