<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<meta charset="UTF-8">

	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Serif' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" type="text/css" href="css/style-min.css">
  	
	<title>Droply - file upload javascript & php plugin | falkzone</title>
	
	
	<style>
		body
		{
			font-family: 'Droid', sans-serif;
		}
		a, div.price a:visited,div.docs a:visited {
			color:white;
			text-decoration:none;
		}
        img.plugin-logo{
          margin-top:20px;
        }
        
        div.droply-filedrag 
        {
          background-color: rgb(55, 118, 185);
        }
        
		div.output {
			font-family: sans-serif;
			font-size: 12px;
			max-width:300px;
			position: absolute;
			left: 51px;
			top: 364px;
		}
		div.output:before
		{
			content:'Debug : ';
			font-size:20px;
			color:red;
		}
	</style>
	
</head>
<body style="background-image:url('images/bg.jpg');background-size:cover">
	<center>

		<main class="cd-main-content">
			<!-- your main content here -->
				<img class="plugin-logo" src="images/logo.png"><br/><br/>

				<div class="output"></div>
				<!-- put your arfaly container anywhere -->
				<div id="mas"></div>
        </main>
	
	</center>
	
	<script language="javascript" type="text/javascript" src="js/jquery-1.11.1.min.js" ></script>
	<script language="javascript" type="text/javascript" src="js/modernizr.js" ></script>
	<script language="javascript" type="text/javascript" src="js/droply-min.js" ></script>
	<script language="javascript" type="text/javascript" src="js/custom.js" ></script>
</body>
</html>