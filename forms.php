<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Colegio CIMA Educativa</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  <!-- Custom Font Icons CSS-->
  <link rel="stylesheet" href="css/font.css">
  <!-- Google fonts - Muli-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.ico">
  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

  <script src="angular-1.8.2/angular.min.js"></script>
  <script src="angular-1.8.2/angular-route.min.js"></script>
  <script src="angular-1.8.2/angular-resource.min.js"></script>

</head>

<body ng-app="first" ng-controller="firstController as first1">
  <header class="header">
    <nav class="navbar navbar-expand-lg">
      <!--         <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div> -->
      <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="navbar-header">
          <!-- Navbar Header--><a href="index.html" class="navbar-brand">
            <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Plataforma</strong><strong>Tutores</strong></div>
            <div class="brand-text brand-sm"><strong class="text-primary">P</strong><strong>T</strong></div>
          </a>
          <!-- Sidebar Toggle Btn-->
          <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
        </div>
        <div class="right-menu list-inline no-margin-bottom">
          <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>
          <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i><span class="badge dashbg-1">5</span></a>
            <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages"><a href="#" class="dropdown-item message d-flex align-items-center">
                <div class="profile"><img src="img/avatar-3.jpg" alt="..." class="img-fluid">
                  <div class="status online"></div>
                </div>
                <div class="content"> <strong class="d-block">Nadia Halsey</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">9:30am</small></div>
              </a><a href="#" class="dropdown-item message d-flex align-items-center">
                <div class="profile"><img src="img/avatar-2.jpg" alt="..." class="img-fluid">
                  <div class="status away"></div>
                </div>
                <div class="content"> <strong class="d-block">Peter Ramsy</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">7:40am</small></div>
              </a><a href="#" class="dropdown-item message d-flex align-items-center">
                <div class="profile"><img src="img/avatar-1.jpg" alt="..." class="img-fluid">
                  <div class="status busy"></div>
                </div>
                <div class="content"> <strong class="d-block">Sam Kaheil</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">6:55am</small></div>
              </a><a href="#" class="dropdown-item message d-flex align-items-center">
                <div class="profile"><img src="img/avatar-5.jpg" alt="..." class="img-fluid">
                  <div class="status offline"></div>
                </div>
                <div class="content"> <strong class="d-block">Sara Wood</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">10:30pm</small></div>
              </a><a href="#" class="dropdown-item text-center message"> <strong>See All Messages <i class="fa fa-angle-right"></i></strong></a></div>
          </div>
          <!-- Tasks-->
          <!--             <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink2" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link tasks-toggle"><i class="icon-new-file"></i><span class="badge dashbg-3">9</span></a>
              <div aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu tasks-list"><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 1</strong><span>40% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 2</strong><span>20% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-3"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 3</strong><span>70% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-2"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 4</strong><span>30% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-4"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 5</strong><span>65% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                  </div></a><a href="#" class="dropdown-item text-center"> <strong>See All Tasks <i class="fa fa-angle-right"></i></strong></a>
              </div>
            </div> -->
          <!-- Tasks end-->
          <!-- Megamenu-->
          <!--             <div class="list-inline-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="nav-link">Mega <i class="fa fa-ellipsis-v"></i></a>
              <div class="dropdown-menu megamenu">
                <div class="row">
                  <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                    <ul class="list-unstyled mb-3">
                      <li><a href="#">Lorem ipsum dolor</a></li>
                      <li><a href="#">Sed ut perspiciatis</a></li>
                      <li><a href="#">Voluptatum deleniti</a></li>
                      <li><a href="#">At vero eos</a></li>
                      <li><a href="#">Consectetur adipiscing</a></li>
                      <li><a href="#">Duis aute irure</a></li>
                      <li><a href="#">Necessitatibus saepe</a></li>
                      <li><a href="#">Maiores alias</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                    <ul class="list-unstyled mb-3">
                      <li><a href="#">Lorem ipsum dolor</a></li>
                      <li><a href="#">Sed ut perspiciatis</a></li>
                      <li><a href="#">Voluptatum deleniti</a></li>
                      <li><a href="#">At vero eos</a></li>
                      <li><a href="#">Consectetur adipiscing</a></li>
                      <li><a href="#">Duis aute irure</a></li>
                      <li><a href="#">Necessitatibus saepe</a></li>
                      <li><a href="#">Maiores alias</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                    <ul class="list-unstyled mb-3">
                      <li><a href="#">Lorem ipsum dolor</a></li>
                      <li><a href="#">Sed ut perspiciatis</a></li>
                      <li><a href="#">Voluptatum deleniti</a></li>
                      <li><a href="#">At vero eos</a></li>
                      <li><a href="#">Consectetur adipiscing</a></li>
                      <li><a href="#">Duis aute irure</a></li>
                      <li><a href="#">Necessitatibus saepe</a></li>
                      <li><a href="#">Maiores alias</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                    <ul class="list-unstyled mb-3">
                      <li><a href="#">Lorem ipsum dolor</a></li>
                      <li><a href="#">Sed ut perspiciatis</a></li>
                      <li><a href="#">Voluptatum deleniti</a></li>
                      <li><a href="#">At vero eos</a></li>
                      <li><a href="#">Consectetur adipiscing</a></li>
                      <li><a href="#">Duis aute irure</a></li>
                      <li><a href="#">Necessitatibus saepe</a></li>
                      <li><a href="#">Maiores alias</a></li>
                    </ul>
                  </div>
                </div>
                <div class="row megamenu-buttons text-center">
                  <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-1"><i class="fa fa-clock-o"></i><strong>Demo 1</strong></a></div>
                  <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-2"><i class="fa fa-clock-o"></i><strong>Demo 2</strong></a></div>
                  <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-3"><i class="fa fa-clock-o"></i><strong>Demo 3</strong></a></div>
                  <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-4"><i class="fa fa-clock-o"></i><strong>Demo 4</strong></a></div>
                  <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link bg-danger"><i class="fa fa-clock-o"></i><strong>Demo 5</strong></a></div>
                  <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link bg-info"><i class="fa fa-clock-o"></i><strong>Demo 6</strong></a></div>
                </div>
              </div>
            </div> -->
          <!-- Megamenu end     -->
          <!-- Languages dropdown    -->
          <!--             <div class="list-inline-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
              <div aria-labelledby="languages" class="dropdown-menu"><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/DE.png" alt="English" class="mr-2"><span>German</span></a><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/FR.png" alt="English" class="mr-2"><span>French  </span></a></div>
            </div> -->
          <!-- Log out               -->
          <div class="list-inline-item logout"> <a id="logout" href="login.html" class="nav-link"> <span class="d-none d-sm-inline">Salir </span><i class="icon-logout"></i></a></div>
        </div>
      </div>
    </nav>
  </header>
  <div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
          <h1 class="h5">Juan XXX XXX</h1>
          <p>Tutor</p>
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
      <ul class="list-unstyled">
        <li><a href="index.html"> <i class="icon-home"></i>Home </a></li>
        <li><a href="tables.html"> <i class="icon-grid"></i>Tables </a></li>
        <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a></li>
        <li class="active"><a href="forms.html"> <i class="icon-padnote"></i>Colegiaturas </a></li>
        <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Example dropdown </a>
          <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
            <li><a href="#">Page</a></li>
            <li><a href="#">Page</a></li>
            <li><a href="#">Page</a></li>
          </ul>
        </li>
        <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>
      </ul><span class="heading">Extras</span>
      <ul class="list-unstyled">
        <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
        <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
        <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
      </ul>
    </nav>
    <!-- Sidebar Navigation end-->
    <div class="page-content">
      <!-- Page Header-->
      <div class="page-header no-margin-bottom">
        <div class="container-fluid">
          <h2 class="h5 no-margin-bottom">Colegiaturas</h2>
        </div>
      </div>
      <!-- Breadcrumb-->
      <div class="container-fluid">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Colegiaturas </li>
        </ul>
      </div>
      <section class="no-padding-top">
        <div class="container-fluid">
          <div class="row">
            <!-- Basic Form-->
            <div class="col-lg-6">
              <div class="block">
                <div class="title"><strong class="d-block">Pago de colegiatura</strong><span class="d-block">Lorem ipsum dolor sit amet consectetur.</span></div>
                <div class="block-body">
                  <form>
                    <div class="form-group">
                      <a href="#" data-toggle="modal" data-target="#exampleModal" id="btn-Checkout" class="btn btn-danger boton-siguiente">Confirmar</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- Horizontal Form-->

          </div>
        </div>
      </section>
      <footer class="footer">
        <div class="footer__block block no-margin-bottom">
          <div class="container-fluid text-center">
            <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            <p class="no-margin-bottom">2021 &copy; Colegio Cima Educativa. Design by <a href="#">Nubitts</a>.</p>
          </div>
        </div>
      </footer>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Datos del Tutor</h5>
            </div>
            <div class="modal-body">

              <div class="row">
                <div class="col-md-6 col-sm-6 mb-2">
                  <input type="text" class="form-control" ng-model="head.name" placeholder="Nombre y Apellido completo" id="nombre" name="nombre" value="Juan XXX XXX" autofocus="" aria-describedby="emailHelp">
                </div>
                <div class=" col-sm-6 mb-2">
                  <input type="text" class="form-control" ng-model="head.dni" placeholder="RFC" id="dni" name="rfc" value="JUGE740202QU6" autofocus="" aria-describedby="emailHelp">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 mb-2">

                  <input type="email" class="form-control" ng-model="head.email" placeholder="Correo electrónico" id="email" name="email" value="edjuga@gmail.com" aria-describedby="emailHelp">
                </div>
                <div class="col-sm-6 mb-2">

                  <input type="text" class="form-control" ng-model="head.phone" placeholder="Telofono" id="telefono" name="telefono" value="8125720115" aria-describedby="emailHelp">
                </div>
              </div>

              <div class="clearfix"></div>

              <div style="border:1px solid #ccc;padding:10px 10px;border-radius:8px;">
                <div class="mb-2 mt-2" style="clear:both;float:left;width:70%;">
                  <label class="texto-che">Detalle De Pedido </label>
                </div>

                <table style="border:none;color:#666;">
                  <tr style="height:35px;">
                    <td class="espacio"><label>Colegiatura</label></td>

                    <td><input style="border:none;text-align: right;" ng-model="head.photos" type="text" readonly="" value="1000" name="contadorPhotosForm" id="contadorPhotosForm" /></td>
                  </tr>
                  <tr style="height:35px;">
                    <td class="espacio"><label>Descuento</label>&nbsp;<label id="signotipodescuento"></label></td>
                    <td><input style="border:none;text-align: right;" type="text" ng-model="head.discount" value="0" id="descuento" name="descuento" aria-describedby="emailHelp" readonly="readonly">
                      <input type="hidden" value="0" id="cuponid" name="cuponid" />
                    </td>
                  </tr>

                  <tr style="height:35px;">
                    <td class="espacio"><label><b>Total Final</b></label></td>
                    <td><input style="border:none;text-align: right;" type="text" ng-model="head.total" readonly="" value="1000" id="nuevoTotal" name="nuevoTotal"></td>
                  </tr>

                </table>
              </div>

            </div>
            <div class="modal-footer">
              <div class="form-group col-sm-12">
                <br>

                <button type="button" class="btn btn-secondary" id="cerrar" name="cerrar" ng-click="cleanu()">Cerrar</button>
                <button type="button" class="btn btn-primary" id="confirma" name="confirma" ng-click="nextu()">Confirmar</button>
                <br>
                <div id="pagame">
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>

    <script src="https://sdk.mercadopago.com/js/v1"></script>

    <script type="text/javascript">
      $(document).ready(function() {

      });

      angular.module("first", [])
        .controller("firstController", ["$scope", "$http", function($scope, $http) {

          $scope.init = function() {


          };

          $scope.cleanu = function() {

            /*             var element = angular.element('#exampleModal');

                        document.getElementById('nombre').value = '';
                        document.getElementById('dni').value = '';
                        document.getElementById('telefono').value = '';
                        document.getElementById('email').value = '';
                        document.getElementById('direccion').value = '';
                        document.getElementById('ciudad').value = '';
                        document.getElementById('distrito').value = '';
                        document.getElementById('referencia').value = '';

                        $('#exampleModal').modal('hide') */
            alert("aqui se limpian controles");
          };

          $scope.nextu = function() {


            /*             $http.post("customers.php", angular.toJson($scope.head))
                          .then(function(respuesta) {

                            $datosc = respuesta.data;

                            customer = parseInt($datosc.idcust);

                            $scope.head.idcustomer = parseInt($datosc.idcust)
                          }); */

            $scope.head.photos = 1000;
            $scope.head.stotal = 1000;
            $scope.head.total = 1000;
            $scope.head.discount = 0;


            $http.post("payprocess.php", angular.toJson($scope.head))
              .then(function(respuesta) {

                $datos = respuesta.data;

                $scope.head.idreference = $datos.id;

                /*                 $http.post("orderpr.php", angular.toJson($scope.head)).then(function(responder) {

                                  $datoo = responder.data;

                                  console.log($datoo);

                                }); */

                createCheckoutButton($datos.id, "TEST-62c2e7cc-4e79-4883-b60f-2db4b7a75f44");

              });


          };


        }]);

      function createCheckoutButton(preference, public) {
        var script = document.createElement("script");

        const mp = new MercadoPago(public, {
          locale: 'es-MX'
        });


        // Inicializa el checkout
        const checkout = mp.checkout({
          preference: {
            id: preference
            
          },
          autoOpen: true, // Habilita la apertura automática del Checkout Pro
        });

      }
    </script>


</body>

</html>