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
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Ajouter la locations des propriétés</h3>

        <!-- FORM VILLE -->
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Formulaire pour les villes</h4>
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="{{ route('proprietaire.storeVille') }}" enctype="multipart/form-data">
                  @csrf 
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2"> Le nom de la ville</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="libele" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Ajouter</button>
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
        <!-- FORM COMMUNE -->
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Formulaire pour les communes</h4>
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="{{ route('proprietaire.storeCommune') }}" enctype="multipart/form-data">
                  @csrf 
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2"> Le nom de la commune</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="libele" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="email" class="control-label col-lg-2">La ville ou se trouve la commune</label>
                    <div class="col-lg-10">
                     <select class="form-control mb-3" name="ville_id" aria-label="list des agences">
                          <option selected>Sélectionner une ville</option>
                          @foreach ($villes as $ville)
                          <option value="{{ $ville->id }}">{{ $ville->libele }}</option>
                          @endforeach
                     </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Ajouter</button>
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
        <!-- FORM VILLE -->
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Formulaire pour les quartiers</h4>
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="{{ route('proprietaire.storeQuartier') }}" enctype="multipart/form-data">
                  @csrf 
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2"> Le nom du quartier</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="libele" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="email" class="control-label col-lg-2">La commune du quartier</label>
                    <div class="col-lg-10">
                     <select class="form-control mb-3" name="commune_id" aria-label="list des agences">
                          <option selected>Sélectionner une commune</option>
                          @foreach ($communes as $commune)
                          <option value="{{ $commune->id }}">{{ $commune->libele }}</option>
                          @endforeach
                     </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Ajouter</button>
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
