@extends('templates.master')
@section('content')
@foreach ($slugs as $slug)
@section('title',$slug->books_name)
<div id="product-product" class="container">
    
    <div class="row">
                                    <div id="content" class="col-sm-12">
            
			<div class="row">                                                     <div class="product-image-main col-sm-6">
                    
					                        <input type="hidden" id="check-use-zoom" value="1">
						<div class="lightbox-container"></div>
                                                    <div class="product-zoom-image">
                                                                    <div id="wrap" style="top:0px;z-index:9999;position:relative;"><a href="{{ asset($slug->books_img) }}" class="cloud-zoom main-image" id="product-cloud-zoom" style="width: 600px; height: 600px; position: relative; display: block;" rel="                                             showTitle: false ,
                                            zoomWidth:600,zoomHeight:600,
                                             position:'inside', adjustX: 0 ">
                                        <img src="{{ asset($slug->books_img) }}" style="width:580px; height:590px" title="{{ $slug->books_name }}" alt="{{ $slug->books_name }}" style="display: block;">
                                    </a><div class="mousetrap" style="background-image:url(&quot;.&quot;);z-index:999;position:absolute;width:570px;height:570px;left:0px;top:0px;"></div><div class="mousetrap" style="background-image:url(&quot;.&quot;);z-index:999;position:absolute;width:570px;height:570px;left:0px;top:0px;"></div><div class="mousetrap" style="background-image: url(&quot;.&quot;); z-index: 999; position: absolute; width: 570px; height: 570px; left: 0px; top: 0px; cursor: move;"></div><div class="mousetrap" style="background-image:url(&quot;.&quot;);z-index:999;position:absolute;width:570px;height:570px;left:0px;top:0px;"></div><div class="mousetrap" style="background-image:url(&quot;.&quot;);z-index:999;position:absolute;width:570px;height:570px;left:0px;top:0px;"></div><div class="mousetrap" style="background-image:url(&quot;.&quot;);z-index:999;position:absolute;width:570px;height:570px;left:0px;top:0px;"></div><div class="mousetrap" style="background-image:url(&quot;.&quot;);z-index:999;position:absolute;width:570px;height:570px;left:0px;top:0px;"></div><div class="mousetrap" style="background-image:url(&quot;.&quot;);z-index:999;position:absolute;width:570px;height:570px;left:0px;top:0px;"></div><div class="mousetrap" style="background-image:url(&quot;.&quot;);z-index:999;position:absolute;width:570px;height:570px;left:0px;top:0px;"></div><div class="mousetrap" style="background-image:url(&quot;.&quot;);z-index:999;position:absolute;width:570px;height:570px;left:0px;top:0px;"></div><div class="mousetrap" style="background-image:url(&quot;.&quot;);z-index:999;position:absolute;width:570px;height:570px;left:0px;top:0px;"></div></div>
                                                            </div>
                            <div class="additional-images owl-carousel owl-theme owl-loaded owl-drag">
                                <!--  -->
                                    <!-- <div class="item"> -->
                                        <!-- <a class="cloud-zoom-gallery sub-image" id="product-image-default" href="http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/5-700x700.jpg" title="Beats Solo Wireless On-Ear Headphone" -->
                                           <!-- rel="useZoom: 'product-cloud-zoom', smallImage: 'http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/5-600x600.jpg'" data-pos="1"> -->
                                            <!-- <img src="http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/5-600x600.jpg" title="Beats Solo Wireless On-Ear Headphone" alt="Beats Solo Wireless On-Ear Headphone" /> -->
                                        <!-- </a> -->
                                    <!-- </div> -->
                                <!--  -->
                                                                                                                                                
                                                                                                                    
                                                                                                                    
                                                                                                                    
                                                                                                                    
                                                                                                                                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 663px;"><div class="owl-item active" style="width: 112.5px; margin-right: 20px;"><div class="item">
                                            <a class="cloud-zoom-gallery sub-image" id="product-image-options-" href="{{ asset($slug->books_img) }}" title="Beats Solo Wireless On-Ear Headphone" rel="useZoom: 'product-cloud-zoom', smallImage: '{{ $slug->books_img }}'" data-pos="2">
                                                <img src="{{ asset($slug->books_img) }}" title="Beats Solo Wireless On-Ear Headphone" alt="Beats Solo Wireless On-Ear Headphone">
                                            </a>
                                        </div></div></div></div><div class="owl-nav"><div class="owl-prev disabled">prev</div><div class="owl-next">next</div></div><div class="owl-dots disabled"></div></div>

                                                                
                </div>
                                                                    <div class="col-sm-6 product-info-main">
                    <div class="inner">
										
			 															 <a href="#"></a> 							 </p>
										<h1 class="product-name">{{ $slug->books_name }}</h1>
					<ul class="list-unstyled">
                        							
																												
												                            <li>Yazıçı <a href="indexe69c.html?route=product/manufacturer/info&amp;manufacturer_id=7">{{ $slug->Writers($slug->writer_id)->writer_name }}</a></li>
                                                <li>Məhsul Kodu: <span>{{ $slug->code }}</span></li>
                                                <li>Səhifə: <span>{{ $slug->page }}</span></li>
						
                    </ul>
                    
					
					 												<div class="price-box box-regular">
							<span class="regular-price">
								<span class="price">{{ $slug->price }}</span>
							</span>
						</div>

						 @php $rating_num = number_format($rating_value) @endphp

						<div class="ratings">
							
							@for ($i=1; $i <= $rating_num; $i++)
								<i class="fa fa-star checked"></i>
							@endfor
							@for ($j = $rating_num+1; $j <= 5 ; $j++)
							<i class="fa fa-star"></i>
							@endfor

							<a class="review-count" href="#">({{ $reviews->count() }} Rəy)</a><a href="#">Rəy yaz</a>
						</div>	
					
					<p class="short-des">{{ Str::limit($slug->books_description,200,'...') }}</p>

                    <div id="product">                                                 <div class="form-group">
						<div></div>
						<label class="control-label" for="input-quantity">Qty</label>
								<input type="text" name="quantity" value="1" size="2" id="quantity" class="form-control" />
							<div class="counter js-variant-counter" data-quantity="" style="" data-max="9999999" data-quantity-change-init="true">
								<button type="button" class="counter-button is-count-down" id="is-count-down" onclick="countdown()"></button>
								<button type="button" class="counter-button is-count-up" id="is-count-up"></button>
							  </div>
							  
                            <button type="button" id="button-cart" data-loading-text="Loading..." class="btn button button-cart" title="Add to Cart">Add to Cart</button>
							
							<button type="button" class="btn btn-default button btn-wishlist" title="Add to Wish List" onclick="wishlist.add('62');">Add to Wish List</button>
							<button type="button" class="btn btn-default button btn-compare" title="Compare this Product" onclick="compare.add('62');">Compare this Product</button>
					   </div>
                        </div>
						
						<!-- AddThis Button BEGIN -->
						<div class="addthis_toolbox addthis_default_style" data-url="index2963.html?route=product/product&amp;product_id=62"><a class="addthis_button_facebook_like at300b" fb:like:layout="button_count"><div class="fb-like" data-layout="button_count" data-show_faces="false" data-share="false" data-action="like" data-width="90" data-height="25" data-font="arial" data-href="file:///C:/Users/HP/Desktop/Son/smartbook4.demo.towerthemes.com/file:///C:/Users/HP/Desktop/Son/smartbook4.demo.towerthemes.com/index2963.html?route=product/product&amp;product_id=62" data-send="false" style="height: 25px;"></div></a> <a class="addthis_button_tweet at300b"><div class="tweet_iframe_widget" style="width: 62px; height: 25px;"><span><a href="http://twitter.com/share" class="twitter-share-button" data-url="file:///C:/Users/HP/Desktop/Son/smartbook4.demo.towerthemes.com/file:///C:/Users/HP/Desktop/Son/smartbook4.demo.towerthemes.com/index2963.html?route=product/product&amp;product_id=62#.YlsHOqfJ8U0.twitter" data-counturl="file:///C:/Users/HP/Desktop/Son/smartbook4.demo.towerthemes.com/file:///C:/Users/HP/Desktop/Son/smartbook4.demo.towerthemes.com/index2963.html?route=product/product&amp;product_id=62" data-count="horizontal" data-text="Beats Solo Wireless On-Ear Headphone:" data-related="" data-hashtags="" data-width="62">Tweet</a></span></div></a> <a class="addthis_button_pinterest_pinit at300b"></a> <a class="addthis_counter addthis_pill_style" href="#" style="display: inline-block;"><a class="atc_s addthis_button_compact">Share<span></span></a><a class="addthis_button_expanded" target="_blank" title="More" href="#"></a></a><div class="atclear"></div></div>
						<script type="text/javascript" src="../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>
						<!-- AddThis Button END --> 
						
				</div>		
			</div>
            </div>
			<div class="product-info-detailed">
				<ul class="nav nav-tabs">
				<li class="active"><a href="#tab-description" data-toggle="tab">Məzmunu</a></li>

			
				<li><a href="#tab-review" data-toggle="tab">Rəylər ({{ $reviews->count() }})</a></li>
				
			
				</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="tab-description">
					<p>{{ $slug->books_description }}</p>
			</div>
				<div class="tab-pane" id="tab-review">
							<div id="review"></div><button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#exampleModal">Rəy Yaz</button>
							<h2>Rəylər</h2>

							@foreach ($reviews as $review)

							<div class="comment-block-wrapper mb--50">
								<div class="single-comment" style="border: 0.5px solid silver">	
									<div class="comment-text" style="margin-left: 20px">
										<h4 class="author"><a href="#">{{ $review->name }}</a></h4>
										<span class="time">{{ $review->created_at->format('d M Y H:m:s') }}</span>
										<p>{{ $review->review }}</p>
									</div>
								</div>
							</div>

							@endforeach

								<div class="form-group required">
									<div class="col-sm-12">
										<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
											  <div class="modal-content">
												<div class="modal-header">
												  <h5 class="modal-title" id="exampleModalLabel">Rəyiniz</h5>
												  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												  </button>
												</div>
												<div class="modal-body">
												  <form action="{{ route('BooksReviewPost') }}" method="POST">
													<input type="hidden" name="books_id" id="books_id" value="{{ $slug->id }}" />
													@csrf
													<div class="form-group required">
														<div class="col-sm-12">
															<label class="control-label" for="input-name">Ad</label>
															<input type="text" name="name" id="name" class="form-control">
														</div>
													</div>
													<div class="form-group required">
														<div class="col-sm-12">
															<label class="control-label" for="input-review">Rəyiniz</label>
															<textarea name="review" rows="5" id="input-review" class="form-control"></textarea>
														</div>
													</div>
													<div class="rating-css">
														<div class="star-icon">
														  <input type="radio" name="rating" value="1" id="rating1">
														  <label for="rating1" class="fa fa-star"></label>
														  <input type="radio" name="rating" value="2" id="rating2">
														  <label for="rating2" class="fa fa-star"></label>
														  <input type="radio" name="rating" value="3" id="rating3">
														  <label for="rating3" class="fa fa-star"></label>
														  <input type="radio" name="rating" value="4" id="rating4">
														  <label for="rating4" class="fa fa-star"></label>
														  <input type="radio" name="rating" value="5" id="rating5">
														  <label for="rating5" class="fa fa-star"></label>
														</div>
													  </div>
													  <div class="modal-footer">
														<div class="buttons clearfix">
															<div class="pull-right">
																<button type="submit" id="button-review" class="btn btn-primary">Göndər</button>
															</div>
														</div>
													</div>
												  </form>
												</div>
											  </div>
											</div>
										  </div>
									</div>
								</div>
					</div>
				</div>
			</div>
           
			<div class="related-products">
				<div class="module-title">
					<h2>Əlaqədar Kitablar</h2>
					
				</div>
				
				<div class="owl-container">
				<div class="related-container tt-product owl-carousel owl-carousel-related owl-theme owl-loaded owl-drag">															
																			
				<div class="owl-stage-outer">
				<div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3600px;">
														
					@foreach ($related as $relate)
						
															
						<div class="owl-item" style="width: 300px;">
						<div class="row_items">
						<div class="product-layout grid-style active">
						<div class="product-thumb transition">
							<div class="item">		
								<div class="item-inner">
									<div class="caption-top">
																				<p class="manufacture-product">
											<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=7">{{ $relate->Writers($relate->writer_id)->writer_name }}</a>
										</p>
											
										<h4 class="product-name"><a href="{{ route('BooksProduct',$relate->slug) }}">{{ $relate->books_name }}</a></h4>
										
									</div>
									<div class="image images-container">
										<div class="inner">
										<a href="{{ route('BooksProduct',$relate->slug) }}" class="product-image">
																						<img src="{{ asset($relate->books_img) }}" alt="{{ $relate->books_name }}" title="{{ $relate->books_name }}" class="img-responsive">
										</a>
										<div class="box-label">	
										
																				
										</div>
										<div class="action-links">
											<button class="button btn-cart" type="button" title="Add to Cart" onclick="cart.add('52');"><span>Add to Cart</span></button>
											<button class="button btn-wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('52');"><span>Add to Wish List</span></button>
											<button class="button btn-compare" type="button" title="Compare this Product" onclick="compare.add('52');"><span>Compare this Product</span></button>
											
										</div>
										</div>
									</div><!-- image -->
									<div class="caption">
										<div class="inner">
										<div class="ratings">
											<div class="rating-box">
																																															<div class="rating0">rating</div>
																																																																																																																																																					</div>
										</div>			
																					<div class="price-box">
											<label></label>
																							<p class="special-price"><span class="price">{{ $relate->price }} AZN</span></p>
												<p class="old-price"><span class="price">{{ $relate->old_price }} AZN</span></p>						  
																																	</div>
																															<div class="label-product label_sale"><span>-{{ $relate->price_cut }}% </span></div>
																				
										</div>
									</div><!-- caption -->
									
										
								</div>
							</div>
						</div><!-- product-thumb -->						
					</div><!-- product-layout -->        
										</div></div>

										@endforeach
										
									</div></div></div>
				</div>
			
			</div>

        </div>
</div>
</div>
@endforeach

@endsection
@section('addcss')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('addjs')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
	var owl = $('.owl-carousel-related');
owl.owlCarousel({
    loop:true,
    nav:true,
    margin:10,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },            
        960:{
            items:3
        },
        1200:{
            items:4
        }
    }
});
</script>
<style>
.checked {
	color: #ffe400;
}
.rating-css div {
  color: #ffe400;
  text-transform: uppercase;
  padding: 10px 0;
}
.rating-css input {
  display: none;
}
.rating-css input + label {
  font-size: 25px;
  text-shadow: 1px 1px 0 #ffe400;
  cursor: pointer;
}
.rating-css input:checked + label ~ label {
  color: #838383;
}
.rating-css label:active {
  transform: scale(0.8);
  transition: 0.3s ease;
}
</style>


<style>
	.counter {
  width: 72px;
  background-color: white;
  -webkit-box-align: stretch;
  -ms-flex-align: stretch;
  align-items: stretch; }
  /* line 346, _components.scss */
  .counter.hidden-counter .counter-button {
    display: none; }
  /* line 350, _components.scss */
  .counter.hidden-counter .counter-input {
    border: 1px solid #d8d8d8;
    outline: none; }
    /* line 354, _components.scss */
    .counter.hidden-counter .counter-input:focus {
      -webkit-box-shadow: 0px 0px 2px #dc0708;
      box-shadow: 0px 0px 2px #dc0708; }

/* line 363, _components.scss */
.counter-button {
  -webkit-transition: color 0.15s ease-out 0.15s;
  transition: color 0.15s ease-out 0.15s;
  padding: 0;
  border: none;
  display: inline-block;
  vertical-align: middle;
  height: 20px;
  width: 20px;
  font-size: 8px;
  line-height: 10px;
  color: black;
  background-color: white;
  border-radius: 50%; }
  /* line 374, _components.scss */
  .counter-button.is-count-down {
    border: 1px solid #000;
    color: #000; }
    /* line 458, _mixins.scss */
    .counter-button.is-count-down:before {
      font-family: "FontAwesome";
      content: "-"; 
	font-size: 35px;
	font-weight: bold
	}
  /* line 381, _components.scss */
  .counter-button.is-count-up {
    border: 1px solid #000;
    color: #000; 
	font-size: 25px;
	font-weight: bold
}
    /* line 467, _mixins.scss */
    .counter-button.is-count-up:before {
      font-family: "Plus";
      content: "+"; }
  /* line 387, _components.scss */
  .counter-button:hover, .counter-button:focus {
    color: #000;
    outline: none;
    border: 1px solid #000; }
</style>
<script>

	let quantity = document.getElementById('quantity');
	let is-count-down = document.getElementById('is-count-down');
	let is-count-up = document.getElementById('is-count-up');

	let count = 0;

	function countdown = () => {
		count++;
	}


</script>

@endsection
@section('addcss')
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />
<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
@endsection
@section('addjs')	
@endsection