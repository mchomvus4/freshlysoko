@extends('frontend.main_master')
@section('content')
@section('title')
 {{$blogpost->post_title_en}}
@endsection

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>{{$blogpost->post_title_en}}</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="row">
			<div class="blog-page">
				<div class="col-md-9">
					<div class="blog-post wow fadeInUp">
	<img class="img-responsive" src="{{asset($blogpost->post_image)}}" alt="">
	<h1>
     @if(session()->get('language') == 'swahili') {{$blogpost->post_title_sw}} @else {{$blogpost->post_title_en}} @endif
 </h1>
	
	<span class="date-time">{{Carbon\Carbon::parse($blogpost->created_at)->diffForHumans()}}</span>

	 <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
	<p>
  @if(session()->get('language') == 'swahili') {!! $blogpost->post_detail_sw !!} @else {!! $blogpost->post_detail_en !!} @endif
  .</p>

	
	
 <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>


</div>
				
				</div>
				<div class="col-md-3 sidebar">
                
                
                
					<div class="sidebar-module-container">
						<div class="search-area outer-bottom-small">
    <form>
        <div class="control-group">
            <input placeholder="Type to search" class="search-field">
            <a href="#" class="search-button"></a>   
        </div>
    </form>
</div>		

{{-- <div class="home-banner outer-top-n outer-bottom-xs">
<img src="assets/images/banners/LHS-banner.jpg" alt="Image">
</div> --}}
					<!-- ====================CATEGORY========================= -->
<div class="sidebar-widget outer-bottom-xs wow fadeInUp">
	<h3 class="section-title">Blog Category</h3>
	<div class="sidebar-widget-body m-t-10">
		<div class="accordion">
	    
   @foreach ($blogcategory as $category )
    
   
    <ul class="list-group">
    <a href="{{url('/blog/category/post/'.$category->id)}}"> <li class="list-group-item">
       @if(session()->get('language') == 'swahili') {{$category->blog_category_name_sw}} @else {{$category->blog_category_name_en}} @endif
     </li></a>
    </ul>
	   @endforeach 



	        

	    </div><!-- /.accordion -->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
	<!-- ======================= CATEGORY : END =============================== -->									
 
	
		</div>
				</div>
			</div>
		</div>
	</div>
</div>



<br/><br/><br/><br/>

@endsection