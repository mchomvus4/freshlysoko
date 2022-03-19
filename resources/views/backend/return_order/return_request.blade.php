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
				  <h3 class="box-title">Return Orders  List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Date</th>
								<th>Invoice</th>
								<th>Amount</th>
								<th>Payment</th>
								<th>Status</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
       @foreach ($orders as $item )
        <tr>
								<td>{{$item->order_date}}</i></span> </td>
								<td>{{$item->invoice_no}}</td>
								<td>{{$item->amount}}Tshs.</td>
								<td>{{$item->payment_method}}</td>


								<td>
         @if ($item->return_order == 1)
         <span class="badge badge-pill badge-primary">Pending</span>
         @elseif ($item->return_order == 2)
         <span class="badge badge-pill badge-primary">Success</span>
          @endif
        </td>
       
							

      
							
								<td width="25%">
         {{-- <a href="{{route('pending.order.details',$item->id)}}" class="btn btn-primary" title="Edit Data"><i class="fa fa-eye"></i></a>
         <a target="_blank" href="{{route('invoice.download',$item->id)}}" class="btn btn-danger" title="Invoice Download"><i class="fa fa-download"></i></a> --}}
         <a href="{{route('return.approve',$item->id)}}" class="btn btn-danger">Approve</a>
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