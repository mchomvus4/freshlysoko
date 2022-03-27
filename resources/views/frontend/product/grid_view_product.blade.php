 @foreach($products as $product )
                    
                  <div class="col-sm-6 col-md-4 wow fadeInUp">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="{{url('product/details/'.$product->id.'/'.$product->product_slug_en)}}"><img  src="{{asset($product->product_thambnail)}}" alt=""></a> </div>
                          <!-- /.image -->
                           {{-- @php
                            $markedPrice = $product->selling_price + $product->discount_price;
                            $discountPercentage = (  $product->discount_price/$markedPrice)*100;
                          @endphp
                           <div>
                              @if($product->discount_price == NULL)
                                 <div class="tag new"><span>new</span></div>
                                 @else
                                  <div class="tag hot"><span>{{round($discountPercentage )}}%</span></div>
                                  @endif
                            </div> --}}
                        </div>
                        <!-- /.product-image -->
                      
                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('product/details/'.$product->id.'/'.$product->product_slug_en)}}">
                            @if(session()->get('language') == 'swahili')  {{$product->product_name_sw}} @else  {{$product->product_name_en}} @endif
                            </a></h3>
                          


                           {{-- @if($product->discount_price == NULL)
                             <div class="product-price"> <span class="price">{{$product->selling_price}}Tsh. </span></div>
                           @else
                              <div class="product-price"> <span class="price">{{$product->selling_price}}Tsh.</span> <span class="price-before-discount">{{$product->discount_price}}Tsh.</span> </div>
                           @endif --}}
                         
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                             
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                   @endforeach
                  <!-- /.item -->