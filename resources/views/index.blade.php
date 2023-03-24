<!DOCTYPE html>
<html lang="en">
@include('components.header')
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
    
    @include('components.reload')

                        
    <form method="get" action="../employee">
        <input type="submit" name="submit" value="Click"/>
        @csrf
    </form >      
    <div class="content-wrapper">
       
        <!--Header(Page header)-->
        @include('contents.header')
        <!-- Main content -->
        @include('contents.main')
    </div>
    </div>

    <!-- js,boot -->
    @include('components.footer')
</body>
</html>
