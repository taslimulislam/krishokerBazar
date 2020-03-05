<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
        <div class="admin-hbtn">
            
        </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="admin-hbtn"><a href="{{Route('adminLogin.logout')}}"><i class="fa fa-sign-out"></i>Sign out</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="{{route('admin.contact')}}">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">3</span>
            </a>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('adminMain.index')}}" class="brand-link">
        <img src="{{asset('')}}users/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Krisoker Bazar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('')}}dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Mahibul islam</a>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <ul class="navbar-nav">

                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{route('adminMain.index')}}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{route('category.index')}}" class="nav-link">Category</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{route('subcategory.index')}}" class="nav-link">Subcategory</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{route('customer.index')}}" class="nav-link">Customer</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{route('seller.index')}}" class="nav-link">Seller</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{route('product.index')}}" class="nav-link">Product</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{route('invoice.index')}}" class="nav-link">Invoice</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{route('transection.index')}}" class="nav-link">Transection</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{route('admin.contact')}}" class="nav-link">Contact</a>
                    </li>
                </ul>
                <!-- /.sidebar-menu -->

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
