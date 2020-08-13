
<!DOCTYPE html>
<html>
<head>
	<title>header</title>
	<script src="jQuery.js"></script>
    <link rel="stylesheet" type="text/css" href="astyle.css">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
</head>
</head>
<body >
   <div class="container-fluid">
            <div class="navbar navbar-inverse">
	            <div class="navbar-header" >
	            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mo">
	            	<span class="icon-bar"></span>
	            	<span class="icon-bar"></span>
	            	<span class="icon-bar"></span>
	            	</button>
	        	    <a class="navbar-brand" href="treewel.php" style="font-size: 30px;">AT-HOME</a>
	            </div>
	            <div class="collapse navbar-collapse" id="mo">
		        <ul class="nav navbar-nav"> 
		  	        <li class="dropdown"><a data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-menu-hamburger"> </span>NOS SERVICES<b class="caret"></b></a>
		  	            <ul class="dropdown-menu">
		  	              <li><a href="serv_santé.php">SERVICE SANITAIRE</a></li>
		  	              <li><a href="serv_menages.php">SERVICE MENAGER</a></li>
		  	              <li><a href="new_hotelier.php">SERVICE HOTELIER</a></li>
		  	              <li><a href="serv_technique.php">SERVICE TECHNIQUE</a></li>
		  	              <li><a href="serv_imobilier.php">SERVICE IMMOBILIER</a></li>
		  	              <li><a href="serv_securitaire.php">SERVICE SECURITAIRE</a></li>
		  	              <li><a href="serv_portuaire.php">SERVICE PORTUAIRE</a></li>
		  	        	  <li><a href="serv_educatifs.php">SERVICE EDUCATIFS</a></li>
		  	            </ul>
		  	        </li>
		  	        <li><a href="#"><span class="glyphicon glyphicon-bell"></span> ABOUT US</a></li>
		  	        <li><a href="#"><span class="glyphicon glyphicon-exclamation-sign" ></span> TERMES ET CONDITIONS</a></li>
		  	        <span class="divider"></span>
		  	       
		    	</ul> 
		    	</div>          
		    </div>
        </div>

        <script>
        $(function (){
        $('.carousel').carousel();
                    });
        </script>

</body>
</html>