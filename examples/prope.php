<?php
    session_start();
    // ob_start(ob_gzhandler);
    $title = "Dashboard";
    $acc_code = "INDEX";
    require "access.php";
    require_once "header.php";
    require_once "sidebar.php";
?>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Hello</h1>
</body>
</html>
<?php
    require_once "footer.php";
    // ob_end_flush();
?>