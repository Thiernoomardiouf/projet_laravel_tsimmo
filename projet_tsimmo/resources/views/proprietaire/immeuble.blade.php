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
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row mt">
          <div class="col-lg-12 col-md-12 col-sm-12">
          
          @foreach ($immeubles as $immeuble)
              <div class="showback">
                
                <div class="row">
                  <h3 class="text-center"><span style="font-weight: bold">Nom de l'immeuble:</span> {{$immeuble->libele}} </h3>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <p style="font-size: 25px">Nombre d'appartement: {{$immeuble->nombre_appartement}}</p>
                  </div>
                  <div class="col-md-3">
                    <p style="font-size: 25px">Nombre de Studio: {{$immeuble->nombre_studio}}</p>
                  </div>
                  <div class="col-md-3">
                    <p style="font-size: 25px">Nombre de bureau: {{$immeuble->nombre_bureau}}</p>
                  </div>
                  <div class="col-md-3">
                    <p style="font-size: 25px">Nombre de Studio: {{$immeuble->nombre_magasin}}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <p style="font-size: 25px"> Supérficie: {{$immeuble->superficie}}</p>
                  </div>
                  <div class="col-md-3">
                    <p style="font-size: 25px"> Quartier: {{$immeuble->quartier->libele}}</p>
                  </div>
                  <div class="col-md-3">
                    <p style="font-size: 25px"> Proprétaire: {{$immeuble->prorietaire->prenom }}  {{ $immeuble->prorietaire->nom}}</p>
                  </div>
                </div>
                
              </div>
            @endforeach

            <!-- /showback -->
          </div>
          
        </div>
        <!--/ row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
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
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
</body>

</html>
