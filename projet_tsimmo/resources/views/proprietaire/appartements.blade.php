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
  <link href="{{ url('img/favicon.png') }}" rel="icon">
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
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><img src="{{ url('img/ui-sam.png') }}" class="img-circle" width="100" height="100"></p>
          <h5 class="centered">TS - IMMO</h5>
          <li class="mt">
            <a class="active" href="{{ route('proprietaires.index') }}">
              <i class="fa fa-dashboard"></i>
              <span>Tableau de bord</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Propriétés</span>
              </a>
            <ul class="sub">
              <li><a href="{{ route('proprietaire.immeuble') }}">Immeubles</a></li>
              <li><a href="{{ route('proprietaire.appartement') }}"> Appartements</a></li>
              <li><a href="{{ route('proprietaire.villa') }}"> Villas </a></li>
              <li><a href="{{ route('proprietaire.studio') }}"> Studios</a></li>
              <li><a href="{{ route('proprietaire.bureau') }}"> Bureaux </a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Propriétaire</span>
              </a>
            <ul class="sub">
              <li><a href="{{ route('proprietaire.index') }}"> Liste propriétaire </a></li>
              <li><a href="{{ route('proprietaire.create') }}"> Ajouter propriétaire </a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Ajouter</span>
              </a>
            <ul class="sub">
              <li><a href="{{ route('proprietaire.createQuartier') }}">Ajouter les lieux</a></li>
              <li><a href="{{ route('proprietaire.createImmeuble') }}">Ajouter des immeubles</a></li>
              <li><a href="{{ route('proprietaire.createVilla') }}">Ajouter des villas</a></li>
              <li><a href="{{ route('proprietaire.createBureau') }}">Ajouter des appatements, bureaux ou studios</a></li>
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
      <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="chat-room mt">
          <aside class="mid-side">
            <div class="chat-room-head">
              <h3>Nos appartements</h3>
              <form action="#" class="pull-right position">
                <input type="text" placeholder="Search" class="form-control search-btn ">
              </form>
            </div>
            <div class="room-desk">
              <h4 class="pull-left">Nous vous proposons le confort</h4>
            @foreach ($appartements as $appartement) 
              <div class="room-box" style="font-size: 25px">
                <h3 class="text-primary"> {{$appartement->libele}} </h3>
                <p>Cette appartement occupe une supérficie de {{$appartement->superficie}}</p>
                <p><span class="text-muted">Nombre de piéces :</span> {{$appartement->nombre_piece}} | <span class="text-muted">. Il se trouve dans l'immeuble :</span> {{$appartement->immeuble->libele}} </p>
              </div>
            @endforeach
            </div>
            
          </aside>

          <aside class="right-side">
            <div class="user-head">
              <a href="#" class="chat-tools btn-theme"><i class="fa fa-cog"></i> </a>
              <a href="#" class="chat-tools btn-theme03"><i class="fa fa-key"></i> </a>
            </div>
            <div class="invite-row">
              <h4 class="pull-left">Nos locataires </h4>
            </div>
            <ul class="chat-available-user">
              <li>
                <a href="chat_room.html">
                  <img class="img-circle" src="img/friends/fr-02.jpg" width="32">
                  Paul Brown
                  <span class="text-muted">Je suis à satisfait</span>
                  </a>
              </li>
              <li>
                <a href="chat_room.html">
                  <img class="img-circle" src="img/friends/fr-05.jpg" width="32">
                  David Duncan
                  <span class="text-muted">L'appartement est calme et tranquille</span>
                  </a>
              </li>
              <li>
                <a href="chat_room.html">
                  <img class="img-circle" src="img/friends/fr-07.jpg" width="32">
                  Laura Smith
                  <span class="text-muted">Ici c'est le confort totale</span>
                  </a>
              </li>
              <li>
                <a href="chat_room.html">
                  <img class="img-circle" src="img/friends/fr-08.jpg" width="32">
                  Julia Schultz
                  <span class="text-muted">Je renouvelle toujours mon contrat</span>
                  </a>
              </li>
              <li>
                <a href="chat_room.html">
                  <img class="img-circle" src="img/friends/fr-01.jpg" width="32">
                  Frank Arias
                  <span class="text-muted">TSIMMO c'est le plaisir et la satisfaction totale</span>
                  </a>
              </li>
            </ul>
          </aside>
        </div>
        <!-- page end-->
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

</body>

</html>
