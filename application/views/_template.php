<!DOCTYPE html>
<!-- Template for pages!-->
<html>
	<head>
		<title id="pageTitle">{pagetitle}</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<link type="text/css" rel="stylesheet" href="/assets/css/style.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
	</head>
	<body>	    
	    <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
		<a class="navbar-brand" href="#">{pageheader}</a>
		<ul class="nav navbar-nav">
		    <li class="nav-item active">
		      <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#">Courses</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#">Periods</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#">Days</a>
		    </li>
		</ul>
	    </nav>
	    <!-- Large button group -->
	    <form action="/welcome/search" method="post" accept-charset="utf-8" id = "dropdown_day">		
		{dateAvailable}{timeAvailable}
		<input id =searchButton type="submit" name="submit" value="Search" />
	    </form>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
	</body>
</html>