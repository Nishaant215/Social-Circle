<?php
	session_start();
	
	/* --- --- SESSION CONFIGURATION --- --- Edit values for each page --- --- */
	$_SESSION['last_edit'] = ''; /* DDHHMM(Zone)MMMYY */
	$_SESSION['active_page'] = 'index'; /* For navigation */
	$_SESSION['friendly_name'] = 'Sign in';
	/* --- --- END SESSION CONFIGURATION --- --- */
	
	require_once('global/premark.php');
?>

	<head>
		<meta charset="utf-8">
		<title>Circle - <?php echo $_SESSION['friendly_name'];?></title>
		<link rel="shortcut icon" href="/favicon.ico">
	</head>

	<body>
	</body>
</html>
