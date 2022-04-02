 @extends('admin.admin_master')
 @section('admin')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Product</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="{{route('product-store')}}" enctype="multipart/form-data">
						@csrf
					  <div class="row">
						<div class="col-12">						
					
									<div class="row"> <!--start first row-->
										<div class="col-md-4"><!--col-md 4-->
														<div class="form-group">
																		<h5>Brand Select <span class="text-danger">*</span></h5>
																		<div class="controls">
																			<select name="brand_id"  class="form-control">
																				<option value="" selected="" disabled="">Select Brand</option>
																				@foreach ($brands as $brand)
																					<option value="{{$brand->id}}">{{$brand->brand_name_en}}</option>
																				@endforeach
																			</select>
																			@error('brand_id')
																					<span class="text-danger">{{$message}}</span>
																			@enderror
																	</div>
     					 </div>
										</div><!--end col-md 4-->

										<div class="col-md-4"><!--col-md 4-->
																		<div class="form-group">
																		<h5>Category Select <span class="text-danger">*</span></h5>
																		<div class="controls">
																			<select name="category_id"  class="form-control">
																				<option value="" selected="" disabled="">Select Category</option>
																				@foreach ($categories as $category)
																					<option value="{{$category->id}}">{{$category->category_name_en}}</option>
																				@endforeach
																			</select>
																			@error('category_id')
																					<span class="text-danger">{{$message}}</span>
																			@enderror
																	</div>
     					 </div>
										</div><!--end col-md 4-->

										<div class="col-md-4"><!--col-md 4-->
														<div class="form-group">
																		<h5>SubCategory Select <span class="text-danger">*</span></h5>
																		<div class="controls">
																			<select name="subcategory_id"  class="form-control">
																				<option value="" selected="" disabled="">Select Category</option>
																				
																			</select>
																			@error('subcategory_id')
																					<span class="text-danger">{{$message}}</span>
																			@enderror
																	</div>
     					 </div>
										</div><!--end col-md 4-->

									</div><!--end first row-->


										<div class="row"> <!--start 2nd row-->
										<div class="col-md-4"><!--col-md 4-->
														<div class="form-group">
																		<h5>SubSubCategory Select <span class="text-danger">*</span></h5>
																		<div class="controls">
																			<select name="subsubcategory_id"  class="form-control">
																				<option value="" selected="" disabled="">Select SubSubCategory</option>
																			
																			</select>
																			@error('subsubcategory_id')
																					<span class="text-danger">{{$message}}</span>
																			@enderror
																	</div>
     					 </div>
										</div><!--end col-md 4-->

										<div class="col-md-4"><!--col-md 4-->
								<div class="form-group">
								<h5>Product Name English <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="product_name_en" class="form-control">
									@error('product_name_en')
										<span class="text-danger">{{$message}}</span>
										@enderror
								</div>
							</div>

										</div><!--end col-md 4-->

										<div class="col-md-4"><!--col-md 4-->
															<div class="form-group">
								<h5>Product Name Swahili <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="product_name_sw" class="form-control">
									@error('product_name_sw')
										<span class="text-danger">{{$message}}</span>
										@enderror
								</div>
							</div>
										</div><!--end col-md 4-->

									</div><!--end of 2nd row-->
					
						

										<div class="row"> <!--start 3nd row-->
										<div class="col-md-4"><!--col-md 4-->
														<div class="form-group">
															<h5>Product Code <span class="text-danger">*</span></h5>
															<div class="controls">
																<input type="text" name="product_code" class="form-control">
																@error('product_code')
																	<span class="text-danger">{{$message}}</span>
																	@enderror
															</div>
														</div>
										</div><!--end col-md 4-->

								<div class="col-md-4"><!--col-md 4-->
															<div class="form-group">
															<h5>Product Quantity <span class="text-danger">*</span></h5>
															<div class="controls">
																<input type="text" name="product_qty" class="form-control">
																@error('product_qty')
																	<span class="text-danger">{{$message}}</span>
																	@enderror
															</div>
														</div>

										</div><!--end col-md 4-->

										<div class="col-md-4"><!--col-md 4-->
																			<div class="form-group">
																	<h5>Product Tags English<span class="text-danger">*</span></h5>
																	<div class="controls">
																		<input type="text" name="product_tags_en" class="form-control"  data-role="tagsinput">
																		@error('product_tags_en')
																			<span class="text-danger">{{$message}}</span>
																			@enderror
																	</div>
																</div>
										</div><!--end col-md 4-->

									</div><!--end of 3nd row-->
						



										<div class="row"> <!--start 4th row-->
										<div class="col-md-4"><!--col-md 4-->
														<div class="form-group">
														<h5>Product Tags Swahili<span class="text-danger">*</span></h5>
														<div class="controls">
															<input type="text" name="product_tags_sw" class="form-control"  data-role="tagsinput">
															@error('product_tags_sw')
																<span class="text-danger">{{$message}}</span>
																@enderror
														</div>
													</div>
										</div><!--end col-md 4-->

								<div class="col-md-4"><!--col-md 4-->
												<div class="form-group">
														<h5>Product Color English<span class="text-danger">*</span></h5>
														<div class="controls">
															<input type="text" name="product_color_en" class="form-control" value="Red,Yello,Black" data-role="tagsinput">
															@error('product_color_en')
																<span class="text-danger">{{$message}}</span>
																@enderror
														</div>
													</div>

										</div><!--end col-md 4-->

								<div class="col-md-4"><!--col-md 4-->
													<div class="form-group">
														<h5>Product Color Swahili<span class="text-danger">*</span></h5>
														<div class="controls">
															<input type="text" name="product_color_sw" class="form-control" value="Nyekundu,Njano,Nyeusi" data-role="tagsinput">
															@error('product_color_sw')
																<span class="text-danger">{{$message}}</span>
																@enderror
														</div>
													</div>
										</div><!--end col-md 4-->

									</div><!--end of 4th row-->


											<div class="row"> <!--start 5th row-->
										<div class="col-md-4"><!--col-md 4-->
											<div class="form-group">
														<h5>Product Size English<span class="text-danger">*</span></h5>
														<div class="controls">
															<input type="text" name="product_size_en" class="form-control" value="tone" data-role="tagsinput">
															@error('product_size_en')
																<span class="text-danger">{{$message}}</span>
																@enderror
														</div>
													</div>
										</div><!--end col-md 4-->

								<div class="col-md-4"><!--col-md 4-->
												<div class="form-group">
														<h5>Product Size Swahili<span class="text-danger">*</span></h5>
														<div class="controls">
															<input type="text" name="product_size_sw" class="form-control" value="tone" data-role="tagsinput">
															@error('product_size_sw')
																<span class="text-danger">{{$message}}</span>
																@enderror
														</div>
													</div>

										</div><!--end col-md 4-->

								<div class="col-md-4"><!--col-md 4-->
											<div class="form-group">
															<h5>Product Selling Prize <span class="text-danger">*</span></h5>
															<div class="controls">
																<input type="text" name="selling_price" class="form-control">
																@error('selling_price')
																	<span class="text-danger">{{$message}}</span>
																	@enderror
															</div>
														</div>
										</div><!--end col-md 4-->

									</div><!--end of 5th row-->


	<div class="row"> <!--start 6th row-->
										<div class="col-md-4"><!--col-md 4-->
													<div class="form-group">
														<h5>Product Discount Price<span class="text-danger">*</span></h5>
														<div class="controls">
															<input type="text" name="discount_price" class="form-control">
															@error('discount_price')
																<span class="text-danger">{{$message}}</span>
																@enderror
														</div>
													</div>
										</div><!--end col-md 4-->

								<div class="col-md-4"><!--col-md 4-->
												<div class="form-group">
														<h5>Main Thambnail<span class="text-danger">*</span></h5>
														<div class="controls">
															<input type="file" name="product_thambnail" class="form-control" onchange="mainThamUrl(this)" >
															@error('product_thambnail')
																<span class="text-danger">{{$message}}</span>
																@enderror
																<img src="" id="mainThumb" alt="">
														</div>
													</div>

										</div><!--end col-md 4-->

								<div class="col-md-4"><!--col-md 4-->
											<div class="form-group">
														<h5>Multiple Image<span class="text-danger">*</span></h5>
														<div class="controls">
															<input type="file" name="multi_img[]" class="form-control" multiple="" id="multiImg">
															@error('multi_img')
																<span class="text-danger">{{$message}}</span>
																@enderror
																<div class="row" id="preview_img">

																</div>
														</div>
													</div>
										</div><!--end col-md 4-->

									</div><!--end of 6th row-->



<div class="row"> <!--start 7th row-->
										<div class="col-md-6"><!--col-md 6-->
													<div class="form-group">
														<h5>Short Description English<span class="text-danger">*</span></h5>
														<div class="controls">
															<textarea name="short_descp_en" id="textarea" class="form-control"  placeholder="Textarea text"></textarea>
														</div>
													</div>
										</div><!--end col-md 4-->

								<div class="col-md-6"><!--col-md 6-->
										<div class="form-group">
														<h5>Short Description Swahili<span class="text-danger">*</span></h5>
														<div class="controls">
															<textarea name="short_descp_sw" id="textarea" class="form-control" placeholder="Textarea text"></textarea>
														</div>
													</div>

										</div><!--end col-md 6-->

							

									</div><!--end of 7th row-->



<div class="row"> <!--start 8th row-->
										<div class="col-md-6"><!--col-md 6-->
													<div class="form-group">
														<h5>Long Description English<span class="text-danger">*</span></h5>
														<div class="controls">
															<textarea id="editor1" name="long_descp_en" rows="10" cols="80">
												Long Description English
												</textarea>
														</div>
													</div>
										</div><!--end col-md 6-->

								<div class="col-md-6"><!--col-md 6-->
										<div class="form-group">
														<h5>Long Description Swahili<span class="text-danger">*</span></h5>
														<div class="controls">
															<textarea id="editor2" name="long_descp_sw" rows="10" cols="80">
												Long Description Swahili
						</textarea>
														</div>
													</div>
										</div><!--end col-md 6-->
									</div><!--end of 8th row-->

										<hr/>

						</div>
					  </div>
							
						<div class="row">
												
														<div class="col-md-6">
															<div class="form-group">
																
																<div class="controls">
																	<fieldset>
																		<input type="checkbox" id="checkbox_2" name="hot_deals"  value="1">
																		<label for="checkbox_2">Hot Deals</label>
																	</fieldset>
																	<fieldset>
																		<input type="checkbox" id="checkbox_3" name="featured" value="1">
																		<label for="checkbox_3">Featured</label>
																	</fieldset>
																</div>
															</div>
														</div>


														<div class="col-md-6">
															<div class="form-group">
																
																<div class="controls">
																	<fieldset>
																		<input type="checkbox" id="checkbox_4" name="special_offer"  value="1">
																		<label for="checkbox_4">Special Offer</label>
																	</fieldset>
																	<fieldset>
																		<input type="checkbox" id="checkbox_5" name="special_deals" value="1">
																		<label for="checkbox_5">Special Deals</label>
																	</fieldset>
																</div>
															</div>
														</div>
						</div>

{{-- 
						<div class="col-md-6"><!--col-md 4-->
												<div class="form-group">
														<h5>Digital Product <span class="text-danger"> pdf,xlx,cvs *</span></h5>
														<div class="controls">
															<input type="file" name="file" class="form-control" >
														</div>
													</div>

										</div><!--end col-md 4--> --}}
					
					
						<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add Product">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
 
  <script type="text/javascript">
    $(document).ready(function(){
        $('select[name="category_id"]').on('change',function(){
          var category_id =  $(this).val();
           if(category_id){
            $.ajax({
               url:"{{url('category/subcategory/ajax')}}/"+category_id,
               type:"GET",
               dataType:"json",
               success:function(data){
																$('select[name="subsubcategory_id"]').html('');//this code line will make field empty for sub-sub category
                var d =$('select[name="subcategory_id"]').empty();
                $.each(data,function(key, value){
                 $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">'+ value.subcategory_name_en+'</option>')
                });
               },
            });
           }else{
            alert('danger');
           }
        });


								$('select[name="subcategory_id"]').on('change',function(){
          var subcategory_id =  $(this).val();
           if(subcategory_id){
            $.ajax({
               url:"{{url('category/sub-subcategory/ajax')}}/"+subcategory_id,
               type:"GET",
               dataType:"json",
               success:function(data){
                var d =$('select[name="subsubcategory_id"]').empty();
                $.each(data,function(key, value){
                 $('select[name="subsubcategory_id"]').append('<option value="'+ value.id +'">'+ value.subsubcategory_name_en+'</option>')
                });
               },
            });
           }else{
            alert('danger');
           }
        });



    });
  </script>
{{-- //This is a sript for thambnail --}}
			<script type="text/javascript">
							function mainThamUrl(input){
							if(input.files && input.files[0]){
									var reader = new FileReader();
									reader.onload = function(e){
										$('#mainThumb').attr('src',e.target.result).width(80).height(80);
									};
									reader.readAsDataURL(input.files[0]);
							}

							}

			</script>

	{{-- ---------------------------Show Multi Image JavaScript Code ------------------------ --}}

<script>
 
  $(document).ready(function(){
   $('#multiImg').on('change', function(){ //on file input change
      if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
      {
          var data = $(this)[0].files; //this file data
           
          $.each(data, function(index, file){ //loop though each file
              if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                  var fRead = new FileReader(); //new filereader
                  fRead.onload = (function(file){ //trigger function on successful read
                  return function(e) {
                      var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                  .height(80); //create image element 
                      $('#preview_img').append(img); //append image to output element
                  };
                  })(file);
                  fRead.readAsDataURL(file); //URL representing the file's data.
              }
          });
           
      }else{
          alert("Your browser doesn't support File API!"); //if File API is absent
      }
   });
  });
   
  </script>
{{-- ================================= End Show Multi Image JavaScript Code. ==================== --}}










 @endsection