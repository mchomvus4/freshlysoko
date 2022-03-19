 @extends('admin.admin_master')
 @section('admin')


 <!-- Content Wrapper. Contains page content -->
  
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
			<div class="col-8">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">All Category  List  <span class="badge badge-pill badge-success">{{count($categories)}}</span></h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Category Icon</th>
								<th>Category En</th>
								<th>Category Sw</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
       @foreach ($categories as $item )
        <tr>
								<td> <span><i class="{{$item->category_icon}}"></i></span> </td>
								<td>{{$item->category_name_en}}</td>
								<td>{{$item->category_name_sw}}</td>
								<td>
         <a href="{{route('categories.edit',$item->id)}}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i></a>
         <a href="{{route('categories.delete',$item->id)}}" class="btn btn-danger" title="Delete Data" id="delete"><i class="fa fa-trash"></i></a>
        </td>
        		</tr>
       @endforeach
							
					
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			 
			  <!-- /.box -->          
			</div>
   {{-- ----------------Add Category----------------- --}}
   	<div class="col-4">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Category</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					 <form method="post" action="{{route('category.store')}}">
      @csrf
					     	
							<div class="form-group">
								<h5>Category Name English<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"  name="category_name_en" class="form-control" >
         @error('category_name_en')
           <span class="text-danger">{{$message}}</span>
         @enderror
        </div>
							</div>

							<div class="form-group">
								<h5>Category Name Swahili<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"  name="category_name_sw" class="form-control">
          @error('category_name_sw')
           <span class="text-danger">{{$message}}</span>
         @enderror
        </div>
							</div>


							<div class="form-group">
								<h5>Category Icon<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"  name="category_icon" class="form-control">
          @error('category_icon')
           <span class="text-danger">{{$message}}</span>
         @enderror
        </div>
							</div>
       
							
       

						<div class="text-xs-right">
						<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add New">
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