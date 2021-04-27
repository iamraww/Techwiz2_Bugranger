@extends('layout.master')
@section('content')
<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(frontend/image/cuahang2.jpg);">

	</section>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Find products...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
						<!--  -->
						<h4 class="m-text14 p-b-7">
                            Category
						</h4>

						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="#" class="s-text13 active1">
									All
								</a>
							</li>
							@foreach($type_product as $type)
							<li class="p-t-4">
								<a href="{{route('store',$type->id)}}" class="s-text13">
									{{$type->name}}
								</a>
							</li>
							@endforeach
						</ul>

						<!--  -->
						<h4 class="m-text14 p-b-32">
                            Filter by price
						</h4>

						<div class="filter-price p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-17">
								Price
							</div>

							<div class="wra-filter-bar">
								<div id="filter-bar"></div>
							</div>

							<div class="flex-sb-m flex-w p-t-16">
								<div class="w-size11">
									<!-- Button -->
									<button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4">
                                        Filter
									</button>
								</div>

								<div class="s-text3 p-t-10 p-b-10">
									Từ: $<span id="value-lower">610</span> - $<span id="value-upper">980</span>
								</div>
							</div>
						</div>

						<div class="filter-color p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-12">
                                Color
							</div>

							<ul class="flex-w">
								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter1" type="checkbox" name="color-filter1">
									<label class="color-filter color-filter1" for="color-filter1"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter2" type="checkbox" name="color-filter2">
									<label class="color-filter color-filter2" for="color-filter2"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter3" type="checkbox" name="color-filter3">
									<label class="color-filter color-filter3" for="color-filter3"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter4" type="checkbox" name="color-filter4">
									<label class="color-filter color-filter4" for="color-filter4"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
									<label class="color-filter color-filter5" for="color-filter5"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter6" type="checkbox" name="color-filter6">
									<label class="color-filter color-filter6" for="color-filter6"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter7" type="checkbox" name="color-filter7">
									<label class="color-filter color-filter7" for="color-filter7"></label>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Default Sorting</option>
									<option>Popularity</option>
									<option>Price: low to high</option>
									<option>Price: high to low</option>
								</select>
							</div>

							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Price</option>
									<option>$0.00 - $50.00</option>
									<option>$50.00 - $100.00</option>
									<option>$100.00 - $150.00</option>
									<option>$150.00 - $200.00</option>
									<option>$200.00+</option>

								</select>
							</div>
						</div>

						<span class="s-text8 p-t-5 p-b-5">
							There are all products
						</span>
					</div>

					<!-- Product -->

					<div class="row">
						@foreach($sp_theoloai as $tl)
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">

							<!-- Block2 -->
							<div class="block2">
								@if($tl->promotion_price != 0)
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
								<img src="frontend/image/product/{{$tl->image}}" width="300px" height="350px" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<a style="text-decoration: none" href="{{route('addcart',$tl->id)}}">
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                Add to Basket
											</button>
										</a>
									</div>
								</div>
							</div>
							@elseif($tl->new!=0)
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="frontend/image/product/{{$tl->image}}" width="300px" height="350px" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<a style="text-decoration: none" href="{{route('addcart',$tl->id)}}">
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                Add to Basket
											</button>
										</a>
									</div>
								</div>
							</div>
							@else
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="frontend/image/product/{{$tl->image}}" width="300px" height="350px" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<a style="text-decoration: none" href="{{route('addcart',$tl->id)}}">
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                Add to Basket
											</button>
										</a>
									</div>
								</div>
							</div>
							@endif
								<div class="block2-txt p-t-20">
									<a href="{{route('productdetail',$tl->id)}}" class="block2-name dis-block s-text3 p-b-5">
										{{$tl->name}}
									</a>

									@if($tl->promotion_price==0)
									<span class="block2-newprice m-text8 p-r-5">
										{{number_format($tl->unit_price)}}
									</span>
									@else
									<span class="block2-oldprice m-text7 p-r-5">
										{{number_format($tl->unit_price)}}
									</span>
									<span class="block2-newprice m-text8 p-r-5">
										{{number_format($tl->promotion_price)}}
									</span>
									@endif
								</div>

							</div>

						</div>
						@endforeach
					</div>

					<!-- Pagination -->
					<div class="pagination flex-m flex-w p-t-26">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div>
				</div>
			</div>
		</div>
	</section>


@endsection
@section('script')
<!-- lọc -->
	<script type="text/javascript">
		/*[ No ui ]
		===========================================================*/
		var filterBar = document.getElementById('filter-bar');

		noUiSlider.create(filterBar, {
			start: [ 50, 200 ],
			connect: true,
			range: {
				'min': 50,
				'max': 200
			}
		});

		var skipValues = [
		document.getElementById('value-lower'),
		document.getElementById('value-upper')
		];

		filterBar.noUiSlider.on('update', function( values, handle ) {
			skipValues[handle].innerHTML = Math.round(values[handle]) ;
		});
	</script>
@endsection
