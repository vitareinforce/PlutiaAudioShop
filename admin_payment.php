<?php
	include 'core/controller.php';
	new Config();
	PageAccess::adminOnly();
?>
<html>
<head><?php Designer::head(Config::title()); ?></head>
<body>
<?php 
	Designer::navbar("Hi ".$_SESSION['name'],"admin.php","Forum","forum.php","Add New Item","admin_item.php","Manage User Payment","admin_payment.php","Logout","logout.php"); 
	Designer::disclaimer();
	Admin::payment_manager();
	Designer::footer(Config::author());
	Designer::javascript();
?>
</body>
</html>