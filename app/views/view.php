<!DOCTYPE html>

<html>
<head>
	<title><?php echo $title;?></title>
</head>

<body>
<h1><?php echo $authors->name; ?></h1>

<p><?php echo $authors->bio;?></p>
<p><small><?php echo $authors->updated_at;?></small></p>
</body>
</html>