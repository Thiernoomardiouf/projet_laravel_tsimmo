<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Projet TSIMMO</title>

  <!-- Favicons -->
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{ url('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!--external css-->
  <link href="{{ url('lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{ url('css/zabuto_calendar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('lib/gritter/css/jquery.gritter.css') }}" />
  <!-- Custom styles for this template -->
  <link href="{{ url('css/style.css') }}" rel="stylesheet">
  <link href="{{ url('css/style-responsive.css') }}" rel="stylesheet">
  <script src="{{ url('lib/chart-master/Chart.js') }}"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="{{ route('proprietaires.index') }}" class="logo"><b>TSIM<span>MO</span></b></a>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse" >
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><img src="{{ url('img/ui-sam.png') }}" class="img-circle" width="100" height="100"></p>
          <h4 class="centered">TS - IMMO</h4>
          <li class="mt">
            <a class="active" href="{{ route('proprietaires.index') }}">
              <i class="fa fa-dashboard"></i>
              <span style="font-size: 19px">Tableau de bord</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span style="font-size: 19px">Propriétés</span>
              </a>
            <ul class="sub">
              <li ><a href="{{ route('proprietaire.immeuble') }}" style="font-size: 19px">Immeubles</a></li>
              <li><a href="{{ route('proprietaire.appartement') }}" style="font-size: 19px"> Appartements</a></li>
              <li><a href="{{ route('proprietaire.villa') }}" style="font-size: 19px"> Villas </a></li>
              <li><a href="{{ route('proprietaire.studio') }}" style="font-size: 19px"> Studios</a></li>
              <li><a href="{{ route('proprietaire.bureau') }}" style="font-size: 19px" > Bureaux </a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span style="font-size: 19px">Propriétaire</span>
              </a>
            <ul class="sub">
              <li><a href="{{ route('proprietaire.index') }}" style="font-size: 19px"> Liste propriétaire </a></li>
              <li><a href="{{ route('proprietaire.create') }}" style="font-size: 17px"> Ajouter propriétaire </a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span style="font-size: 19px">Ajouter</span>
              </a>
            <ul class="sub">
              <li><a href="{{ route('proprietaire.createAgence') }}" style="font-size: 19px">Ajouter agence</a></li>
              <li><a href="{{ route('proprietaire.createQuartier') }}" style="font-size: 19px">Ajouter les lieux</a></li>
              <li><a href="{{ route('proprietaire.createImmeuble') }}" style="font-size: 19px">Ajouter immeuble</a></li>
              <li><a href="{{ route('proprietaire.createVilla') }}" style="font-size: 19px">Ajouter des villas</a></li>
              <li><a href="{{ route('proprietaire.createBureau') }}" style="font-size: 19px">Ajouter des appatements, bureaux ou studios</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Ajouter une Agence TS-IMMO </h3>

        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Veillez remplir correctement le formulaire</h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="post" action="{{ route('proprietaire.storeAgence') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">La raison social </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="raison_social" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">Le siége social</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="lastname" name="siege_social" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">L'adresse de l'agence</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="adresse" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="password" class="control-label col-lg-2">Le numéro de l'agence </label>
                    <div class="col-lg-10">
                      <input class="form-control " id="password" name="telephone" type="text" />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Enrégistrer</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/form-validation-script.js"></script>

</body>

</html>
