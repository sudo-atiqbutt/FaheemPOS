
<!DOCTYPE html>
<html lang="en">
      @include('admin.layout.partials._head')
        @yield('css')
          <!-- navbar -->
      @include('admin.layout.partials._navbar')
    <!-- /.navbar -->
    <div class="content-wrapper">
      @include('admin.layout.partials._sidebar')
        <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
           
            @yield('title')
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <!-- container -->
           @yield('content')
            <!-- /container -->
        </main>
        <!-- /.main-wrappper -->
        <!-- RIGHT SIDEBAR -->
       
         @include('admin.layout.partials._rightsidebar')
        <!-- /.chat-panel -->
    </div>
    <!-- /.content-wrapper -->
    <!-- FOOTER -->
         @include('admin.layout.partials._footer')
          @include('admin.layout.partials.generic_modals')
          @yield('script')
          </body>
</html>
   