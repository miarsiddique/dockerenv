<!DOCTYPE html>
<html lang="en">
<head>
  <title>MVC Learn</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
  <?php include('View/header.php')  ?>
<br>

<div class="container">
  <h1>About</h1>
  <?php 
  	
  	foreach ($about as $key => $value) {
  		echo "$value";
  	}

  ?>
</div>

</body>
</html>