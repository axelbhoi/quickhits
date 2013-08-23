<!DOCTYPE html>

<html>
<head>
	<title><?php echo $title;?></title>
	<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
</head>

<body>
<h1>Authors Home Page</h1>

<ul>
	<?php foreach($authors as $author):?>
		<li><a href = "authors/<?php echo $author->id;?>"><?php echo $author->name;?></a>
	<?php endforeach;?>
</ul>
</body>
</html>