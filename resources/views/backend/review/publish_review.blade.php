 @extends('admin.admin_master')
 @section('admin')


 <!-- Content Wrapper. Contains page content -->
  
	  <div class="container-full">
			<!-- Content Header (Page Header)-->
		<section class="content">
		  <div class="row">
			  
			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Published All Reviews</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Summary</th>
								<th>Comment</th>
								<th>User</th>
								<th>Product</th>
								<th>Status</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
       @foreach ($reviews as $item )
        <tr>
								<td>{{$item->summary}}</i></span> </td>
								<td>{{$item->comment}}</td>
								<td>{{$item->user->name}}</td>
								<td>{{$item->product->product_name_en}}</td>


								<td>
         @if ($item->status == 0)
         <span class="badge badge-pill badge-primary">Pending</span>
         @elseif ($item->status == 1)
         <span class="badge badge-pill badge-primary">Publish</span>
          @endif
        </td>
       
							

      
							
								<td width="25%">
         {{-- <a href="{{route('pending.order.details',$item->id)}}" class="btn btn-primary" title="Edit Data"><i class="fa fa-eye"></i></a>
         <a target="_blank" href="{{route('invoice.download',$item->id)}}" class="btn btn-danger" title="Invoice Download"><i class="fa fa-download"></i></a> --}}
         <a href="{{route('delete.review',$item->id)}}" class="btn btn-danger" id="delete">Delete</a>
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
   
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>

  <!-- /.content-wrapper -->


 @endsection