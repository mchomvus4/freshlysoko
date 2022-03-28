 @foreach($products as $product )
                <div class="category-product-inner wow fadeInUp">
                  <div class="products">
                    <div class="product-list product">
                      <div class="row product-list-row">
                        <div class="col col-sm-4 col-lg-4">
                          <div class="product-image">
                            <div class="image"> <img src="{{asset($product->product_thambnail)}}" alt=""> </div>
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-8 col-lg-8">
                          <div class="product-info">
                            <h3 class="name"><a href=""{{url('product/details/'.$product->id.'/'.$product->product_slug_en)}}">
                              @if(session()->get('language') == 'swahili')  {{$product->product_name_sw}} @else  {{$product->product_name_en}} @endif
                            </a></h3>
                            {{-- <div class="rating rateit-small"></div> --}}


                           {{-- @if($product->discount_price == NULL)
                            <div class="product-price"> <span class="price">{{$product->selling_price}}Tsh.</span> </div>
                           @else
                                 <div class="product-price"> <span class="price">{{$product->selling_price}}Tsh.</span> <span class="price-before-discount">{{$product->discount_price}}Tsh.</span> </div>
                           @endif --}}

                       
                            <!-- /.product-price -->
                            <div class="description m-t-10"> @if(session()->get('language') == 'swahili')  {{$product->short_descp_sw}} @else  {{$product->short_descp_en}} @endif</div>
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
                          <!-- /.product-info --> 
                        </div>
                        <!-- /.col --> 
                      </div>
                          @php
                            $markedPrice = $product->selling_price + $product->discount_price;
                            $discountPercentage = (  $product->discount_price/$markedPrice)*100;
                          @endphp
                          
                        <div>
                              @if($product->discount_price == NULL)
                                 <div class="tag new"><span>new</span></div>
                                 @else
                                  <div class="tag hot"><span>{{round($discountPercentage )}}%</span></div>
                                  @endif
                            </div>
                    </div>
                    <!-- /.product-list --> 
                  </div>
                  <!-- /.products --> 
                </div>
                @endforeach
                <!-- /.category-product-inner -->