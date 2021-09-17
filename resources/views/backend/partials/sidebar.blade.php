<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">

            <li class="nav-item">
                <a class="nav-link active" aria-current="page">
                    <!--show user name: admin -->
                    {{ auth()-> user()->name }}
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="{{route('category.list')}}">
                    <span data-feather="file"></span>
                    Categories
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="{{route('product.list')}}">
                    <span data-feather="shopping-cart"></span>
                    Products
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="{{route('coupon')}}">
                    <span data-feather="file"></span>
                    Coupon
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="#">
                    <span data-feather="file"></span>
                    Orders
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="{{route('customer.list')}}">
                    <span data-feather="users"></span>
                    Customers
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="{{route('user.list')}}">
                    <span data-feather="users"></span> 
                    Users
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="{{route('slider.list')}}">
                    <span data-feather="users"></span> 
                    Sliders
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="#">
                    <span data-feather="bar-chart-2"></span>
                    Reports
                </a>
            </li>

        </ul>


    </div>
</nav>
