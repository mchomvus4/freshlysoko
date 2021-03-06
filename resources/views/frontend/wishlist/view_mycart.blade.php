@extends('frontend.main_master')
@section('content')

@section('title')
 My Cart Page
@endsection

                            <div class="breadcrumb">
                             <div class="container">
                              <div class="breadcrumb-inner">
                               <ul class="list-inline list-unstyled">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li class='active'>My Cart</li>
                               </ul>
                              </div><!-- /.breadcrumb-inner -->
                             </div><!-- /.container -->
                            </div><!-- /.breadcrumb -->

                            <div class="body-content">
                             <div class="container">
                             
                              <div class="row ">
                                  <div class="shopping-cart">
                                   <div class="shopping-cart-table ">
                                <div class="table-responsive">
                                 <table class="table">
                                  <thead>
                                   <tr>
                                    <th class="cart-romove item">Image</th>
                                    <th class="cart-description item">Name</th>
                                    <th class="cart-product-name item">Color</th>
                                    <th class="cart-edit item">Size/Weight</th>
                                    <th class="cart-qty item">Quantity</th>
                                    <th class="cart-sub-total item">Total Qty</th>
                                    <th class="cart-total last-item">Remove</th>
                                   </tr>
                                  </thead><!-- /thead -->
                               <tbody id="cartpage">
                                            
                               
                               </tbody>
                              </table>
                             </div>
                            </div>		

                       



                        <div class="col-md-4 col-sm-12 estimate-ship-tax">
                                  </div>
                                  <div class="col-md-4 col-sm-12 estimate-ship-tax">
                                  </div>

                        <div class="col-md-4 col-sm-12 cart-shopping-total">
                           <table class="table">
                              <thead id="couponCalField">
                                 
                              </thead><!-- /thead -->
                              <tbody>
                                    <tr>
                                       <td>
                                          <div class="cart-checkout-btn pull-right">
                                             <a href="{{route('checkout')}}" type="submit" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</a>
                                           
                                          </div>
                                       </td>
                                    </tr>
                              </tbody><!-- /tbody -->
                           </table><!-- /table -->
                        </div><!-- /.cart-shopping-total -->	
                           <!--=======================COUPON SECTION END=============---->

                           </div><!-- /.row -->


  
                              </div>
                              <br/>
                              {{-- @include('frontend.body.brand') --}}
                                </div>
                             </div>
                              <!-- /.sigin-in-->




@endsection