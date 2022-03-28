@extends('frontend.main_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('title')
 My Cart Page
@endsection

                            <div class="breadcrumb">
                             <div class="container">
                              <div class="breadcrumb-inner">
                               <ul class="list-inline list-unstyled">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li class='active'>Checkout</li>
                               </ul>
                              </div><!-- /.breadcrumb-inner -->
                             </div><!-- /.container -->
                            </div><!-- /.breadcrumb -->

                            <div class="body-content">
	<div class="container">
		<div class="checkout-box ">
			<div class="row">
				<div class="col-md-8">
					<div class="panel-group checkout-steps" id="accordion">
						<!-- checkout-step-01  -->
<div class="panel panel-default checkout-step-01">

	

	<div id="collapseOne" class="panel-collapse collapse in">

		<!-- panel-body  -->
	    <div class="panel-body">
			<div class="row">		

				<!-- guest-login -->			
			<div class="col-md-6 col-sm-6 already-registered-login">
					<h4 class="checkout-subtitle"><b>Shipping Address</b></h4>
				
					<form class="register-form" action="{{route('checkout.store')}}" method="POST">
						@csrf
						<div class="form-group">
					    <label class="info-title" for="exampleInputEmail1"><b>Shipping Name</b> <span>*</span></label>
					    <input type="text" name="shipping_name" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Full Name" value="{{Auth::user()->name}}" required="">
					  </div>

						<div class="form-group">
					    <label class="info-title" for="exampleInputEmail1"><b>Email</b> <span>*</span></label>
					    <input type="email" name="shipping_email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Email Address" value="{{Auth::user()->email}}"  required="">
					  </div>

						<div class="form-group">
					    <label class="info-title" for="exampleInputEmail1"><b>Phone </b><span>*</span></label>
					    <input type="number" name="shipping_phone" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Phone Number" value="{{Auth::user()->phone}}" min="1"  required="">
					  </div>

						<div class="form-group">
					    <label class="info-title" for="exampleInputEmail1"><b>Post Code</b> <span>*</span></label>
					    <input type="text" name="post_code" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Post Code"  required="">
					  </div>
					 
					  
		
				</div>
				<!-- guest-login -->

				<!-- already-registered-login -->
				<div class="col-md-6 col-sm-6 already-registered-login">
				
				<div class="form-group">
																		<h5><b>Division Select</b> <span class="text-danger">*</span></h5>
																		<div class="controls">
																			<select name="division_id"  class="form-control">
																				<option value="" selected="" disabled="">Select Division</option>
																				@foreach ($divisions as $item)
																					<option value="{{$item->id}}">{{$item->division_name}}</option>
																				@endforeach
																			</select>
																			@error('division_id')
																					<span class="text-danger">{{$message}}</span>
																			@enderror
																	</div>
     					 </div><!--======= end form group=======-->

				<div class="form-group">
																		<h5><b>District Select</b> <span class="text-danger">*</span></h5>
																		<div class="controls">
																			<select name="district_id"  class="form-control">
																				<option value="" selected="" disabled="">Select District</option>
																			
																			</select>
																			@error('district_id')
																					<span class="text-danger">{{$message}}</span>
																			@enderror
																	</div>
     					 </div><!--======= end form group=======-->
					
											<div class="form-group">
																		<h5>State Select <span class="text-danger">*</span></h5>
																		<div class="controls">
																			<select name="state_id"  class="form-control">
																				<option value="" selected="" disabled=""><b>Select State</b></option>
																			
																			</select>
																			@error('state_id')
																					<span class="text-danger">{{$message}}</span>
																			@enderror
																	</div>
     					 </div><!--======= end form group=======-->

									<div class="form-group">
					    <label class="info-title" for="exampleInputEmail1"><b>Notes</b> <span>*</span></label>
					   <textarea class="form-control" cols="30" rows="5" placeholder="Notes" name="notes"></textarea>
					  </div>

					 
					
				</div>	
				<!-- already-registered-login -->		

			</div>			
		</div>
		<!-- panel-body  -->

	</div><!-- row -->
</div>

<!--=====@@@@@@@@@@@@@@@@@@@@ end of received telecom payment information@@@@@@@@@@=====-->
{{-- <!-- checkout-step-01  -->
					    <!-- checkout-step-02  -->
					  	<div class="panel panel-default checkout-step-02">
						    <div class="panel-heading">
						      <h4 class="unicase-checkout-title">
						        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">
						          <span>2</span>Billing Information
						        </a>
						      </h4>
						    </div>
						    <div id="collapseTwo" class="panel-collapse collapse">
						      <div class="panel-body">
						      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						      </div>
						    </div>
					  	</div>
					  	<!-- checkout-step-02  -->

						<!-- checkout-step-03  -->
					  	<div class="panel panel-default checkout-step-03">
						    <div class="panel-heading">
						      <h4 class="unicase-checkout-title">
						        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree">
						       		<span>3</span>Shipping Information
						        </a>
						      </h4>
						    </div>
						    <div id="collapseThree" class="panel-collapse collapse">
						      <div class="panel-body">
						      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						      </div>
						    </div>
					  	</div>
					  	<!-- checkout-step-03  -->

						<!-- checkout-step-04  -->
					    <div class="panel panel-default checkout-step-04">
						    <div class="panel-heading">
						      <h4 class="unicase-checkout-title">
						        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFour">
						        	<span>4</span>Shipping Method
						        </a>
						      </h4>
						    </div>
						    <div id="collapseFour" class="panel-collapse collapse">
							    <div class="panel-body">
							     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							    </div>
					    	</div>
						</div>
						<!-- checkout-step-04  -->

						<!-- checkout-step-05  -->
					  	<div class="panel panel-default checkout-step-05">
						    <div class="panel-heading">
						      <h4 class="unicase-checkout-title">
						        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFive">
						        	<span>5</span>Payment Information
						        </a>
						      </h4>
						    </div>
						    <div id="collapseFive" class="panel-collapse collapse">
						      <div class="panel-body">
						       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						      </div>
						    </div>
					    </div>
					    <!-- checkout-step-05  -->

						<!-- checkout-step-06  -->
					  	<div class="panel panel-default checkout-step-06">
						    <div class="panel-heading">
						      <h4 class="unicase-checkout-title">
						        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseSix">
						        	<span>6</span>Order Review
						        </a>
						      </h4>
						    </div>
					    	<div id="collapseSix" class="panel-collapse collapse">
					      		<div class="panel-body">
					        		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					      		</div>
					    	</div>
					  	</div>
					  	<!-- checkout-step-06  --> --}}
				<!---======	 @@@@@@@@@@@@@@@@@@@@ end of received telecom payment information@@@@@@@@@@====-->
					</div><!-- /.checkout-steps -->
				</div>
				<div class="col-md-4">
					<!-- checkout-progress-sidebar -->
<div class="checkout-progress-sidebar ">
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
		    	<h4 class="unicase-checkout-title">Your Checkout Progress</h4>
		    </div>
		    <div class="">
				<ul class="nav nav-checkout-progress list-unstyled">
      @foreach ($carts as $item )
       
     
					<li>
      <strong>Image:</strong>
      <img src="{{asset($item->options->image)}}" style="width: 50px; height:50px;" alt="">
     </li>
					<li>
      <strong>Qty:</strong>
         ({{$item->qty}}) 
      <strong>Color:</strong>
          {{$item->options->color}}
      <strong>Weight:</strong>
          {{$item->options->size}}
     </li>
        @endforeach
     <hr/>
					<li>
      @if(Session::has('coupon'))
        <strong>SubTotal:</strong>{{$cartTotal}}Tshs.<hr/>

         <strong>Coupon Name:</strong>{{$session->get('coupon')['coupon_name']}}
          ({{session()->get('coupon')['coupon_discount']}} %)
         <hr/>

         <strong>Coupon Discount:</strong>({{session()->get('coupon')['coupon_discount']}} %)
         <hr/>

         <strong>Grand Total:</strong>({{session()->get('coupon')['total_amount']}} %)
         <hr/>
      @else
       
       {{-- <strong>SubTotal:</strong>{{$cartTotal}}Tshs.<hr/>
       <strong>Grand Total:</strong>{{$cartTotal}}Tshs.<hr/> --}}
      @endif
      
     </li>
					
   
				</ul>		
			</div>
		</div>
	</div>
</div> 
<!-- checkout-progress-sidebar -->				</div>



			<div class="col-md-4">
					<!-- checkout-progress-sidebar -->
<div class="checkout-progress-sidebar ">
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
		    	<h4 class="unicase-checkout-title">Select Payment Method</h4>
		    </div>
		    <div class="row">
									{{-- <div class="col-md-4">
										<label for="">Stripe</label>
										<input type="radio" name="payment_method"  value="stripe">
										<img src="{{asset('frontend/assets/images/payments/4.png')}}" alt="">
									</div> --}}
									
							{{-- <div class="col-md-4">
									<label for="">Card</label>
								<input type="radio" name="payment_method"  value="card">
										<img src="{{asset('frontend/assets/images/payments/3.png')}}" alt="">
							</div> --}}
							<div class="col-md-4">
									<label for="">Bank Payment</label>
								<input type="radio" name="payment_method"  value="cash">
										<img src="{{asset('frontend/assets/images/payments/6.png')}}" alt="">
							</div>

			</div>
						<hr/>
			 <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Payment Step</button>
			
		</div><!--================end row==========-->
	</div>
</div> 
<!-- checkout-progress-sidebar -->				</div>


	</form>






			</div><!-- /.row -->
		</div><!-- /.checkout-box -->
	
</div><!-- /.container -->
</div><!-- /.body-content -->




 <script type="text/javascript">
    $(document).ready(function(){
        $('select[name="division_id"]').on('change',function(){
          var division_id =  $(this).val();
           if(division_id){
            $.ajax({  
               url:"{{url('district-get/ajax')}}/"+division_id,
               type:"GET",
               dataType:"json",
               success:function(data){
																$('select[name="state_id"]').empty();
                var d =$('select[name="district_id"]').empty();
                $.each(data,function(key, value){
                 $('select[name="district_id"]').append('<option value="'+ value.id +'">'+ value.district_name+'</option>')
                });
               },
            });
           }else{
            alert('danger');
           }
        });


								$('select[name="district_id"]').on('change',function(){
          var district_id =  $(this).val();
           if(district_id){
            $.ajax({
               url:"{{url('state-get/ajax')}}/"+district_id,
               type:"GET",
               dataType:"json",
               success:function(data){
                var d =$('select[name="state_id"]').empty();
                $.each(data,function(key, value){
                 $('select[name="state_id"]').append('<option value="'+ value.id +'">'+ value.state_name+'</option>')
                });
               },
            });
           }else{
            alert('danger');
           }
        });

    });
  </script>







   @endsection