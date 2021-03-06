 
 @extends('admin.admin_master')
 @section('admin')
 <div class="container-full">
@php
	$date = date('d-m-y');
	$today = App\Models\Order::where('order_date',$date)->sum('amount');

	$month = date('F');
	$month = App\Models\Order::where('order_month',$month)->sum('amount');

	$year = date('Y');
	$year = App\Models\Order::where('order_year',$year)->sum('amount');

	$pending = App\Models\Order::where('status','Pending')->get();
@endphp
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon bg-primary-light rounded w-60 h-60">
								<i class="text-primary mr-0 font-size-24 mdi mdi-cash"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Today's Sale</p>
								<h3 class="text-white mb-0 font-weight-500">{{$today}} <small class="text-success"><i class="fa fa-caret-up"></i>Tshs</small></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon bg-warning-light rounded w-60 h-60">
								<i class="text-warning mr-0 font-size-24 mdi mdi-cash"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Monthly Sale</p>
								<h3 class="text-white mb-0 font-weight-500">{{$month}} <small class="text-success"><i class="fa fa-cash"></i>Tshs</small></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon bg-info-light rounded w-60 h-60">
								<i class="text-info mr-0 font-size-24 mdi mdi-cash"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Year Sales</p>
								<h3 class="text-white mb-0 font-weight-500">{{$year}} <small class="text-success"><i class="fa fa-caret-down"></i>Tshs</small></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon bg-danger-light rounded w-60 h-60">
								<i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Pending Orders</p>
								<h3 class="text-white mb-0 font-weight-500">{{count($pending) }}<small class="text-success"><i class="fa fa-caret-up"></i>Orders</small></h3>
							</div>
						</div>
					</div>
				</div>
			
				
				<div class="col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title align-items-start flex-column">
								Recent All Orders
			
							</h4>
						</div>

						@php
							$orders = App\Models\Order::where('status','Pending')->orderBy('id','DESC')->get();
						
						@endphp
						<div class="box-body">
							<div class="table-responsive">
								<table class="table no-border">
									<thead>
										<tr class="text-uppercase bg-lightest">
											<th style="min-width: 250px"><span class="text-white">Date</span></th>
											<th style="min-width: 250px"><span class="text-fade">Invoice</span></th>
											<th style="min-width: 100px"><span class="text-fade">Customer</span></th>
											<th style="min-width: 150px"><span class="text-fade">Email</span></th>
											<th style="min-width: 130px"><span class="text-fade">Phone</span></th>
										
										</tr>
									</thead>
									<tbody>
										@foreach ($orders as $item )
											
										
										<tr>										
											<td class="pl-0 py-8">
												<span class="text-white font-weight-600 d-block font-size-16">
													{{Carbon\Carbon::parse($item->order_date)->diffForHumans()}}
												</span>
											</td>
											
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													{{$item->invoice_no}}
												</span>
											</td>

											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													{{$item->name}}
												</span>
											</td>

											<td>
												<span class="text-white font-weight-600 d-block font-size-16">
													{{$item->email}}
												</span>
											</td>

											<td>
												<span class="badge badge-primary-light badge-lg">
												{{$item->phone}}

												</span>
											</td>
										</tr>

										@endforeach
						

									</tbody>
								</table>
							</div>
						</div>
					</div>  
				</div>
			</div>
		</section>
 </div>
		<!-- /.content -->
  @endsection