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


        <div class="content-wrapper">

            <!--Header(Page header)-->
            @include('contents.header')

            <!-- Main content -->
            @include('contents.equipmentList')
        </div>
    </div>

    <!-- js,boot -->
    @include('components.footer')
</body>

</html>