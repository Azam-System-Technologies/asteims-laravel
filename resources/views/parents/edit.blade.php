
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('tittle')</title>
  <base href="{{\URL::to('/')}}">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Layout
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
      <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{\URL::to('/')}}" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Your Site</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url('dashboard')}}" class="d-block">{{ Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="{{url('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
               
              </p>
            </a>
          </li>
               <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Students
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Teachers 
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Parents 
               
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   @yield('content')




   <div class="card">
  <div class="card-header"> Edit Parents Page</div>
  <div class="card-body">
      
      <form action="{{ url('/parents/update') }}" method="post">
        {!! csrf_field() !!}
        @method('PUT')
        <input type="hidden" name="pid"  value="{{ $parent->id }}" id="id" />

        <h1>Father Information</h1>
        <label>Student's Father's Name</label></br>
        <input type="text" name="father_name" value="{{$parent->father_name}}"
        class="form-control"></br>
        <label>Father's Profession</label></br>
        <input type="text" name="father_profession" value="{{$parent->father_profession}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="email" name="email" value="{{$parent->email}}" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="phone" value="{{$parent->phone}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" value="{{$parent->address}}" class="form-control"></br>
        <label>Father CNIC</label></br>
        <input type="text" name="father_cnic" value="{{$parent->father_cnic}} class="form-control"></br>
        <label>Father Qualification</label></br>
        <input type="text" name="father_qualification" value="{{$parent->father_qualification}}" class="form-control"></br>
        <label>Father Office Addresss</label></br>
        <input type="text" name="father_office_addresss" value="{{$parent->father_office_addresss}}" class="form-control"></br>
        <label>Father Nationality/Religion</label></br>
        <input type="text" name="father_nationality" value="{{$parent->father_nationality}}" class="form-control"></br>
        <!-- Mother Information ------------------------------------------------------ -->
        <h1>Mother Information</h1>
        <label>Student's Mother's Name</label></br>
        <input type="text" name="mother_name" value="{{$parent->mother_name}}" class="form-control"></br>
        <label>Mother's Profession</label></br>
        <input type="text" name="mother_profession" value="{{$parent->mother_profession}}" class="form-control"></br>
       
        <label>Mother Phone</label></br>
        <input type="text" name="mother_phone" value="{{$parent->mother_phone}}" class="form-control"></br>
      
        <label>Mother Address</label></br>
        <input type="text" name="mother_address" value="{{$parent->mother_address}}" class="form-control"></br>
       
        <label>Mother CNIC</label></br>
        <input type="text" name="mother_cnic" value="{{$parent->mother_cnic}}" class="form-control"></br>
        <label>Mother Qualification</label></br>
        <input type="text" name="mother_qualification" value="{{$parent->mother_qualification}}" class="form-control"></br>
        <label>Mother Office Addresss</label></br>
        <input type="text" name="mother_office_addresss" value="{{$parent->mother_office_addresss}}" class="form-control"></br>
        <label>Mother Nationality</label></br>
        <input type="text" name="mother_nationality" value="{{$parent->mother_nationality}}" class="form-control"></br>
        <!-- Guardian information --------------------------------------------------- -->
        <h1>Guardian Information (If appropriate)</h1>
        <label>Contact Person Name <span class="text-danger"> *</span></label></br>
        <input type="text" name="name" value="{{$parent->name}}" class="form-control"></br>
        <label>Guardian Profession</label></br>
        <input type="text" name="guardian_profession" value="{{$parent->guardian_profession}}" class="form-control"></br>
        <label>Guardian Phone</label></br>
        <input type="text" name="guardian_phone" value="{{$parent->guardian_phone}}" class="form-control"></br>
        <label>Guardian Address</label></br>
        <input type="text" name="guardian_address" value="{{$parent->guardian_address}}" class="form-control"></br>
        <label>Guardian CNIC</label></br>
        <input type="text" name="guardian_cnic" value="{{$parent->guardian_cnic}}" class="form-control"></br>
        <label>Guardian Qualification</label></br>
        <input type="text" name="guardian_qualification" value="{{$parent->guardian_qualification}}" class="form-control"></br>
        <label>Guardian Office Addresss</label></br>
        <input type="text" name="guardian_office_addresss" value="{{$parent->guardian_office_addresss}}" class="form-control"></br>
        <label>Guardian Nationality</label></br>
        <input type="text" name="guardian_nationality" value="{{$parent->guardian_nationality}}" class="form-control"></br>
        <label>Guardian Realation With Child</label></br>
        <input type="text" name="guardian_realation_with_child" value="{{$parent->guardian_realation_with_child}}" class="form-control"></br>
        <!-- User Information ---------------------------------------------------- -->
        <h1>User Detail</h1>
        <label>Photo</label></br>
        <input type="file" name="photo" value="{{$parent->photo}}" class="form-control"></br>
        <label>Username <span class="text-danger"> *</span></label></br>
        <input type="text" name="username" value="{{$parent->username}}" class="form-control" required></br>
        <label>Password <span class="text-danger"> *</span></label></br>
        <input type="password" name="password" value="{{$parent->password}}" class="form-control"></br>

        <!--<input type="submit" value="Update" class="btn btn-success"></br>-->
        <button type="submit" class="btn btn-success" title="Update Student" onclick="return confirm
             ('are you want to Edit Student')"><i class="fa fa-trash-o" aria-hidden="true"></i> Update</button>
    </form>
  
  </div>
</div>




          </div>
          
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
         
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              

           
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
