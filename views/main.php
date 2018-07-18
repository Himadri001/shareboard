<html>
<head>
	<title>Shareboard</title>
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
</head>
<body>
	<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo ROOT_URL; ?>home/loggedinhome">Shareboard</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
           
             <li><a href="<?php echo ROOT_URL; ?>shares">Summary</a></li>
            <li><a  href="<?php echo ROOT_PATH; ?>shares/HouseList">House wise</a></li>
            
               <li><a href="<?php echo ROOT_URL; ?>shares/totalassests">Total Assets</a></li>
            
           

</div>
          </ul>
          <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          <li><a href="<?php echo ROOT_URL; ?>users/logout">Logout</a></li>
          </ul>
          </div>
         

         
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo ROOT_URL; ?>home/loggedinhome">Shareboard</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo ROOT_URL; ?>shares/addproduct">Add Product<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
        <li ><a href="<?php echo ROOT_URL; ?>shares/deleteproduct">Delete Product<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
        <li ><a href="<?php echo ROOT_URL; ?>shares/updatestatus">Update Product<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
        <li ><a href="<?php echo ROOT_URL; ?>shares/newhouse">Add House<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
        <li ><a href="<?php echo ROOT_URL; ?>shares/updatehouse">Update House<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
        <li ><a href="<?php echo ROOT_URL; ?>shares/housedelete">Delete House<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
        <li ><a href="<?php echo ROOT_URL; ?>shares/newcategory">Add Category<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
        <li ><a href="<?php echo ROOT_URL; ?>shares/deletecategory">Delete Category<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
        <li ><a href="<?php echo ROOT_URL; ?>shares/updatecategory">Update Category<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>

      
      </ul>
    </div>
  </div>
</nav>
<div class="main">
<!-- Content Here -->
</div>

    <div class="container">

     <div class="row">
      <?php Messages::display(); ?>
     	<?php require($view); ?>
     </div>

    </div><!-- /.container -->
</body>
</html>