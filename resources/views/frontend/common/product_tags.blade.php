@php
 $tag_en = App\Models\Product::groupBy('product_tags_en')->select('product_tags_en')->get();
 $tag_sw = App\Models\Product::groupBy('product_tags_sw')->select('product_tags_sw')->get();
@endphp

<!-- ========================= PRODUCT TAGS ================================= -->
        <div class="sidebar-widget product-tag wow fadeInUp">
          <h3 class="section-title">Product tags</h3>
          <div class="sidebar-widget-body outer-top-xs">

            <div class="tag-list"> 

            @if(session()->get('language') == 'swahili') 
             @foreach ( $tag_sw as  $tag )
             <a class="item active" title="Tag" href="{{url('product/tag/'.$tag->product_tags_sw)}}">{{str_replace(',',' ',$tag->product_tags_sw)}}</a>
              @endforeach
            @else  
              @foreach ( $tag_en as  $tag )
             <a class="item active" title="Tag" href="{{url('product/tag/'.$tag->product_tags_en)}}">{{str_replace(',',' ',$tag->product_tags_en)}}</a>
              @endforeach
            
            @endif
            
             
           </div>
            <!-- /.tag-list --> 
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 
        <!-- ========================== PRODUCT TAGS : END ======================= --> 