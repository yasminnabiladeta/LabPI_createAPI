<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="asset/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="asset/style1.css">
</head>

<body>
	<div class="col-md-4 col-md-offset-4">
		<h2>Login</h2>

		<form action="index.php?submit" method="post">
            <div class="form-group">
			    <label for="Username">Username</label>
			    <input type="text" class="form-control" name="username" id="username">
			</div>
			<div class="form-group">
		    	<label for="password">Password:</label>
		    	<input type="password" class="form-control" name="password" id="password">
		  	</div>
		  	<button type="submit" class="btn btn-default">Submit</button>
        </form>
	</div>
</body>
</html>