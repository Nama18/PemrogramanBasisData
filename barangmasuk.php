<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Pemrograman Basis Data
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Toko Barang
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="stokobat.php">
              <i class="material-icons">book</i>
              <p>Data Barang</p>
            </a>
          </li>
          <li class="nav-item ">
              <a class="nav-link" href="pelanggan.php">
                <i class="material-icons">person</i>
                <p>Data Pelanggan</p>
              </a>
          </li>
          <li class="nav-item active">
              <a class="nav-link" href="barangmasuk.php">
                <i class="material-icons">library_add</i>
                <p>Barang Masuk</p>
              </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Barang Masuk</h4>
                        <p class="card-category"> --</p>
                    </div>
                
                    <br>
                    <div>
                                <form class="form-vertical" action="addmasuk.php" method="post">
                                
                                    <div class="form-group col-md-2">
                                        <label for="">&nbsp &nbsp ID BARANG MASUK</label>
                                        <input type="text" class="form-control" name="id" placeholder="ID BARANG MASUK">
                                    </div>
                                    <div class="form-group col-md-2">
                                      <input type="date" name="date1" id="date1" class="form-control mr-2" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <input type="submit" name="submit" class="btn btn-sm btn-success"
                                                    value="Simpan">
                                        </div>
                                    </div>
                                </form>
                    </div>
                    
                </div>
                <div class="card">
                  <div class="container-fluid">
                    
                    <div class="table-responsive">
                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    ID Barang Masuk
                                                </th>
                                                <th>
                                                    Tanggal
                                                </th>
                                                <th>
                                                    Detail
                                                </th>
                                            </thead>
                                            
                                            <tbody class="brgmasuk">
  
                                            </tbody>
                                            
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                  <div class="container-fluid">
                    
                    <div class="table-responsive">
                        <table class="table">
                                              <thead class=" text-primary">
                        <div class="w3-container w3-khaki">
                          <th>
                            ID BARANG MASUK
                          </th>
                          <th>
                            KODE BARANG
                          </th>
                          <th>
                            NAMA BARANG
                          </th>
                          <th>
                            QUANTITY
                          </th>
                          <th>
                              <button type="button" rel="tooltip" class="btn btn-primary"  class="btn btn-primary" id="addbarangmasuk" value="">
                                <i class="material-icons">add</i> ADD
                              </button>
                          </th>
                         
                        </div>
                      </thead>
                      <div >        
                        <tbody class="databarang">

                        </tbody>
                      </div>                      
                        </table>
              
            </div>
          </div>
        </div>
      </div>
        

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form class="form-vertical" action="addmasuk.php" method="post">
                                    <div class="form-group ">
                                        <label for="">&nbsp &nbsp KODE BARANG</label>
                                        <input type="text" class="kodee form-control" name="kodee" id="kodee" placeholder="KODE BARANG">
                                    </div>
                                    <div class="form-group ">
                                        <label for="">&nbsp &nbsp QUANTITY</label>
                                        <input type="text" class="qty form-control" name="qty" id="qty" placeholder="QUANTITY">
                                    </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" name="savechange" id= "savechange">Input Data</button>
                      </div>
                    </div>
                  </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                   $(document).ready(function(){
                     getdata();
                   });
                      function getdata()
                      {
                        $.ajax({
                          type: "GET",
                          url: "fetch.php",
                          success: function (response) {
                             $.each(response, function (key, value) { 
                                // console.log(value['IDBRGMASUK']);
                                $('.brgmasuk').append('<tr>'+
                                                    '<td class="idbrg">'+value['IDBRGMASUK']+'</td>\
                                                    <td>'+value['TANGGAL']+'</td>\
                                                    <td>\
                                                        <button type="button" rel="tooltip" class="btn btn-success" name="detail" id="detail">\
                                                            <i class="material-icons">bookmarks</i>\
                                                            Detail Barang\
                                                        </button>\
                                                    </td>\
                                              </tr>');
                             });
                               
                            
                          }
                        });
                      }
                   
                    
                    $(document).on("click","#detail", function(){
                        var idbrg = $(this).closest('tr').find('.idbrg').text();
                        // console.log(idbrg);
                        $('#addbarangmasuk').val(idbrg);
                        $('.databarang').empty();
                        
                       $.ajax({
                         type: "POST",
                         url: "detailbarang.php",
                         data: {
                          'checking_view':true,
                          'idbrgmasuk': idbrg,
                         },
                         success: function (response) {
                           
                            $.each(response, function (key, value) {
                                $('.databarang').append('<tr>'+
                                                    '<td class="kodebrg">'+value['IDBRGMASUK']+'</td>\
                                                    <td>'+value['KODEBRG']+'</td>\
                                                    <td>'+value['NAMA']+'</td>\
                                                    <td>'+value['QTY']+'</td>\
                                              </tr>');
                            });
                         }
                       });
                    });
                    $(document).on("click","#addbarangmasuk", function () {
                      $('#exampleModal').modal('show'); 
                    });
                    $(document).on("click","#savechange", function () {
                      
                      var data ={
                        'insert': true,
                        'id':$('#addbarangmasuk').val(),
                        'kodebrg':$('.kodee').val(),
                        'qty':$('.qty').val(),
                      }
                      $.ajax({
                        type: "POST",
                        url: "fetchbarangmasuk.php",
                        data: data,
                        success: function (response) {
                          console.log(response);
                          $('#exampleModal').modal('hide');
                           $('.kodee').val("");
                           $('.qty').val("");
                           $('.databarang').empty();
                           get();

                        }
                      });
                      // console.log(data);
                    });
                    function get() {
                      var idbrg= $('#addbarangmasuk').val();
                      
                      $.ajax({
                         type: "POST",
                         url: "fetchbarangmasuk.php",
                         data: {
                          'checking_as':true,
                          'idbrgmasuk': idbrg,
                         },
                         success: function (response) {
                           
                            $.each(response, function (key, value) {
                                $('.databarang').append('<tr>'+
                                                    '<td class="kodebrg">'+value['IDBRGMASUK']+'</td>\
                                                    <td>'+value['KODEBRG']+'</td>\
                                                    <td>'+value['NAMA']+'</td>\
                                                    <td>'+value['QTY']+'</td>\
                                              </tr>');
                            });
                         }
                       });
                    }
                    
                </script>
              

  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function () {
      $().ready(function () {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function (event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function () {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function () {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function () {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function () {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function () {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function () {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function () {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function () {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function () {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function () {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>