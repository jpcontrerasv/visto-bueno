<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header class="box fwidth">
    	<div class="container-fluid">
        	<div class="col-lg-12 text-center">
		    	<img src="img/logo-wannabi.gif" alt="">
        	</div>
        </div>
    </header>
    
    <div class="container-fluid">
    	<div class="col-lg-10 col-lg-offset-1 text-center img-post">
        
        	<section class="container-fluid titulo">
            	<div class="col-lg-2 text-right">
                	<p>Nombre de la entrega</p>
                </div>
            	<div class="col-lg-4 text-left">
                	<p><strong>Banner Drugstore - 01</strong></p>
                </div>
            	<div class="col-lg-2 text-right">
                	<p>Fecha de la entrega</p>
                </div>
            	<div class="col-lg-4 text-left">
                	<p><strong>01 / 01 / 2014</strong></p>
                </div>
            </section>
            
            <div class="clearfix"></div>
            <ul class="slides">
                <li><img src="img/banner.gif" /></li>
                <li><img src="img/banner.gif" /></li>
            </ul>
        </div>
    </div>
    <hr>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
	<script defer src="js/jquery.flexslider.js"></script>

	<script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
      });
    });
    </script>
    
    
  </body>
</html>