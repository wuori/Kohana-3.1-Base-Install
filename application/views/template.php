<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type"  content="text/html; charset=ISO-8859-1" />
	<meta name="robots" content="all" />
	<title><?=$title;?> - <?=Kohana::config('site.site_name');?></title>
	<link rel="stylesheet" type="text/css" media="screen" href="/public/css/screen.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="/public/css/theme.css" />
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" href="/public/css/screen_ie_lt_7.css" />
	<![endif]-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>
	<script src="/public/js/common.js" type="text/javascript"></script>
</head>
<body>
	<?=$content?>
</body>
</html>