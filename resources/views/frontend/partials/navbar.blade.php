<div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="{{ route('home') }}" class="nav-item nav-link ">Home</a>
                            <a href="{{route('products.view')}}" class="nav-item nav-link">Products</a>
                            <!--<a href="product_details" class="nav-item nav-link">Product Details</a> -->
                            <a href="{{ route('cart') }} " class="nav-item nav-link">Cart</a>
                            <a href="{{route('checkout')}}" class="nav-item nav-link">Checkout</a>
                            <a href="{{ route('account.details') }}" class="nav-item nav-link">My Account</a>
                            <a href="{{route('wishlist')}}" class="nav-item nav-link">Wishlist</a>
                           
            
                            @if (auth()->user())

                                    <a href="{{ route('customer.logout') }}" class="nav-item nav-link">logout</a>
                                    <p class="nav-item nav-link ">{{ auth()->user()->name }}</p>
                                    
                                    
                               @else
                                
                               <a href="{{route('frontend.login')}}" class="nav-item nav-link">Login</a>
                                    <a href="{{route('frontend.signup')}}" class="nav-item nav-link">Sign Up</a>

                                    @endif
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>