<!DOCTYPE html>
<html lang="en">
  @include('frontend.partials._head')
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
           <!-- <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Candra Brownies</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <!--<div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('assets-user/images/bunga.jpg') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome to Brownies</span>
              
              </div>
            </div>
            <!-- /menu profile quick info -->

            
            <!-- sidebar menu -->
            @include('frontend.partials._sidebar')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
       @include('frontend.partials._navbar')
        <!-- /top navigation -->
        
        <!-- page content -->
        <div class="right_col" role="main">
          @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Candra Brownies - Brownies Manis by <a href="https://colorlib.com">Fasadhi</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    @include('frontend.partials._script')
    
    

  </body>
</html>