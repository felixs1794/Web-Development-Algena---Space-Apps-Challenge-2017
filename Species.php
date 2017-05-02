<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Artificial Gene Analyzer</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>



    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;ALGENA</a>
                </div>


            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
              <ul class="nav" id="main-menu">
                  <li class="text-center user-image-back">
                      <img src="assets/img/latam.jpeg" class="img-responsive" />

                  </li>
                  <li>
                      <a href="index.html"><i class="fa fa-desktop "></i>Home</a>
                  </li>
                  <li>
                      <a href="DistributionMaps.html"><i class="fa fa-table "></i>Distribution Maps</a>
                  </li>
                  <li>
                      <a href="EvolutionGene.html"><i class="fa fa-edit "></i>Evolution Genes </a>
                  </li>

                  <li>
                      <a href="Species.php"><i class="fa fa-sitemap "></i>Species</a>
                  </li>
                  <li>
                      <a href="PanamaNature.html"><i class="fa fa-qrcode "></i>Panama Nature </a>
                  </li>
                  <li>
                      <a href="#"><i class="fa fa-bar-chart-o"></i>Mettis Charts</a>
                  </li>
              </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Data Base</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                  <hr />


                  	<?php
				include("preconexion.php");


			?>









                 <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
