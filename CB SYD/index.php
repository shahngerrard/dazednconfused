<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Strengthen Your DNA</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">  
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
	<div class="container-fluid">
  
  
  		<div class="row">
 			<div id= "right_container" class="col-sm-4">
 					
<!-- Trigger the modal with a SIGN IN button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Sign In</button>

<!-- SIGN IN Modal -->
			<div id="myModal" class="modal fade" role="dialog">
  			<div class="modal-dialog">

<!-- SIGN IN Modal content-->
    		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title">Sign In</h4>
      		</div>
      		<div class="modal-body">
        		<p>
        		<form>
  				<div class="form-group">
   					<label for="email">Email address:</label>
    				<input type="email" class="form-control" id="email">
  				</div>
  				<div class="form-group">
    				<label for="pwd">Password:</label>
    				<input type="password" class="form-control" id="pwd">
  				</div>
  				<div class="checkbox">
    				<label><input type="checkbox"> Remember me</label>
  				</div>
  				<button type="submit" class="btn btn-default">Submit</button>
			</form>
        	</p>
      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      		</div>
    		</div>
		</div>
		</div>

<!-- Trigger the modal with a SIGN UP button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Sign Up</button>

<!-- SIGN UP Modal -->
			<div id="myModal2" class="modal fade" role="dialog">
  			<div class="modal-dialog">

<!-- SIGN UP Modal content-->
    		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title">Sign Up</h4>
      		</div>
      		<div class="modal-body">
        		<p>
        		<form>
  				<div class="form-group">
   					<label for="email">First Name:</label>
    				<input type="email" class="form-control" id="fname">
  				</div>
				<div class="form-group">
   					<label for="email">Last Name:</label>
    				<input type="email" class="form-control" id="lname">
  				</div>
				<div class="form-group">
   					<label for="email">Email Address:</label>
    				<input type="email" class="form-control" id="email">
  				</div>
  				<div class="form-group">
    				<label for="pwd">Password:</label>
    				<input type="password" class="form-control" id="pwd">
  				</div>
  				<div class="checkbox">
    				<label><input type="checkbox"> Remember me</label>
  				</div>
  				<button type="submit" class="btn btn-default">Submit</button>
			</form>
        	</p>
      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      		</div>
    		</div>
		</div>
		</div>


		</div>


  		<div class="col-sm-8 bosom-none">
  			<div class="limit">
  			<img src="images/tree_index1.jpeg" class="img-responsive" alt="tree_index" id="tree_index">
  		</div>
  		</div>
		</div>
		</div>


<footer class="footer">
		<nav class="navbar navbar-fixed-bottom">
 			<div class="container-fluid">
    		<ul class="nav navbar-inverse navbar-nav">
    			<li class="active"><a class="navbar-brand" href="index.php">Strengthen My DNA</a>
				<li><a href="family_tree.php">Family Tree</a></li>  
      			<li><a href="about.php">About</a></li> 
    		</ul>
		<ul class="nav navbar-nav navbar-right">
      			<li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
      			<li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
    		</ul>
    		</nav>
    		</div>
 </footer>
  
<!--
    	<div class="row-fluid">
    		<div class="col-xs-2">
    <h4>Better Families Now!</h4>
    <p> Enter a generation year (search returns +/- ten years either side) </p>
		
			<p class = "lead">Enter Generation Year    Enter your surname here:</p>
			<form action="#" id="searchTrove">
        	<input id="searchYear" type="number" />
			<input id="searchTerm" type="text" />
		
			<button type="submit" id="searchbtn">Search</button>
			</form>
		<div id="output">

		</div>
		</div>
         <div class="col-xs-6">
         <h1> This is where the tree will go</h1>
			</div>
			</div>
			</div>
            
            
            -->
	<!--	<footer class="site-footer"><div class=" site-info">Fake Family Tree</div></footer>-->
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/trove.js"></script>
    <script src="js/strengthen_dna_general.js"></script>
    <script type="text/javascript" src="js/jquery.js?ver=1.11.1"></script>
	<script type="text/javascript" src="js/jquery-migrate.min.js?ver=1.2.1"></script>
        
  </body>
</html>













