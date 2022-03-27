@extends('frontend.main_master')
@section('content')

@section('title')
Freshly Soko Online
@endsection





<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="container">
    <div class="row"> 
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
        
        <!-- =================== TOP NAVIGATION ====================== -->
        @include('frontend.common.vertical_menu')
        <!-- ==================== TOP NAVIGATION : END ==================== --> 
        
        <!-- ============================================== HOT DEALS ============================================== -->
        
        <!-- ============================================== HOT DEALS: END ============================================== --> 
        
        <!-- ============================================== SPECIAL OFFER ============================================== -->
        
       
        <!-- ============================================== SPECIAL OFFER : END ============================================== --> 


        <!-- ============================================== SPECIAL DEALS ============================================== -->
        
        <!-- ============================================== SPECIAL DEALS ============================================== -->
        
       
       
        
         
        
       
      </div>
      <!-- /.sidemenu-holder --> 
      <!-- ==================================== SIDEBAR : END ================================ --> 
      
      
      <!-- ================== CONTENT ============================ -->
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
        <!-- ======================= SECTION – HERO ==================================== -->
        
        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">


            @foreach ($sliders as $slider )
              
           
            <div class="item" style="background-image: url({{asset($slider->slider_img)}});">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="big-text fadeInDown-1"> {{$slider->title}} </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>{{$slider->description}}.</span> </div>
                 
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
             @endforeach<!-- End of slider foreach loop -->
            <!-- /.item -->
             
            
          </div>
          <!-- /.owl-carousel --> 
        </div>
        
        <!-- ================================ SECTION – HERO : END ================================ --> 
        
        <!-- ============================================== INFO BOXES ============================================== -->
        <div class="info-boxes wow fadeInUp">
          <div class="info-boxes-inner">
            <div class="row">
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                     
                    </div>
                  </div>
                  {{-- <h6 class="text">30 Days Money Back Guarantee</h6> --}}
                </div>
              </div>
              <!-- .col -->
              
              <div class="hidden-md col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      {{-- <h4 class="info-box-heading green">free shipping</h4> --}}
                    </div>
                  </div>
                  {{-- <h6 class="text">Shipping on orders over $99</h6> --}}
                </div>
              </div>
              <!-- .col -->
              
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      {{-- <h4 class="info-box-heading green">Special Sale</h4> --}}
                    </div>
                  </div>
                  {{-- <h6 class="text">Extra $5 off on all items </h6> --}}
                </div>
              </div>
              <!-- .col --> 
            </div>
            <!-- /.row --> 
          </div>
          <!-- /.info-boxes-inner --> 
          
        </div>
        <!-- /.info-boxes --> 
        <!-- =================================== INFO BOXES : END ====================================== --> 

        
        <!-- ====================================== SCROLL TABS ====================================== -->
        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">New Products</h3>
            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
              <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
              @foreach ($categories as $category )

              <li><a data-transition-type="backSlide" href="#category{{$category->id}}" data-toggle="tab">
                 @if(session()->get('language') == 'swahili')  {{$category->category_name_sw}} @else {{$category->category_name_en}}@endif
                </a></li>
              @endforeach
             
            </ul>
            <!-- /.nav-tabs --> 
          </div>
          <div class="tab-content outer-top-xs">

            <div class="tab-pane in active" id="all">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

                  @foreach ($products as $product)
                    
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="{{url('product/details/'.$product->id .'/'.$product->product_slug_en)}}"><img  src="{{asset($product->product_thambnail)}}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          {{-- @php
                        $amount = $product->selling_price - $product->discount_price;
                        $discount = (  $amount/$product->selling_price)*100;
                          @endphp

                            <div>
                              @if($product->discount_price == NULL)
                                 <div class="tag new"><span>new</span></div>
                                 @else
                                  <div class="tag hot"><span>{{round($discount )}}%</span></div>
                                  @endif
                            </div> --}}

                       
                        </div>


                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('product/details/'.$product->id.'/'.$product->product_slug_en)}}">
             @if(session()->get('language') == 'swahili')  {{$product->product_name_sw}} @else  {{$product->product_name_en}} @endif
                           </a></h3>
                           <style>
                          .checked{
                            color: orange;
                          }
                          .rating{
                            color: green;
                          }
                         
                        </style>
                           @php
                           	$reviewCount = App\Models\Review::where('product_id',$product->id)->where('status',1)->latest()->get();
                             $average = App\Models\Review::where('product_id',$product->id)->where('status',1)->avg('rating');
                           @endphp
                        
                            <div class="row">
                    	@if($average == 0 )
									      <span class="rating">No Rating Yet</span>	
										@elseif ($average == 1 || 	$average < 2 )
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											@elseif ($average == 2 || 	$average < 3 )
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										@elseif ($average == 3 || 	$average < 4 )
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
											@elseif ($average == 4 || 	$average < 5 )
										<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										@elseif ($average == 5 || 	$average < 5 )
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>

										@endif
                            </div>
                         	<div class="col-sm-8">
										<div class="reviews">
											<a href="#" class="lnk" style="font-size: 15px;">({{count($reviewCount)}})Reviews</a>
										</div>
									</div>

                           {{-- @if($product->discount_price == NULL)
                           <div class="product-price"> <span class="price">{{$product->selling_price}}Tsh.</span>
                           </div>
                           @else
                           <div class="product-price"> <span class="price">{{$product->discount_price}}Tsh.</span> <span class="price-before-discount"> {{$product->selling_price}}Tsh.</span> </div>
                           @endif --}}
                         
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <!-- ADD TO CART MODAL BUTTON START-->
                                <button  class="btn btn-primary icon" type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal" id="{{$product->id}}" onclick="productView(this.id)"> <i class="fa fa-shopping-cart"></i> </button>
                                                                
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>

                               <button  class="btn btn-primary icon" type="button" title="Whishlist" id="{{$product->id}}" onclick="addToWishList(this.id)"> <i class="fa fa-heart"></i> </button> 

                                   <!-- ADD TO CART MODAL BUTTON END-->


                             
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  @endforeach <!-- End of all product foreach loop -->
                  
                  
                 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->




            
              @foreach ($categories as $category )
                
              
             <div class="tab-pane" id="category{{$category->id}}">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

                  @php
                    $catwiseProduct =App\Models\Product::where('category_id',$category->id)->orderBy('id','DESC')->get();
                     	$reviewCount = App\Models\Review::where('product_id',$product->id)->where('status',1)->latest()->get();
                        $average = App\Models\Review::where('product_id',$product->id)->where('status',1)->avg('rating');
                  @endphp



                 @forelse ($catwiseProduct as $product)
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="{{url('product/details/'.$product->id.'/'.$product->product_slug_en)}}"><img  src="{{asset($product->product_thambnail)}}" alt=""></a> </div>
                          <!-- /.image -->
                          
                           {{-- @php
                        $amount = $product->selling_price - $product->discount_price;
                        $discount = ($amount/$product->selling_price)*100;
                          @endphp

                            <div>
                              @if($product->discount_price == NULL)
                                 <div class="tag new"><span>new</span></div>
                                 @else
                                  <div class="tag hot"><span>{{round($discount )}}%</span></div>
                                  @endif
                            </div> --}}

                       
                        </div>


                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('product/details/'.$product->id.'/'.$product->product_slug_en)}}">
             @if(session()->get('language') == 'swahili')  {{$product->product_name_sw}} @else  {{$product->product_name_en}} @endif
                           </a></h3>
                          



                                     <div class="row">
                    	@if($average == 0 )
									      <span class="rating">No Rating Yet</span>	
										@elseif ($average == 1 || 	$average < 2 )
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											@elseif ($average == 2 || 	$average < 3 )
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										@elseif ($average == 3 || 	$average < 4 )
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
											@elseif ($average == 4 || 	$average < 5 )
										<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										@elseif ($average == 5 || 	$average < 5 )
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>

										@endif
                            </div>
                         	<div class="col-sm-8">
										<div class="reviews">
											<a href="#" class="lnk" style="font-size: 15px;">({{count($reviewCount)}})Reviews</a>
										</div>
									</div>





                           {{-- @if($product->discount_price == NULL)
                           <div class="product-price"> <span class="price">{{$product->selling_price}}Tsh.</span>
                           </div>
                           @else
                           <div class="product-price"> <span class="price">{{$product->discount_price}}Tsh.</span> <span class="price-before-discount">{{$product->selling_price}}Tsh.</span> </div>
                           @endif --}}
                          
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">


                                
                                 <!-- ADD TO CART MODAL BUTTON START-->
                                <button  class="btn btn-primary icon" type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal" id="{{$product->id}}" onclick="productView(this.id)"> <i class="fa fa-shopping-cart"></i> </button>
                                                                
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>

                               <button  class="btn btn-primary icon" type="button" title="Whishlist" id="{{$product->id}}" onclick="addToWishList(this.id)"> <i class="fa fa-heart"></i> </button> 

                                   <!-- ADD TO CART MODAL BUTTON END-->



                             
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  @empty
                  <h5 class="text-danger">No Product Found</h5>

                  @endforelse <!-- End of all product foreach loop -->
                  
                  
                 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            @endforeach <!-- End of categories foreach loop -->
            <!-- /.tab-pane -->
            
           
            
          </div>
          <!-- /.tab-content --> 
        </div>
        <!-- /.scroll-tabs --> 
        <!-- ============================================== SCROLL TABS : END ============================================== --> 
        
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->


        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">Featured products</h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

            @php
               	$reviewCount = App\Models\Review::where('product_id',$product->id)->where('status',1)->latest()->get();
                        $average = App\Models\Review::where('product_id',$product->id)->where('status',1)->avg('rating');
            @endphp
              @foreach ($featured as $product )
                
             
              <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="{{url('product/details/'.$product->id.'/'.$product->product_slug_en)}}"><img  src="{{asset($product->product_thambnail)}}" alt=""></a> </div>
                          <!-- /.image -->
                          {{-- @php
                          $amount = $product->selling_price - $product->discount_price;
                           $discount = ($amount/$product->selling_price)*100;
                          @endphp

                            <div>
                              @if($product->discount_price == NULL)
                                 <div class="tag new"><span>new</span></div>
                                 @else
                                  <div class="tag hot"><span>{{round($discount)}}%</span></div>
                                  @endif
                            </div> --}}

                       
                        </div>


                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('product/details/'.$product->id.'/'.$product->product_slug_en)}}">
             @if(session()->get('language') == 'swahili')  {{$product->product_name_sw}} @else  {{$product->product_name_en}} @endif
                           </a></h3>
                          



                                     <div class="row">
                    	@if($average == 0 )
									      <span class="rating">No Rating Yet</span>	
										@elseif ($average == 1 || 	$average < 2 )
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											@elseif ($average == 2 || 	$average < 3 )
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										@elseif ($average == 3 || 	$average < 4 )
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
											@elseif ($average == 4 || 	$average < 5 )
										<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										@elseif ($average == 5 || 	$average < 5 )
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>

										@endif
                            </div>
                         	<div class="col-sm-8">
										<div class="reviews">
											<a href="#" class="lnk" style="font-size: 15px;">({{count($reviewCount)}})Reviews</a>
										</div>
									</div>



                           {{-- @if($product->discount_price == NULL)
                           <div class="product-price"> <span class="price">{{$product->selling_price}}Tsh.</span>
                           </div>
                           @else
                           <div class="product-price"> <span class="price">{{$product->discount_price}}Tsh.</span> <span class="price-before-discount">{{$product->selling_price}}Tsh.</span> </div>
                           @endif --}}
                          
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info MODAL FOR ADD TO CART -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">

                                <button  class="btn btn-primary icon" type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal" id="{{$product->id}}" onclick="productView(this.id)"> <i class="fa fa-shopping-cart"></i> </button>
                                
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>

                               <button  class="btn btn-primary icon" type="button" title="Whishlist" id="{{$product->id}}" onclick="addToWishList(this.id)"> <i class="fa fa-heart"></i> </button> 

                            
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product END MODAL FOR ADD TO CART  --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
             @endforeach
            <!-- /.item -->
      
           

          </div>
          <!-- /.home-owl-carousel --> 
        </section>
        <!-- /.section --> 

        
        <!-- ======================================== FEATURED PRODUCTS : END ======================================== --> 





        

        <!-- ======================================== SKIP PRODUCTS2  ======================================== --> 

 {{-- <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">
             @if(session()->get('language') == 'swahili')   {{$skip_category_2->category_name_sw}} @else   {{$skip_category_2->category_name_en}} @endif
           
          </h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">


              @foreach ($skip_product_2 as $product )
                
             
              <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="{{url('product/details/'.$product->id.'/'.$product->product_slug_en)}}"><img  src="{{asset($product->product_thambnail)}}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          @php
                            $markedPrice = $product->selling_price + $product->discount_price;
                            $discountPercentage = (  $product->discount_price/$markedPrice)*100;
                          @endphp

                            <div>
                              @if($product->discount_price == NULL)
                                 <div class="tag new"><span>new</span></div>
                                 @else
                                  <div class="tag hot"><span>{{round($discountPercentage )}}%</span></div>
                                  @endif
                            </div>

                       
                        </div>


                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('product/details/'.$product->id.'/'.$product->product_slug_en)}}">
             @if(session()->get('language') == 'swahili')  {{$product->product_name_sw}} @else  {{$product->product_name_en}} @endif
                           </a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>

                           @if($product->discount_price == NULL)
                           <div class="product-price"> <span class="price">{{$product->selling_price}}Tsh.</span>
                           </div>
                           @else
                           <div class="product-price"> <span class="price">{{$product->selling_price}}Tsh.</span> <span class="price-before-discount">{{$product->discount_price}}Tsh.</span> </div>
                           @endif
                          
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
             @endforeach
            <!-- /.item -->
      
           

          </div>
          <!-- /.home-owl-carousel --> 
        </section>
        <!-- /.section -->  --}}

        
        <!-- ======================================== SKIP PRODUCTS2  : END ======================================== --> 



        
        <!-- ============================================== BLOG SLIDER ============================================== -->





        <section class="section latest-blog outer-bottom-vs wow fadeInUp">
          <h3 class="section-title">latest form blog</h3>
          <div class="blog-slider-container outer-top-xs">
            <div class="owl-carousel blog-slider custom-carousel">

              @foreach ($blogpost as $blog)
                
             
              <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"><a href="blog.html"><img src="{{asset($blog->post_image)}}" alt=""></a> </div>
                  </div>
                  <!-- /.blog-post-image -->
                  
                  <div class="blog-post-info text-left">
                    <h3 class="name"><a href="#">
                       @if(session()->get('language') == 'swahili') {{$blog->post_title_sw}} @else {{$blog->post_title_en}} @endif
                      </a></h3>


                    <span class="info">{{Carbon\Carbon::parse($blog->created_at)->diffForHumans()}} </span>

                    <p class="text">@if(session()->get('language') == 'swahili') {!! Str::limit($blog->post_detail_sw,200) !!} @else {!! Str::limit($blog->post_detail_en,200)  !!} @endif.</p>
                    <a href="{{route('post.details',$blog->id)}}" class="lnk btn btn-primary">Read more</a> </div>
                  <!-- /.blog-post-info --> 
                  
                </div>
                <!-- /.blog-post --> 
              </div>
              <!-- /.item -->
               @endforeach

            </div>
            <!-- /.owl-carousel --> 
          </div>
          <!-- /.blog-slider-container --> 
        </section>
        <!-- /.section --> 


        <!-- ============================================== BLOG SLIDER : END ============================================== --> 
        
       
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->  
        
      </div>
      <!-- /.homebanner-holder --> 
      <!-- ============================================== CONTENT : END ============================================== --> 
    </div>
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
   @include('frontend.body.brand')
    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> 
  </div>
  <!-- /.container --> 
</div>
@endsection