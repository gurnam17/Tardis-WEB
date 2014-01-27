<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "includes/config.php"?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">

    <title><?php echo $masterTitle ?> - Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/extras.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">Super Spaceship Adventure</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#howtoplay">How to Play</a></li>
              <li class="dropdown">
       			 <a href="#" class="dropdown-toggle" data-toggle="highscores">High Scores <b class="caret"></b></a>
        			<ul class="dropdown-menu">
          				<li><a href="#scorestop10">Top 10 </a></li>
          				<li><a href="#scorestop20">Top 20 </a></li>
       				   <li><a href="#scorestop100">Top 100</a></li>
        			</ul>
     			</li>
            <li><a href="http://37.187.75.63:8080">Jenkins</a></li>
            <li><a href="#faq">FAQ <span class="glyphicon glyphicon-comment"></span></a></li>
            <li><a href="#contact">Contact Us</a></li>
            <form class="navbar-form navbar-left" role="search">
      			<div class="form-group">
        			<input type="text" class="form-control" placeholder="Search">
     			</div>
      			<button type="submit" class="btn btn-default">Search</button>
    		</form>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="template">
        <h1>Super Spaceship Adventure</h1>
        <p class="lead">This site is currently under construction!</p>
      </div>
      
      <div class="progress">
  		<div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
   		 	<span class="sr-only">5% Complete</span>
  		</div>
	  </div>


    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
