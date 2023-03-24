<!DOCTYPE html>
<html lang="en">
@include('components.header')
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
    
    @include('components.reload')

    <!--Navbar-->
    @include('components.navbar')

    <!--Sidebar-->
    @include('components.sidebar')

   
                        
                 
    <div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
    <div class="nav navbar navbar-expand navbar-white navbar-light border-bottom p-0">
      <ul class="navbar-nav overflow-hidden" role="tablist"></ul>
    </div>
    <div class="tab-content">
      
    </div>
  </div>
    </div>

    <!-- js,boot -->
    @include('components.footer')
</body>
</html>
