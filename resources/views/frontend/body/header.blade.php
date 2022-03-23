<header class="header-style-1"> 
  
  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
            <li><a href="#"><i class="icon fa fa-user"></i>
                @if(session()->get('language') == 'swahili') Akaunti Yangu @else   My Account @endif
            
            </a></li>
            <li><a href="{{route('wishlist')}}"><i class="icon fa fa-heart"></i>
               @if(session()->get('language') == 'swahili') Orodha ya matamanio @else  Wishlist @endif
              </a></li>
            <li><a href="{{route('mycart')}}"><i class="icon fa fa-shopping-cart"></i>
               @if(session()->get('language') == 'swahili') Mkokoteni Wangu @else   My Cart @endif
             </a></li>
            <li><a href="{{route('mycart')}}"><i class="icon fa fa-check"></i>
               @if(session()->get('language') == 'swahili') Nunua @else   Checkout @endif
              </a></li>

            <li><a href="" type="button"  data-toggle="modal" data-target="#orderTracking"><i class="icon fa fa-check"></i>
               @if(session()->get('language') == 'swahili') Nunua @else   Order Tracking @endif
              </a></li>

                @auth
                <li><a href="{{url('/dashboard')}}"><i class="icon fa fa-user"></i>
                  @if(session()->get('language') == 'swahili') Wasifu wa Mtumiaji @else   User Profile @endif
                  </a></li>

                  @else
                  <li><a href="{{route('login')}}"><i class="icon fa fa-lock"></i>
                     @if(session()->get('language') == 'swahili') Ingia/Jisajili @else Login/Register @endif
                    </a></li>

                @endauth



            
          </ul>
        </div>
        <!-- /.cnt-account -->
        
        <div class="cnt-block">
          <ul class="list-unstyled list-inline">
            {{-- <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">USD </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">USD</a></li>
                <li><a href="#">INR</a></li>
                <li><a href="#">GBP</a></li>
              </ul>
            </li> --}}
            <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">
             @if(session()->get('language') == 'swahili') Lungha @else Language @endif
            </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                @if(session()->get('language') == 'swahili')
                <li><a href="{{route('english.language')}}">English</a></li>
                @else
                <li><a href="{{route('swahili.language')}}">Swahili</a></li>
                @endif
              </ul>
            </li>
          </ul>
          <!-- /.list-unstyled --> 
        </div>
        <!-- /.cnt-cart -->
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.header-top --> 
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder"> 
          <!-- ================= LOGO =============================== -->

          @php
             $setting = App\Models\ SiteSetting::find(1);
          @endphp
          <div class="logo"> <a href="{{url('/')}}"> <img src="{{asset($setting->logo)}}" alt="logo"> </a> </div>
          <a href="{{url('/')}}">
          {{-- <h1 style="color: #fff;">Freshly Soko</h1> --}}
          </a>
          <!-- /.logo --> 
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder"> 
          <!-- /.contact-row --> 
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
            <form method="POST" action="{{route('product.search')}}">
              @csrf
              <div class="control-group">
                <ul class="categories-filter animate-dropdown">
                  <li class="dropdown"> <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" >
                      <li class="menu-header">Computer</li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Clothing</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Electronics</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Shoes</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Watches</a></li>
                    </ul>
                  </li>
                </ul>
                <input class="search-field" name="search" placeholder="Search here..." />
                <a class="search-button" href="#" ></a> </div>
            </form>
          </div>
          <!-- /.search-area --> 
          <!-- =========================== SEARCH AREA : END ================================= --> </div>
        <!-- /.top-search-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row"> 
          <!-- ============================ SHOPPING CART DROPDOWN ============================== -->
          
          <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
            <div class="items-cart-inner">
              <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
              <div class="basket-item-count"><span class="count" id="cartQty"></span></div>
              <div class="total-price-basket"> <span class="lbl">cart -</span> 
                <span class="total-price"> <span class="sign">$</span>
                <span class="value" id="cartSubTotal">600.00</span> </span> </div>
            </div>
            </a>
            <ul class="dropdown-menu">
              <li>
                <!-- ===========Min Cart Start with Ajax========== -->
                  <div id="miniCart">

                  </div>



                  <!-- =========== END  Min Cart Start with Ajax========== -->
                <div class="clearfix cart-total">
                  <div class="pull-right"> <span class="text">Sub Total :</span>
                    <span class='price' id="cartSubTotal"></span> </div>
                  <div class="clearfix"></div>
                  <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a> </div>
                <!-- /.cart-total--> 
                
              </li>
            </ul>
            <!-- /.dropdown-menu--> 
          </div>
          <!-- /.dropdown-cart --> 
          
          <!-- =========================== SHOPPING CART DROPDOWN : END============================== --> </div>
        <!-- /.top-cart-row --> 
      </div>
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 
  
  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
       <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
       <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li class="active dropdown yamm-fw"> <a href="{{url('/')}}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">
                   @if(session()->get('language') == 'swahili') Nyumbani @else  Home @endif
                  </a> </li>

                {{-- //Get category table data --}}
                @php
                  $categories = App\Models\Category::orderBy('category_name_en','ASC')->get();
                @endphp


                @foreach ($categories as $category)
                  
                
                <li class="dropdown yamm mega-menu"> <a href="{{url('/')}}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">
                   @if(session()->get('language') == 'swahili') {{$category->category_name_sw}} @else   {{$category->category_name_en}} @endif
                  </a>
                  <ul class="dropdown-menu container">
                    <li>
                      <div class="yamm-content ">
                        <div class="row">
                          {{-- //Get Subcategory table data --}}
                           @php
                              $subcategories = App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name_en','ASC')->get();
                            @endphp

                            @foreach ($subcategories as$subcategory )
                              
                            
                          <div class="col-xs-12 col-sm-6 col-md-2 col-menu">

                            <a href="{{url('subcategory/product/'.$subcategory->id.'/'.$subcategory->subcategory_slug_en)}}">
                            <h2 class="title">
                             @if(session()->get('language') == 'swahili') {{$subcategory->subcategory_name_sw}} @else {{$subcategory->subcategory_name_en}} @endif
                            </h2>
                            </a>
                            {{-- //Get Subcategory table data --}}
                            @php
                               $subsubcategories = App\Models\SubSubCategory::where('subcategory_id',$subcategory->id)->orderBy('subsubcategory_name_en','ASC')->get();
                            @endphp
                            @foreach ($subsubcategories as$susubbcategory )
                            <ul class="links">
                              <li><a href="{{url('subsubcategory/product/'.$susubbcategory->id.'/'.$susubbcategory->subsubcategory_slug_en)}}">
                               @if(session()->get('language') == 'swahili') {{$susubbcategory->subsubcategory_name_sw}} @else {{$susubbcategory->subsubcategory_name_en}} @endif
                              </a></li>
                              
                            </ul>
                            @endforeach<!--End of subsubcategory foreach loop -->
                          </div>
                          <!-- /.col -->
                          @endforeach<!-- End foreach subcategory loop -->
                          {{-- <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image"> <img class="img-responsive" src="{{asset('frontend/assets/images/banners/top-menu-banner.jpg')}}" alt=""> </div> --}}
                          <!-- /.yamm-content --> 
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
              @endforeach<!-- End foreach bcategory loop -->
               
                  <ul class="dropdown-menu pages">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
                              <li><a href="home.html">Home</a></li>
                              <li><a href="category.html">Category</a></li>
                              <li><a href="detail.html">Detail</a></li>
                              <li><a href="shopping-cart.html">Shopping Cart Summary</a></li>
                              <li><a href="checkout.html">Checkout</a></li>
                              <li><a href="blog.html">Blog</a></li>
                              <li><a href="blog-details.html">Blog Detail</a></li>
                              <li><a href="contact.html">Contact</a></li>
                              <li><a href="sign-in.html">Sign In</a></li>
                              <li><a href="my-wishlist.html">Wishlist</a></li>
                              <li><a href="terms-conditions.html">Terms and Condition</a></li>
                              <li><a href="track-orders.html">Track Orders</a></li>
                              <li><a href="product-comparison.html">Product-Comparison</a></li>
                              <li><a href="faq.html">FAQ</a></li>
                              <li><a href="404.html">404</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                {{-- <li class="dropdown  navbar-right special-menu"> <a href="#">Todays offer</a> </li> --}}

                <li class="dropdown  navbar-right special-menu"> <a href="{{route('home.blog')}}">Blog</a> </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer --> 
          </div>
          <!-- /.navbar-collapse --> 
          
        </div>
        <!-- /.nav-bg-class --> 
      </div>
      <!-- /.navbar-default --> 
    </div>
    <!-- /.container-class --> 
    
  </div>
  <!-- /.header-nav --> 
  <!-- ============================================== NAVBAR : END ============================================== --> 


  <!-- Order Tracking Modal -->
  <div class="modal fade" id="orderTracking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Track Your Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form  method="POST" action="{{route('order.tracking')}}">
          @csrf
          <div class="modal-body">
            <label for="">Invoice Code</label>
            <input type="text" name="code" class="form-control" required="" placeholder="Your Order Invoice Number">

          </div>
          <button type="submit" class="btn btn-primary" style="margin-left: 17px;">Track Now</button>
       </form>
      </div>
    
    </div>
  </div>
</div>






</header>