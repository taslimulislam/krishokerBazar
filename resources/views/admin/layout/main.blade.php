<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('admin.layout.link')
    @yield('scriptlink')
    <title>@yield('title')</title>
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('admin.layout.navbar')
        
        <section class="content">
            <div class="container-fluid">
                @yield('content')
                <br><br><br>

                
            </div>
        </section>
        @include('admin.layout.footer')
        
        
    </div>
    
</body>
    @include('admin.layout.script')
    @yield('script')
</html>