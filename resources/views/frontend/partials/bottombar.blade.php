<div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="{{route('home')}}">
                                <img src="{{ asset('frontend/image/logo.png') }}" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">

                            <form action="" method="GET">
                            <input type="text" placeholder="Search" name="Search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                            </form>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="wishlist" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="cart" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>