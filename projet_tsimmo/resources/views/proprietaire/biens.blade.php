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
      <a href="{{ route('proprietaire.index') }}" class="logo"><b>TSIM<span>MO</span></b></a>
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
            <a class="active" href="{{ route('proprietaire.index') }}">
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
              <li><a href="blank.html">Liste des biens</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="profile.html">Profile</a></li>
              <li><a href="invoice.html">Détails sur un propriétaire</a></li>
              <li><a href="pricing_table.html">Listes des propriétaire</a></li>
              <li><a href="basic_table.html">Liste propriétaire</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Ajouter</span>
              </a>
            <ul class="sub">
              <li><a href="form_component.html">Ajouter propriétaire</a></li>
              <li><a href="advanced_form_components.html">Advanced Components</a></li>
              <li><a href="form_validation.html">Form Validation</a></li>
              <li><a href="contactform.html">Contact Form</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Savoir plus</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.html">Lobby</a></li>
              <li><a href="chat_room.html"> Chat Room</a></li>
              <li><a href="gallery.html"> Chat Room</a></li>
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
          <aside class="mid-side" style="font-size: 20px">
            <div class="chat-room-head">
              <h3>La liste de mes biens</h3>
            </div>
            <div class="group-rom">
              <div class="first-part odd">La liste de mes immeubles</div>
            </div>
            {{$villas}}
            {{dd()}};
            @foreach ($villas as $villa) 
              <div class="group-rom">
                <div class="first-part">Immeuble numéro: {{$villa->id}}</div>
                <div class="second-part">Nom de l'immeuble: {{$villa->libele}}</div>
              </div>
            @endforeach
            <div class="group-rom">
              <div class="first-part odd">Sam Soffes</div>
              <div class="second-part">I want you examine the new product</div>
              <div class="third-part">12:32</div>
            </div>
            <div class="group-rom">
              <div class="first-part">Mark Simmons</div>
              <div class="second-part">Ok, send me the pic</div>
              <div class="third-part">12:32</div>
            </div>
            <div class="group-rom">
              <div class="first-part odd">Sam Soffes</div>
              <div class="second-part">
                <p><img class="img-responsive" width="150" height="150" src="img/port04.jpg" alt=""></p>
              </div>
              <div class="third-part">12:32</div>
            </div>
            <div class="group-rom">
              <div class="first-part">Mark Simmons</div>
              <div class="second-part">Fantastic job, love it :)</div>
              <div class="third-part">12:32</div>
            </div>
            <div class="group-rom last-group">
              <div class="first-part odd">Sam Soffes</div>
              <div class="second-part">Thanks!!</div>
              <div class="third-part">12:33</div>
            </div>
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