 @extends('admin.admin_master')
 @section('admin')


 <!-- Content Wrapper. Contains page content -->
  
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
		
   {{-- ----------------Edit SubCategory----------------- --}}
   	<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Edit Sub Category</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					 <form method="post" action="{{route('subcategory.update')}}">
       <input type="hidden" name="id"  value="{{$sub_categories->id}}">
      @csrf
					     	
							<div class="form-group">
								<h5>Category Select <span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="category_id"  class="form-control">
										<option value="" selected="" disabled="">Select Category</option>
          @foreach ($categories as $category)
           <option value="{{$category->id}}" {{$category->id == $sub_categories->category_id ? 'selected' : ''}}>{{$category->category_name_en}}</option>
          @endforeach
										
          
									</select>
								 @error('category_id')
           <span class="text-danger">{{$message}}</span>
         @enderror
							</div>
      </div>
							<div class="form-group">
								<h5>SubCategory Name English<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"  name="subcategory_name_en" class="form-control" value="{{$sub_categories->subcategory_name_en}}" >
         @error('subcategory_name_en')
           <span class="text-danger">{{$message}}</span>
         @enderror
        </div>
							</div>

							<div class="form-group">
								<h5>SubCategory Name Swahili<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"  name="subcategory_name_sw" class="form-control" value="{{$sub_categories->subcategory_name_sw}}">
          @error('subcategory_name_sw')
           <span class="text-danger">{{$message}}</span>
         @enderror
        </div>
							</div>
       
							
       

						<div class="text-xs-right">
						<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">
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