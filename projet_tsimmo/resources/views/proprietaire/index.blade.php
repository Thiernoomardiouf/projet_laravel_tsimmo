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
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="{{ route('login') }}">Connexion</a></li>
          <li><a class="logout" href="{{ route('register') }}">Inscription</a></li>
          <li> <button class="logout"> 
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('D??connexion') }}
                </x-dropdown-link>
            </form> 
          </button></li>
        </ul>
      </div>
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
              <span style="font-size: 19px">Propri??t??s</span>
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
              <span style="font-size: 19px">Propri??taire</span>
              </a>
            <ul class="sub">
              <li><a href="{{ route('proprietaire.index') }}" style="font-size: 19px"> Liste propri??taire </a></li>
              <li><a href="{{ route('proprietaire.create') }}" style="font-size: 17px"> Ajouter propri??taire </a></li>
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
        <div class="row">
          <div class="col-lg-12 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h1 class="text-center"> Bienvenue ?? Tasmin Immo</h1>
            </div>
            <section > <!-- id="main-content" -->
              <div class="row mt">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                  <div class="project-wrapper">
                    <div class="project">
                      <div class="photo-wrapper">
                        <div class="photo">
                          <a class="fancybox" href="img/portfolio/port04.jpg"><img class="img-responsive m-4" src="img/portfolio/port01.jpg"  alt=""></a>
                        </div>
                        <div class="overlay"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- col-lg-4 -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                  <div class="project-wrapper">
                    <div class="project">
                      <div class="photo-wrapper">
                        <div class="photo">
                          <a class="fancybox" href="img/portfolio/port05.jpg"><img class="img-responsive" src="img/portfolio/port04.jpg" alt=""></a>
                        </div>
                        <div class="overlay"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- col-lg-4 -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                  <div class="project-wrapper">
                    <div class="project">
                      <div class="photo-wrapper">
                        <div class="photo">
                          <a class="fancybox" href="img/portfolio/port06.jpg"><img class="img-responsive" src="img/portfolio/port01.jpg" alt=""></a>
                        </div>
                        <div class="overlay"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- col-lg-4 -->
              </div>
              <!-- /row -->
              <div class="row mt">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                  <div class="project-wrapper">
                    <div class="project">
                      <div class="photo-wrapper">
                        <div class="photo">
                          <a class="fancybox" href="img/portfolio/port01.jpg"><img class="img-responsive" src="img/portfolio/port02.jpg" alt=""></a>
                        </div>
                        <div class="overlay"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- col-lg-4 -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                  <div class="project-wrapper">
                    <div class="project">
                      <div class="photo-wrapper">
                        <div class="photo">
                          <a class="fancybox" href="img/portfolio/port02.jpg"><img class="img-responsive" src="img/portfolio/port08.jpg" alt=""></a>
                        </div>
                        <div class="overlay"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- col-lg-4 -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                  <div class="project-wrapper">
                    <div class="project">
                      <div class="photo-wrapper">
                        <div class="photo">
                          <a class="fancybox" href="img/portfolio/port03.jpg"><img class="img-responsive" src="img/portfolio/port06.jpg" alt=""></a>
                        </div>
                        <div class="overlay"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- col-lg-4 -->
              </div>
              </div>
            </div>
          </section>
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>

</body>

</html>
