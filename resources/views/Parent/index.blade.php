<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Parent Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href={{ asset("Parent/bower_components/bootstrap/dist/css/bootstrap.min.css")}}>
  <!-- Font Awesome -->
  <link rel="stylesheet" href={{ asset("Parent/bower_components/font-awesome/css/font-awesome.min.css")}}>
  <!-- Ionicons -->
  <link rel="stylesheet" href={{ asset("Parent/bower_components/Ionicons/css/ionicons.min.css")}}>
  <!-- jvectormap -->
  <link rel="stylesheet" href={{ asset("Parent/bower_components/jvectormap/jquery-jvectormap.css")}}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{ asset("Parent/dist/css/AdminLTE.css")}}>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href={{ asset("Parent/dist/css/skins/_all-skins.min.css")}}>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Parent</b>Home</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 1 message</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src={{ asset("Parent/dist/img/user2-160x160.jpg")}} class="img-circle" alt="User Image">
                      </div>
                     
                      <h4>
                        Admin
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p> your son is ........</p>
                    </a>
                  </li>

                    
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src={{ asset("Parent/dist/img/user2-160x160.jpg")}} class="user-image" alt="User Image">
              <span class="hidden-xs">  Mr/Ahmed Elwaly</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src={{ asset("Parent/dist/img/user2-160x160.jpg")}} class="img-circle" alt="User Image">

                <p>
                  Mr. Ahmed elwaly
                 
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src={{ asset("Parent/dist/img/user2-160x160.jpg")}} class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <i> Welcome </i> <br>
          <p>Mr / Ahmed</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
    
      <!-- search form -->
     
    
      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Options</li>
        
        <li class="">
          
            <a href="edit">
            <i class="fa fa-dashboard"></i> <span>EdiT Profile</span>
            <span class="pull-right-container">
             
            </span>
          </a>
         
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i>
            <span>Send message</span>
            <span class="pull-right-container">
           
            </span>
          </a>
         
        </li>
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>LogOut</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
       
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header ">
        <form method="get" id="parent_child" action="test">
            <h3 class="control-sidebar-heading">Parent Dashboard</h3>
            <div class="form-group">
              <label class="control-sidebar-subheading">
              <span>your Child</span>
             
              
              <select name="childList" form="parent_child">
                <option  disabled selected value> Select you son's Name </option> 
                <option value="Ahmed">Ahmed</option>
                <option value="Hoda">Hoda</option>
                <option value="bakr">Bakr</option>

              </select>
              </label>
              <input type="submit" value="go">
            </div>
        </form>

        @if(isset($_GET['childList']))
        <table class="table table-bordered">

          
            <tr>
              <th  scope="row"> (Day) / (Time ) </th>
              <td >8 :10</td>
              <td>10 :12 </td>
              <td>12 :2</td>
              <td>2 :4</td>
              <td>4 :6</td>
              
              
            </tr>
            <tr>
              <th scope="row">SUN</th>
              <td>Physics</td>
              <td>English</td>
              <td></td>
              <td></td>
              <td>Math</td>
              
            </tr>
            <tr>
              <th scope="row">MON</th>
              <td>MAth</td>
              <td>Arabic</td>
              <td>Science</td>
              <td></td>
              <td></td>
              
            </tr>
            <tr>
              <th scope="row">TUE</th>
              <td></td>
              <td></td>
              <td>Information system</td>
              <td>economic</td>
              <td>Healthy</td>
              
            </tr>
            <tr>
              <th scope="row">WED</th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              
            </tr>
            <tr>
              <th scope="row">THU</th>
              <td>Science</td>
              <td>Arabic </td>
              <td></td>
              <td>English</td>
              <td></td>
              
            </tr>
        </table>
    @endif
      
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-settings-tab" data-toggle="tab" aria-expanded="true"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
      <div class="tab-pane active" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>
          <div class="form-group">
            <label class="control-sidebar-subheading">
           <a href="edit">
            
            <span>Edite profile</span>
            <span class="pull-right-container">
           
            </span>
          </a>    
            </label>
          </div>

          <div class="form-group">
            <label class="control-sidebar-subheading">
               <a href="#">
            <i class="fa fa-envelope"></i>
            <span> Send message</span>
            <span class="pull-right-container">
           
            </span>
          </a>    
            </label>
          </div>
        </form>
         
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src={{ asset("Parent/bower_components/jquery/dist/jquery.min.js")}}></script>
<!-- Bootstrap 3.3.7 -->
<script src={{ asset("Parent/bower_components/bootstrap/dist/js/bootstrap.min.js")}}></script>
<!-- FastClick -->
<script src={{ asset("Parent/bower_components/fastclick/lib/fastclick.js")}}></script>
<!-- AdminLTE App -->
<script src={{ asset("Parent/dist/js/adminlte.min.js")}}></script>
<!-- Sparkline -->
<script src={{ asset("Parent/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js")}}></script>
<!-- jvectormap  -->
<script src={{ asset("Parent/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}></script>
<script src={{ asset("Parent/plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}></script>
<!-- SlimScroll -->
<script src={{ asset("Parent/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}></script>
<!-- ChartJS -->
<script src={{ asset("Parent/bower_components/chart.js/Chart.js")}}></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src={{ asset("Parent/dist/js/pages/dashboard2.js")}}></script>
<!-- AdminLTE for demo purposes -->
<script src={{ asset("Parent/dist/js/demo.js")}}></script>
</body>
</html>
