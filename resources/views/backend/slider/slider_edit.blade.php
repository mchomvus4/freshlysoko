 @extends('admin.admin_master')
 @section('admin')


 <!-- Content Wrapper. Contains page content -->
  
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
			
   {{-- ----------------Add Slider----------------- --}}
   	<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Edit Slider</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					 <form method="post" action="{{route('slider.update')}}" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="id" value="{{$slider->id}}" >
      <input type="hidden" name="old_image" value="{{$slider->slider_img}}" >
					     	
							<div class="form-group">
								<h5>Title<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"  name="title" class="form-control" value="{{$slider->title}}" >
        </div>
							</div>

							<div class="form-group">
								<h5>Description<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"  name="description" class="form-control" value="{{$slider->description}}">
        </div>
							</div>
       
							<div class="form-group">
								<h5>Slider Image<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="file"  name="slider_img" class="form-control">
           @error('slider_img')
           <span class="text-danger">{{$message}}</span>
         @enderror
        </div>
        <img src="{{asset($slider->slider_img)}}" style="width: 400px; height:300px;">
							</div>
       

						<div class="text-xs-right">
						<input type="submit" class="btn btn-rounded btn-success mb-5" value="Update">
						</div>
					</form>
		
			
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			 
			  <!-- /.box -->          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>

  <!-- /.content-wrapper -->


 @endsection