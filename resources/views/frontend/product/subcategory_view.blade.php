@extends('frontend.main_master')
@section('content')

@section('title')
SubCategory Product
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="{{url('/')}}">Home</a></li>

          @foreach ($breadsubcat as $item )
        <li class='active'>{{$item->category->category_name_en}}</li>
         @endforeach

          @foreach ($breadsubcat as $item )
        <li class='active'>{{$item->subcategory_name_en}}</li>
         @endforeach

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
            

           
          </div>
          <!-- /.sidebar-filter --> 
        </div>
        <!-- /.sidebar-module-container --> 
      </div>
      <!-- /.sidebar -->
      <div class='col-md-9'> 



        <!-- ==================== SECTION – HERO ====================== -->
        
                       @php
                          $sliders = App\Models\ Slider::latest()->get();
                       @endphp

         <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">


            @foreach ($sliders as $slider )
              
           
            <div class="item" style="background-image: url({{asset($slider->slider_img)}});">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="big-text fadeInDown-1"> {{$slider->title}} </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>{{$slider->description}}.</span> </div>
                  {{-- <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Buy Now</a> </div> --}}
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
        <br/><br/>
               @foreach ($breadsubcat as $item )
        
                <span class="badge badge-danger" style="background: #808080;">{{$item->category->category_name_en}}</span>
                @endforeach
                    /
                  @foreach ($breadsubcat as $item )
                  <span class="badge badge-danger" style="background: #FF0000;">{{$item->subcategory_name_en}}</span>
                
                @endforeach
        
     
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
                
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col -->
              <div class="col col-sm-3 col-md-6 no-padding">
               
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
                <div class="row" id="grid_view_product">



                   @include('frontend.product.grid_view_product')
                  
                
                  
                 
                </div>
                <!-- /.row --> 
              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->
             {{-- Product Grid  View End --}}


            {{-- Product List View Start --}}
            <div class="tab-pane "  id="list-container">
              <div class="category-product" id="list_view_product">

                 @include('frontend.product.list_view_product')
                
               
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
                {{-- {{$products->links()}} --}}
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


      <div class="ajax-loadmore-product text-center" style="display: none;">
        <img src="{{asset('frontend/assets/images/loader.svg')}}" style="width: 120px; height: 120px;">

      </div>












    </div>
    <!-- /.row --> 
    <!-- ===================== BRANDS CAROUSEL ============================= -->
    {{-- @include('frontend.body.brand') --}}
    <!-- ======================= BRANDS CAROUSEL : END ======================== -->
   </div>
   <br><br>
  <!-- /.container --> 
  
</div>
<!-- /.body-content --> 


<script>
    function loadmoreProduct(page){
      $.ajax({
        type: "get",
        url: "?page="+page,
        beforeSend: function(response){
          $('.ajax-loadmore-product').show();
        }
      })
      .done(function(data){
        if (data.grid_view == " " || data.list_view == " ") {
          return;
        }
         $('.ajax-loadmore-product').hide();
         $('#grid_view_product').append(data.grid_view);
         $('#list_view_product').append(data.list_view);
      })
      .fail(function(){
        alert('Something Went Wrong');
      })
    }
    var page = 1;
    $(window).scroll(function (){
      if ($(window).scrollTop() +$(window).height() >= $(document).height()){
        page ++;
        loadmoreProduct(page);
      }
    });
</script>






@endsection