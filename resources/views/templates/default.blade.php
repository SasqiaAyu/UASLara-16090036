
<!DOCTYPE html>
<html lang="en">
  @include('templates.partials._head')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
       @include('templates.partials._sidebar')

        <!-- top navigation -->
        @include('templates.partials._navbar')
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

    @include('templates.partials._script')
  </body>
</html>