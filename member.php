<?php
	include 'core/controller.php';
	new Config();
	PageAccess::memberOnly();
?>
<html>
<head><?php Designer::head(Config::title()); ?></head>
<body>
<?php 
	Designer::navbar("Hi ".$_SESSION['name'],"member.php","Forum","forum.php","Order","member_order.php","Payment","member_payment.php","Logout","logout.php"); 
	echo "<center>Ini Bukan Website Jual BELI</center>";
	echo "<center>Website ini dibuat untuk tugas mata Kuliah TMD13 & TMD14</center>";
	Designer::profile();
	Designer::footer(Config::author());
	Designer::javascript();
?>
</body>
</html>