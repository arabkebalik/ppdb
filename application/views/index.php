<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jurnal PPDB 2016</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url()?>public/frontend/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Morris charts -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url()?>public/frontend/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url()?>public/frontend/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-blue fixed layout-top-nav">
    <div class="wrapper">

      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="<?php echo base_url(); ?>" class="navbar-brand"><b>PPDB</b> SMK Negeri 1 Pemalang</a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">

              </ul>
              
            </div><!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <li><a href="<?php echo base_url() ?>index.php/welcome"><span>Login</span></a></li>
                </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Jurnal
              <small>PPDB 2016</small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Jurnal</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="row">
              <div class="col-md-6">
                <!-- DONUT CHART -->
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Jumlah Pendaftar</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                  </div>
                  <div class="box-body chart-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Jurusan</th>
                        <th style="width: 75px">Jumlah</th>
                      </tr>
                      <tr>
                        <td>1.</td>
                        <td>Teknik Komputer Jaringan</td>
                        <td><span class="badge bg-light-blue" id="jml-tkj">0</span></td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Teknik Kendaraan Ringan</td>
                        <td><span class="badge bg-light-blue" id="jml-tkr">0</span></td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Teknik Sepeda Motor</td>
                        <td><span class="badge bg-light-blue" id="jml-tsm">0</span></td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Akuntansi</td>
                        <td><span class="badge bg-light-blue" id="jml-ak">0</span></td>
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>Administrasi Perkantoran</td>
                        <td><span class="badge bg-light-blue" id="jml-ap">0</span></td>
                      </tr>
                      <tr>
                        <td>6.</td>
                        <td>Pemasaran</td>
                        <td><span class="badge bg-light-blue" id="jml-pe">0</span></td>
                      </tr>
                      <tr style="background-color: #d9d9d9">
                        <td></td>
                        <td><b>Total</b></td>
                        <td><span class="badge" id="jml-total"><b>0</b></span></td>
                      </tr>
                    </table>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->

              </div><!-- /.col (LEFT) -->
              <div class="col-md-6">
                <div class="box box-primary">
                  <div class="box-header">
                    <h3 class="box-title">Nilai</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                  </div><!-- /.box-header -->
                  <div class="box-body no-padding">
                    <table class="table table-striped">
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Mata pelajaran</th>
                        <th style="width: 75px">Tertinggi</th>
                        <th style="width: 75px">Rata rata</th>
                        <th style="width: 75px">Terendah</th>
                      </tr>
                      <tr>
                        <td>1.</td>
                        <td>Bahasa Indonesia</td>
                        <td><span class="badge bg-light-blue" id="maxbi">0</span></td>
                        <td><span class="badge bg-yellow" id="avgbi">0</span></td>
                        <td><span class="badge bg-red" id="minbi">0</span></td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Matematika</td>
                        <td><span class="badge bg-light-blue" id="maxmat">0</span></td>
                        <td><span class="badge bg-yellow" id="avgmat">0</span></td>
                        <td><span class="badge bg-red" id="minmat">0</span></td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Bahasa Inggris</td>
                        <td><span class="badge bg-light-blue" id="maxing">0</span></td>
                        <td><span class="badge bg-yellow" id="avging">0</span></td>
                        <td><span class="badge bg-red" id="mining">0</span></td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>IPA</td>
                        <td><span class="badge bg-light-blue" id="maxipa">0</span></td>
                        <td><span class="badge bg-yellow" id="avgipa">0</span></td>
                        <td><span class="badge bg-red" id="minipa">0</span></td>
                      </tr>
                    </table>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->

                <div class="box box-primary">
                  <div class="box-header">
                    <h3 class="box-title">Nilai Akhir</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                  </div><!-- /.box-header -->
                  <div class="box-body no-padding">
                    <table class="table table-striped">
                      <tr class="bg-light-blue">
                        <td>Tertinggi</td>
                        <td><span id="maxna">0</span></td>
                      </tr>
                      <tr class="bg-red">
                        <td>Terendah</td>
                        <td><span id="minna">0</span></td>
                      </tr>
                    </table>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->

              </div><!-- /.col (RIGHT) -->
            </div><!-- /.row -->
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="container">
          <div class="pull-right hidden-xs">
            
          </div>
          <strong>Copyright &copy; 2016 <a href="https://www.facebook.com/bararamadhanAs">Arab Kebalik</a>.</strong> All rights reserved.
        </div><!-- /.container -->
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url()?>public/frontend/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url()?>public/frontend/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php echo base_url()?>public/frontend/plugins/morris/morris.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url()?>public/frontend/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url()?>public/frontend/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url()?>public/frontend/dist/js/demo.js"></script>
    <!-- page script -->
    <script type="text/javascript">
      function refresh_jumlah(){
        $.getJSON('<?php echo site_url()?>/index/get_jumlah_pendaftar/', function(obj) {
              $('#jml-tkj').html(obj.tkj);
              $('#jml-tkr').html(obj.tkr);
              $('#jml-tsm').html(obj.tsm);
              $('#jml-ak').html(obj.ak);
              $('#jml-ap').html(obj.ap);
              $('#jml-pe').html(obj.pe);
              $('#jml-total').html(obj.total);    
        });
        $.getJSON('<?php echo site_url()?>/index/nilai/', function(obj) {

              $('#maxbi').html(obj.maxbi);
              $('#avgbi').html(obj.avgbi);
              $('#minbi').html(obj.minbi);
              $('#maxmat').html(obj.maxmat);
              $('#avgmat').html(obj.avgmat);
              $('#minmat').html(obj.minmat);
              $('#maxing').html(obj.maxing);
              $('#avging').html(obj.avging);
              $('#mining').html(obj.mining);
              $('#maxipa').html(obj.maxipa);
              $('#avgipa').html(obj.avgipa);
              $('#minipa').html(obj.minipa);
              $('#maxna').html(obj.maxna);
              $('#minna').html(obj.minna);
        });
      }


      $(document).ready(function() {
        refresh_jumlah();
        var auto_refresh = setInterval(
          function(){
            refresh_jumlah();
          }, 60000
        )
      });
    </script>
  </body>
</html>
