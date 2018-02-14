<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Cars Index Page</h1>
	<section>
      <ul>
	  <?php while($row = $cars->fetch_object()): ?>
	      <li>
		  Here is a <?php echo $row->car ?> for <?php echo $row->owner?>
	      </li>
	  <?php endwhile; ?>
      </ul>
      <a href="./new"><button>Create!</button></a>
  </section>
</body>
</html>