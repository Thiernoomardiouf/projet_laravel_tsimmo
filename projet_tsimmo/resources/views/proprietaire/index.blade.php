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
              <li><a href="login.html">Login</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Ajouter</span>
              </a>
            <ul class="sub">
              <li><a href="{{ route('proprietaire.createQuartier') }}">Ajouter les lieux</a></li>
              <li><a href="advanced_form_components.html">Advanced Components</a></li>
              <li><a href="form_validation.html">Form Validation</a></li>
              <li><a href="contactform.html">Contact Form</a></li>
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
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h1 class="text-center"> Bienvenue à Tasmin Immo</h1>
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
              <!-- /row -->
              <div class="row mt mb">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                  <div class="project-wrapper">
                    <div class="project">
                      <div class="photo-wrapper">
                        <div class="photo">
                          <a class="fancybox" href="img/portfolio/port04.jpg"><img class="img-responsive" src="img/portfolio/port07.jpg" alt=""></a>
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
                          <a class="fancybox" href="img/portfolio/port05.jpg"><img class="img-responsive" src="img/portfolio/port05.jpg" alt=""></a>
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
                          <a class="fancybox" href="img/portfolio/port06.jpg"><img class="img-responsive" src="img/portfolio/port04.jpg" alt=""></a>
                        </div>
                        <div class="overlay"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- col-lg-4 -->
              </div>
              
          </section>

            <!-- /row -->
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <div class="col-lg-3 ds">
            <!--new earning end-->
            <!-- SECTION PARTENAIRE-->
            <h4 class="centered mt">NOS PARTENAIRES</h4>
            <!-- First Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>Just Now</muted>
                  <br/>
                  <a href="#">Paul Rudd</a> purchased an item.<br/>
                </p>
              </div>
            </div>
            <!-- Second Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>2 Minutes Ago</muted>
                  <br/>
                  <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                </p>
              </div>
            </div>
            <!-- Third Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>3 Hours Ago</muted>
                  <br/>
                  <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
                </p>
              </div>
            </div>
            <!-- Fourth Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>7 Hours Ago</muted>
                  <br/>
                  <a href="#">Brando Page</a> purchased a year subscription.<br/>
                </p>
              </div>
            </div>
            <!-- USERS ONLINE SECTION -->
            <h4 class="centered mt">NOS MEMBERS TEMOIGNE</h4>
            <!-- First Member -->
            <div class="desc">
              <div class="thumb">
                <img class="img-circle" src="img/ui-divya.jpg" width="35px" height="35px">
              </div>
              <div class="details">
                <p>
                  <a href="#">DIVYA MANIAN</a><br/>
                  <muted>Available</muted>
                </p>
              </div>
            </div>
            <!-- Second Member -->
            <div class="desc">
              <div class="thumb">
                <img class="img-circle" src="img/ui-sherman.jpg" width="35px" height="35px">
              </div>
              <div class="details">
                <p>
                  <a href="#">DJ SHERMAN</a><br/>
                  <muted>I am Busy</muted>
                </p>
              </div>
            </div>
            <!-- Third Member -->
            <div class="desc">
              <div class="thumb">
                <img class="img-circle" src="img/ui-danro.jpg" width="35px" height="35px">
              </div>
              <div class="details">
                <p>
                  <a href="#">DAN ROGERS</a><br/>
                  <muted>Available</muted>
                </p>
              </div>
            </div>
            <!-- Fourth Member -->
            <div class="desc">
              <div class="thumb">
                <img class="img-circle" src="img/ui-zac.jpg" width="35px" height="35px">
              </div>
              <div class="details">
                <p>
                  <a href="#">Zac Sniders</a><br/>
                  <muted>Available</muted>
                </p>
              </div>
            </div>
       
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
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
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
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
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
