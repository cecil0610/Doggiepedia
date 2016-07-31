<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	
	    <title>@yield('title')</title>
	    
	    <link href="css/bootstrap.css" rel="stylesheet">
	    <link href="css/bootstrap-theme.css" rel="stylesheet">
	    
	    @hasSection('customStyle')
	    	@yield('customStyle')
	    @endif
	</head>
	 
	<body>
		@yield('content')
	</body>
	
	<script src="js/bootstrap.js"></script>
	<script src="js/npm.js"></script>
	
	@hasSection('customFunction')
		@yield('customFunction')
	@endif
</html>

