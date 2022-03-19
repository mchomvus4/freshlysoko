 @extends('admin.admin_master')
 @section('admin')


 <!-- Content Wrapper. Contains page content -->
  
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
			
   {{-- ----------------Edit Category----------------- --}}
   	<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Edit Category</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					 <form method="post" action="{{route('categories.update',$categories->id)}}">
      @csrf
      <input type="hidden" name="id" value="{{$categories->id}}" >
      
					     	
							<div class="form-group">
								<h5>Category Name English<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"  name="category_name_en" class="form-control" value="{{$categories->category_name_en}}" >
         @error('category_name_en')
           <span class="text-danger">{{$message}}</span>
         @enderror
        </div>
							</div>

							<div class="form-group">
								<h5>Category Name Swahili<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"  name="category_name_sw" class="form-control" value="{{$categories->category_name_sw}}">
          @error('category_name_sw')
           <span class="text-danger">{{$message}}</span>
         @enderror
        </div>
							</div>

							<div class="form-group">
								<h5>Category Icon<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"  name="category_icon" class="form-control" value="{{$categories->category_icon}}">
          @error('category_icon')
           <span class="text-danger">{{$message}}</span>
         @enderror
        </div>
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