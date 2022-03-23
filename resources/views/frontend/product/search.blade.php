@extends('frontend.main_master')
@section('content')

@section('title')
Product Search Page
@endsection


<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="{{url('/')}}">Home</a></li>
        <li class='active'>Handbags</li>
      </ul>
    </div>
    <!-- /.breadcrumb-inner --> 
  </div>
  <!-- /.container --> 
</div>
<!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row'>
      <div class='col-md-3 sidebar'> 
        <!-- ===================== TOP NAVIGATION ======================= -->
        @include('frontend.common.vertical_menu')
        <!-- ==================== TOP NAVIGATION : END ====================== -->
        <div class="sidebar-module-container">
          <div class="sidebar-filter"> 
            <!-- ==================== SIDEBAR CATEGORY ====================== -->
            <div class="sidebar-widget wow fadeInUp">
              <h3 class="section-title">shop by</h3>
              <div class="widget-header">
                <h4 class="widget-title">Category</h4>
              </div>
              <div class="sidebar-widget-body">
                <div class="accordion">


                  @foreach ( $categories as  $category )
                   
                 
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#collapse{{$category->id}}" data-toggle="collapse" class="accordion-toggle collapsed"> 
                      @if(session()->get('language') == 'swahili')  {{$category->category_name_sw}} @else  {{$category->category_name_en}} @endif
                      </a> </div>
                    <!-- /.accordion-heading -->
                    <div class="accordion-body collapse" id="collapse{{$category->id}}" style="height: 0px;">
                      <div class="accordion-inner">


                        @php
                         $subcategories = App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name_en','ASC')->get();
                            @endphp
                             @foreach ($subcategories as$subcategory )
                        <ul>
                          <li><a href="{{url('subcategory/product/'.$subcategory->id.'/'.$subcategory->subcategory_slug_en)}}">
                            @if(session()->get('language') == 'swahili') {{$subcategory->subcategory_name_sw}} @else {{$subcategory->subcategory_name_en}} @endif
                           </a></li>
                         
                        </ul>
                        @endforeach
                      </div>
                      <!-- /.accordion-inner --> 
                    </div>
                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->
                   @endforeach
                 
                  
                </div>
                <!-- /.accordion --> 
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== SIDEBAR CATEGORY : END ============================================== --> 
            
           
            
          





            <!-- ================== PRODUCT TAGS ================== -->
             {{-- @include('frontend.common.product_tags') --}}
          <!-- ================== PRODUCT TAGS END ================== -->

            <!-- /.sidebar-widget --> 
          <!----------- Testimonials------------->
          {{-- @include('frontend.common.testimonials') --}}
            
            <!-- =================== Testimonials: END ================ -->
            
            {{-- <div class="home-banner"> <img src="{{asset('frontend/assets/images/banners/LHS-banner.jpg')}}" alt="Image"> </div> --}}
          </div>
          <!-- /.sidebar-filter --> 
        </div>
        <!-- /.sidebar-module-container --> 
      </div>
      <!-- /.sidebar -->
      <div class='col-md-9'> 



        <!-- ==================== SECTION – SLIDER====================== -->
        
        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">


            @foreach ($sliders as $slider )
              
           
            <div class="item" style="background-image: url({{asset($slider->slider_img)}});">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="big-text fadeInDown-1"> {{$slider->title}} </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>{{$slider->description}}.</span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Buy Now</a> </div>
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

        <h4><b>Total Search Product</b>
          <span class="badge badge-success" style="background: #45df56">{{count($products)}}</span>Item(s)
        </h4>
        
     
        <div class="clearfix filters-container m-t-10">
          <div class="row">
            <div class="col col-sm-6 col-md-2">
              <div class="filter-tabs">
                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                  <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                  <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>List</a></li>
                </ul>
              </div>
              <!-- /.filter-tabs --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-12 col-md-6">
              <div class="col col-sm-3 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">Sort by</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> Position <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#">position</a></li>
                        <li role="presentation"><a href="#">Price:Lowest first</a></li>
                        <li role="presentation"><a href="#">Price:HIghest first</a></li>
                        <li role="presentation"><a href="#">Product Name:A to Z</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld --> 
                </div>
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col -->
              <div class="col col-sm-3 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">Show</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> 1 <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#">1</a></li>
                        <li role="presentation"><a href="#">2</a></li>
                        <li role="presentation"><a href="#">3</a></li>
                        <li role="presentation"><a href="#">4</a></li>
                        <li role="presentation"><a href="#">5</a></li>
                        <li role="presentation"><a href="#">6</a></li>
                        <li role="presentation"><a href="#">7</a></li>
                        <li role="presentation"><a href="#">8</a></li>
                        <li role="presentation"><a href="#">9</a></li>
                        <li role="presentation"><a href="#">10</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld --> 
                </div>
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-6 col-md-4 text-right">
             
              <!-- /.pagination-container --> </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>





            {{-- Product Grid  View Start --}}
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
                <div class="row">



                    @foreach($products as $product )
                    
                  <div class="col-sm-6 col-md-4 wow fadeInUp">
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
                          <h3 class="name"><a href="detail.html">
                            @if(session()->get('language') == 'swahili')  {{$product->product_name_sw}} @else  {{$product->product_name_en}} @endif
                            </a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>


                           @if($product->discount_price == NULL)
                             <div class="product-price"> <span class="price">{{$product->selling_price}}Tsh. </span></div>
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



                                  <!-- ADD TO CART MODAL BUTTON START-->
                                <button  class="btn btn-primary icon" type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal" id="{{$product->id}}" onclick="productView(this.id)"> <i class="fa fa-shopping-cart"></i> </button>
                                                                
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>

                               <button  class="btn btn-primary icon" type="button" title="Whishlist" id="{{$product->id}}" onclick="addToWishList(this.id)"> <i class="fa fa-heart"></i> </button> 

                                   <!-- ADD TO CART MODAL BUTTON END-->


                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
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
                <!-- /.row --> 
              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->
             {{-- Product Grid  View End --}}


            {{-- Product List View Start --}}
            <div class="tab-pane "  id="list-container">
              <div class="category-product">

                  @foreach($products as $product )
                <div class="category-product-inner wow fadeInUp">
                  <div class="products">
                    <div class="product-list product">
                      <div class="row product-list-row">
                        <div class="col col-sm-4 col-lg-4">
                          <div class="product-image">
                            <div class="image"> <img src="{{asset($product->product_thambnail)}}" alt=""> </div>
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-8 col-lg-8">
                          <div class="product-info">
                            <h3 class="name"><a href=""{{url('product/details/'.$product->id.'/'.$product->product_slug_en)}}">
                              @if(session()->get('language') == 'swahili')  {{$product->product_name_sw}} @else  {{$product->product_name_en}} @endif
                            </a></h3>
                            <div class="rating rateit-small"></div>


                           @if($product->discount_price == NULL)
                            <div class="product-price"> <span class="price">{{$product->selling_price}}Tsh.</span> </div>
                           @else
                                 <div class="product-price"> <span class="price">{{$product->selling_price}}Tsh.</span> <span class="price-before-discount">{{$product->discount_price}}Tsh.</span> </div>
                           @endif

                       
                            <!-- /.product-price -->
                            <div class="description m-t-10"> @if(session()->get('language') == 'swahili')  {{$product->short_descp_sw}} @else  {{$product->short_descp_en}} @endif</div>
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                  </li>
                                  <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                  <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                                </ul>
                              </div>
                              <!-- /.action --> 
                            </div>
                            <!-- /.cart --> 
                            
                          </div>
                          <!-- /.product-info --> 
                        </div>
                        <!-- /.col --> 
                      </div>
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
                    <!-- /.product-list --> 
                  </div>
                  <!-- /.products --> 
                </div>
                @endforeach
                <!-- /.category-product-inner -->
                
               
                        {{-- Product List View END --}}
             
                
              </div>
              <!-- /.category-product --> 
            </div>
            <!-- /.tab-pane #list-container --> 
          </div>
          <!-- /.tab-content -->
          <div class="clearfix filters-container">
            <div class="text-right">
              <div class="pagination-container">
               
                <!-- /.list-inline --> 
              </div>
              <!-- /.pagination-container --> </div>
            <!-- /.text-right --> 
            
          </div>
          <!-- /.filters-container --> 
          
        </div>
        <!-- /.search-result-container --> 
        
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider wow fadeInUp">
      <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item--> 
        </div>
        <!-- /.owl-carousel #logo-slider --> 
      </div>
      <!-- /.logo-slider-inner --> 
      
    </div>
    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> </div>
  <!-- /.container --> 
  
</div>
<!-- /.body-content --> 









@endsection