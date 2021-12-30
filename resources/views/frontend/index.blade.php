@extends('frontend.master')

@section('content')


              <!-- Main Slider Start -->
              <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="navbar bg-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}"><i class="fa fa-home"></i>Home</a>
                                </li>
                                @foreach ($categories as $category )
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('category.frontend.product',$category->id) }}"><i class="fa fa-shopping-bag"></i>{{ $category->name }}</a>
                                </li>   
                                @endforeach
                                
                                
                               
                            </ul>
                        </nav>
                    </div>



                   <div class="col-md-6">
                        
                            <div class="header-slider normal-slider">  
                                @foreach($frontendSliders as $slider)                         
                                    <div class="header-slider-item" >
                                        <img width="600px" height="400px"src="{{ url('uploads/'.$slider->image) }}" alt="{{ $slider->title }}" />
                                        <div class="header-slider-caption">
                                            <p>{{ $slider->button_text }}</p>
                                        </div>  
                                    </div>
                                   
                                 @endforeach
                            </div>                           
                        
                    </div>


   
                    
                    <div class="col-md-3">
                        <div class="header-img">
                            @foreach ($upperImages as $data) 
                                
                           
                            <div class="img-item">
                                <img width="200px" height="200px"src="{{ url('uploads/'.$data->image) }}"/>
                                <a class="img-text">
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                                </a>
                            </div>
                            @endforeach
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->      
        
        
        <!-- Feature Start-->
        <div class="feature">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fas fa-handshake"></i>
                            <h2>Cash On Delivery</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-truck"></i>
                            <h2>Countrywide Delivery</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-sync-alt"></i>
                            <h2>14 Days Return</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-comments"></i>
                            <h2>24/7 Support</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->      
        
        <!-- Category Start-->
        <div class="category">
            <div class="container-fluid">
                <div class="row">
                    @foreach ($middleImages as $data)                   
                    <div class="col-md-3">
                        <div class="category-item ch-250">
                            <img src="{{ url('uploads/'.$data->image) }}" />
                            <a class="category-name" href="">
                                
                            </a>
                        </div>
                    </div>
                    @endforeach
                 
                </div>
            </div>
        </div>
        <!-- Category End-->       
        
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>call us for any queries</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:0123456789">+8801303746940</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->       
        
        <!-- Featured Product Start -->
        <div class="featured-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Featured Product</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">

                    @foreach($featured as $product)
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">{{ $product->name }}</a>
                              
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img width="285px" height="285px" src=" {{ url('uploads/'.$product->image) }}" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="{{ route('single.products.details',$product->id) }}"><i class="fas fa-info-circle"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>

                                    <form action=" " method="POST" >
                                        @csrf
                                        <input type="hidden" value="{{ $product->id }}" name="id">
                                        <input type="hidden" value="1" name="quantity">
                                        <button  class="btn btn-primary icon" type="submit" title="Add Cart" 
                                        data-toggle="modal" data-target="/add_to_cart" > 
                                        <i class="fa fa-shopping-cart"></i> 
                                        </button> 
                                    </form>

                                    
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>৳</span>{{ $product->price }}</h3>

                                
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
        <!-- Featured Product End -->       
        
        <!-- Newsletter Start -->
        
        
        <!-- Newsletter End -->        
        
        <!-- Recent Product Start -->
        <div class="recent-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Recent Product</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">
                    
                @foreach($products as $product)
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">{{$product->name}}</a>
                            
                            </div>
                            <div class="product-image"> 
                                <a href="product-detail.html">
                                    <img width="285px" height="285px" src="{{(url('uploads/'.$product->image))}}" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href=" {{ route('single.products.details',$product->id) }}"><i class="fas fa-info-circle"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>৳</span>{{$product->price}}</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach 
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Recent Product End -->
        
        <!-- Review Start -->
        
        <!-- Review End -->    

@endsection