 @extends('admin.admin_master')
 @section('admin')


 <!-- Content Wrapper. Contains page content -->
  
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  

   	<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Edit Blog Category</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					 <form method="post" action="{{route('blogcategory.update')}}">
      @csrf
					     	<input type="hidden" name="id" value="{{$blogcategories->id}}">
							<div class="form-group">
								<h5>Blog Category Name English<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"  name="blog_category_name_en" class="form-control" value="{{$blogcategories->blog_category_name_en}}" >
         @error('blog_category_name_en')
           <span class="text-danger">{{$message}}</span>
         @enderror
        </div>
							</div>

							<div class="form-group">
								<h5>Blog Category Name Swahili<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"  name="blog_category_name_sw" class="form-control" value="{{$blogcategories->blog_category_name_sw}}">
          @error('blog_category_name_sw')
           <span class="text-danger">{{$message}}</span>
         @enderror
        </div>
							</div>


						<div class="text-xs-right">
						<input type="submit" class="btn btn-rounded btn-success mb-5" value="Update Blog">
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