@extends('templates.master')
@section('title','Book House')
@section('content')
<div id="content">				
<div class="main-row slider-group">
<div class="container">
<div class="row">
<div class="main-col col-sm-12 col-md-12">
<div class="row sub-row">
<div class="sub-col col-sm-12 col-md-12">
<div class="newletter-popup">
<div id="boxes" class="newletter-container">
<div id="dialog" class="window">
</div>	
</div><!-- /.box -->
</div>
<div id="ajax-login-block">
</div>
<div id="ajax-loader">
<img src="http://smartbook4.demo.towerthemes.com/image/catalog/AjaxLoader.gif" alt="" />
</div>
<div class="ajax-body-login">
<div class="account-login">
<div class="page-title">
<h1>Login or create an account</h1>
<a href="javascript:void(0);" class="a-close-frm" onclick="ocajaxlogin.closeForm();"><span>Close</span></a>
</div>
<div class="ajax-content">
<div class="ajax-container">
<div class="login-form-content">
<h2>Returning Customer</h2>
<p><strong>I am a returning customer</strong></p>
<form action="#" method="post" id="ajax-login-form" enctype="multipart/form-data">
<div class="form-group">
	<label class="control-label" for="input-email">E-Mail Address</label>
	<input type="text" name="email" value="" placeholder="E-Mail Address" id="input-email" class="form-control" />
</div>
<div class="form-group">
	<label class="control-label" for="input-password">Password</label>
	<input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" />
	<a class="forgotten" href="http://smartbook4.demo.towerthemes.com/index.php?route=account/forgotten">Forgotten Password</a>
</div>
<div class="action">
	<button class="button" type="button" onclick="ocajaxlogin.loginAction(document.getElementById('input-email').value, document.getElementById('input-password').value)"><span>Login</span></button>
	<button class="button" type="button" onclick="ocajaxlogin.appendRegisterForm()"><span>Create an account</span></button>
	<img class="ajax-load-img" alt="" src="http://smartbook4.demo.towerthemes.com/image/catalog/AjaxLoader.gif" width="30" height="30" />
</div>
		</form>
</div>
</div>

<script >
$(document).ready(function () {
var keycode = '';

$('#input-email').keypress(function (e) {
keycode = (e.keyCode ? e.keyCode : e.which);
if(keycode == '13') {
	ocajaxlogin.loginAction(ocajaxlogin.loginAction(document.getElementById('input-email').value, document.getElementById('input-password').value));
}
});

$('#input-password').keypress(function (e) {
keycode = (e.keyCode ? e.keyCode : e.which);
if(keycode == '13') {
	ocajaxlogin.loginAction(ocajaxlogin.loginAction(document.getElementById('input-email').value, document.getElementById('input-password').value));
}
});
});

</script>


</div>
</div>
<div class="account-register">
<div class="page-title">
<h1>Login or create an account</h1>
<a href="javascript:void(0);" class="a-close-frm" onclick="ocajaxlogin.closeForm();"><span>Close</span></a>
</div>
<div class="ajax-content">
<div class="ajax-container">
<div class="register-form-content">
<h1>Register Account</h1>
<p>Əgər artıq hesabınız varsa, bu ünvana daxil olun <a onclick="ocajaxlogin.appendLoginForm()" href="javascript:void(0);">giriş</a>.</p>
<form action="{{ route('RegisteredUserController') }}" method="POST" id="ajax-register-form" enctype="multipart/form-data" class="form-horizontal">
@csrf
	<fieldset id="account">
	<div class="form-group required">
		<label class="col-sm-2 control-label" for="input-firstname">Soyad Ad</label>
		<div class="col-sm-10">
			<input type="text" name="name" placeholder="Soyad ve Adınızı daxil edin..." id="input-firstname" class="form-control" />
			<!-- Error First Name -->
			<div class="for-error error-firstname"></div>
		</div>
	</div>
	<div class="form-group required">
		<label class="col-sm-2 control-label" for="input-register-email">E-poçt</label>
		<div class="col-sm-10">
			<input type="email" name="email" placeholder="E-poçtunuzu daxil edin..." id="input-register-email" class="form-control" />
			<!-- Error Email -->
			<div class="for-error error-email"></div>
		</div>
	</div>
</fieldset>
	<div class="form-group required">
		<label class="col-sm-2 control-label" for="input-register-password">Şifrəniz</label>
		<div class="col-sm-10">
			<input type="password" name="password" placeholder="Şifrənizi daxil edin..." id="input-register-password" class="form-control" />
			<!-- Error Password -->
			<div class="for-error error-password"></div>
		</div>
	</div>
	<div class="form-group required">
		<label class="col-sm-2 control-label" for="input-confirm">Təsdiq Şifrəniz</label>
		<div class="col-sm-10">
			<input type="password" name="password_confirmation" placeholder="Təsdiq Şifrənizi daxil edin..." id="input-confirm" class="form-control" />
			<!-- Error Confirm Password -->
			<div class="for-error error-confirm"></div>
		</div>
	</div>
	<div class="form-group required">
		<label class="col-sm-2 control-label" for="img">Şəkil</label>
	  <div class="input-group col-sm-10">
		<div class="custom-file" style="width: 100% !important">
		  <input type="file" class="custom-file-input" id="img" name="img" style="width: 100% !important" />
		  <label class="custom-file-label" for="img" style="width: 100% !important">Şəkil Seç</label>
		</div>
	  </div>
	</div>
	<div class="buttons">
	<div class="pull-right">
		<button type="submit" class="button"><span>Qeydiyyatdan Keç</span></button>
	</div>
</div>
		</form>
</div>
<div class="alert alert-danger for-error error-warning"><i class="fa fa-exclamation-circle"></i><span></span></div>
</div>
<script ><!--
// Sort the custom fields
$('#account .form-group[data-sort]').detach().each(function() {
if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#account .form-group').length) {
$('#account .form-group').eq($(this).attr('data-sort')).before(this);
}

if ($(this).attr('data-sort') > $('#account .form-group').length) {
$('#account .form-group:last').after(this);
}

if ($(this).attr('data-sort') < -$('#account .form-group').length) {
$('#account .form-group:first').before(this);
}
});

$('#address .form-group[data-sort]').detach().each(function() {
if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#address .form-group').length) {
$('#address .form-group').eq($(this).attr('data-sort')).before(this);
}

if ($(this).attr('data-sort') > $('#address .form-group').length) {
$('#address .form-group:last').after(this);
}

if ($(this).attr('data-sort') < -$('#address .form-group').length) {
$('#address .form-group:first').before(this);
}
});

$('input[name=\'customer_group_id\']').on('change', function() {
$.ajax({
url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
dataType: 'json',
success: function(json) {
	$('.custom-field').hide();
	$('.custom-field').removeClass('required');

	for (i = 0; i < json.length; i++) {
		custom_field = json[i];

		$('#custom-field' + custom_field['custom_field_id']).show();

		if (custom_field['required']) {
			$('#custom-field' + custom_field['custom_field_id']).addClass('required');
		}
	}


},
error: function(xhr, ajaxOptions, thrownError) {
	console.log();
}
});
});

$('input[name=\'customer_group_id\']:checked').trigger('change');
//--></script>
<script ><!--
$('button[id^=\'button-custom-field\']').on('click', function() {
var element = this;

$('#form-upload').remove();

$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

$('#form-upload input[name=\'file\']').trigger('click');

if (typeof timer != 'undefined') {
clearInterval(timer);
}

timer = setInterval(function() {
if ($('#form-upload input[name=\'file\']').val() != '') {
	clearInterval(timer);

	$.ajax({
		url: 'index.php?route=tool/upload',
		type: 'post',
		dataType: 'json',
		data: new FormData($('#form-upload')[0]),
		cache: false,
		contentType: false,
		processData: false,
		beforeSend: function() {
			$(element).button('loading');
		},
		complete: function() {
			$(element).button('reset');
		},
		success: function(json) {
			$(element).parent().find('.text-danger').remove();

			if (json['error']) {
				$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
			}

			if (json['success']) {
				alert(json['success']);

				$(element).parent().find('input').val(json['code']);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
}
}, 500);
});
//--></script>

</div>
</div>
<div class="account-success">
<div class="ajax-content">
<div class="ajax-container">
<div class="success-content">
<div class="page-title"><h1>Your Account Has Been Created!</h1></div>
<p>Thank you for registering with Smartbooks4!</p><p>You will be notified by e-mail once your account has been activated by the store owner.</p><p>If you have ANY questions about the operation of this online shop, please <a href="http://smartbook4.demo.towerthemes.com/index.php?route=information/contact">contact the store owner</a>.</p>
<div class="buttons">
<div class="pull-right"><button class="button" onclick="window.location.href='http://smartbook4.demo.towerthemes.com/index.php?route=account/account'"><span>Continue</span></button></div>
</div>
</div>
</div>
</div>
</div>
<div class="logout-success">
<div class="ajax-content">
<div class="ajax-container">
<div class="success-content">
<div class="page-title"><h1>Account Logout</h1></div>
<p>You have been logged off your account. It is now safe to leave the computer.</p><p>Your shopping cart has been saved, the items inside it will be restored whenever you log back into your account.</p>
<div class="buttons">
<div class="pull-right"><button class="button" onclick="window.location.href='http://smartbook4.demo.towerthemes.com/index.php?route=common/home'"><span>Continue</span></button></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="opc-hidden">
<input type="hidden" id="input-opc-status" value="1" />
</div>
</div>
</div>
<div class="row sub-row">
<div class="sub-col col-sm-12 col-md-3">
</div>
<div class="sub-col col-sm-12 col-md-9">
<div class="banner7">
<div class= "oc-banner7-container">
<div class="flexslider oc-nivoslider">
<div class="oc-loading"></div>

	@foreach ($banners as $banner)
	

<div id="oc-inivoslider1" class="nivoSlider">
	<a  href="#">
	<img style="display: none;" src="{{ asset($banner->banner_img) }}" alt="" title="#banner7-caption2"  />
	</a>				
</div>										
					
					<div id="banner7-caption2" class="banner7-caption nivo-html-caption nivo-caption move-slides-effect" data-class="slide-movetype2">
		<div class="timeloading"></div>
		<div class=" banner7-content slider-2">
			
				<div class="text-content">							
														<div>
							<p class="title1">{{ $banner->banner_name }}</p>
						</div>
																			
														<div>
							<p class="sub-title">{{ $banner->banner_title }}</p>
						</div>
												
					<div class="banner7-des">
						<p>{{ $banner->banner_content }}</p>
					</div>
														<div class="banner7-readmore">
							<a class="link-more" href="{{ $banner->banner_link }}">İndi al</a>
						</div>
												</div>
		</div>
	</div>
			
	@endforeach																
					
					
			<script >
	$(window).load(function() {
		$('#oc-inivoslider1').nivoSlider({
			effect:    "random"  ,
			slices: 15,
			boxCols: 8,
			boxRows: 4,
			manualAdvance:  false  ,
			animSpeed: 500,
			pauseTime:   5000  ,
			startSlide: 0,
			controlNav:   true  ,
			directionNav:     false   ,
			controlNavThumbs: false,
			pauseOnHover:   true  ,
			prevText: '<i class="ion-ios-arrow-left"></i>',
			nextText: '<i class="ion-ios-arrow-right"></i>',
			afterLoad: function(){
				$('.oc-loading').css("display","none");
				$('.timeloading').css('animation-duration'," 5000ms ");
			},						
		});
	});
</script>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="main-row ">
<div class="container">
<div class="row">
<div class="main-col col-sm-12 col-md-12">
<div class="row sub-row">
<div class="sub-col col-sm-12 col-md-12">																																																															<div class="policy-block">
<div class="inner">
<div class="col ">
<div class="box">


@foreach ($features as $feature)


<div class="text">
	<h4>{{ $feature->feature_title1 }}</h4>
	<p>{{ $feature->feature_content1 }}</p>
</div>
</div>
</div>
<div class="col ">
<div class="box">



<div class="text">
	<h4>{{ $feature->feature_title2 }}</h4>
	<p>{{ $feature->feature_content2 }}</p>
</div>
</div>
</div>
<div class="col ">
<div class="box">

<div class="text">
	<h4>{{ $feature->feature_title3 }}</h4>
	<p>{{ $feature->feature_content3 }}</p>
</div>
</div>
</div>
<div class="col ">
<div class="box">

<div class="text">
	<h4>{{ $feature->feature_title4 }}</h4>
	<p>{{ $feature->feature_content4 }}</p>
</div>
</div>
</div>
</div>
</div>		
@endforeach																																													  <div class="banner-static static-top-smartbooks3">
<div class="container-inner">
<div class="col col-top-1">
<div class="image"><a href="index.php?route=product/category&amp;path=124"><img src="image/catalog/cmsblock/img1-top-smartbooks3.jpg" alt="image"></a></div>
</div>
<div class="col col-top-2">
<div class="image image1"><a href="index.php?route=product/category&amp;path=451"><img src="image/catalog/cmsblock/img2-top-smartbooks3.jpg" alt="image"></a></div>
<div class="image image2"><a href="index.php?route=product/category&amp;path=456"><img src="image/catalog/cmsblock/img3-top-smartbooks3.jpg" alt="image"></a></div>
<div class="image image3"><a href="index.php?route=product/category&amp;path=446"><img src="image/catalog/cmsblock/img4-top-smartbooks3.jpg" alt="image"></a></div>
<div class="image image4"><a href="index.php?route=product/category&amp;path=309"><img src="image/catalog/cmsblock/img5-top-smartbooks3.jpg" alt="image"></a></div>
</div>
</div>
<div class="clearfix"></div>  
</div> 									 									 									
</div>
</div>												
</div>
</div>
</div>
</div>
<div class="main-row ">
<div class="container">
<div class="row">
<div class="main-col col-sm-12 col-md-12">
<div class="row sub-row">
<div class="sub-col col-sm-12 col-md-3">
<div class="tt_product_module multi-rows list-module2" id="product_module703">
<div class="module-title">

	  <h2>Best Sellers</h2>
		  
</div>
<div class="box-style">
<div class="col-product">	
<div class="owl-container">
<div class="tt-product  owl-carousel owl-theme ">
<div class="row_items  odd">

	{{-- SOL TEREF BEST SELLER YERI --}}

<div class="product-layout list-style">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="image images-container">
						<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=56" class="product-image">
							<img src="http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/11-600x600.jpg" alt="Koss KPH7 Lightweight  Portable Headphone" title="Koss KPH7 Lightweight  Portable Headphone" class="img-responsive" />
						</a>				  
						<div class="box-label">
						</div>	
					</div>
					<div class="caption">
						<div class="inner">
							<p class="manufacture-product">
								<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
							</p>
								<h4 class="product-name"><a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=56">Koss KPH7 Lightweight  Portable Headphone</a></h4> 
							<div class="ratings">
								<div class="rating-box">
								<div class="rating2">rating</div>																																																																																						</div>
							</div>												
								<div class="price-box">
								<label>Price:</label>
									<p class="special-price"><span class="price">$70.00</span></p>
									<p class="old-price"><span class="price">$75.00</span></p>						  
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>


</div>				
</div>
</div>
</div>
</div>

<div class="clearfix"></div>
</div>
<script >
var product_owlCarousel = $("#product_module703 .tt-product");
product_owlCarousel.owlCarousel({
	loop:  false ,
	margin:  0 ,
	nav:  false ,
	dots:  true ,
	autoplay:   false ,
	autoplayTimeout:  1000 ,
	autoplayHoverPause: true,
	autoplaySpeed:  1000 ,
	navSpeed:  1000 ,
	dotsSpeed:  1000 ,
	lazyLoad: true,
	responsive:{
		0:{
			items: 1,
			nav: false
		},
		480:{
			items: 2,
			nav: false
		},
		768:{
			items: 2
		},
		992:{
			items: 1
		},
		1200:{
			items: 1
		},
		1600:{
			items: 1
		}
	},
	onInitialized: function() {
		owlAction();
		var i = 0;
		$('.owl-dots > .owl-dot').each(function() {
			$(this).addClass('clk-' + i);
			i++;
		});
	},
	onTranslated: function() {
		owlAction();
		
	}
});
function owlAction() {
	$("#product_module703 .tt-product .owl-item").removeClass('first');
	$("#product_module703 .tt-product .owl-item").removeClass('last');
	$("#product_module703 .tt-product .owl-item").removeClass('before-active');
	$("#product_module703 .tt-product .owl-item.active:first").addClass('first');
	$("#product_module703 .tt-product .owl-item.active:last").addClass('last');
	$('#product_module703 .tt-product .owl-item.active:first').prev().addClass('before-active');
}
</script>
<script>


$(".swiper-container-pimg-56").swiper({
spaceBetween: 0,
nextButton: '.pimg-button-next-56',
prevButton: '.pimg-button-prev-56',
speed: 300,
slidesPerView: 3,
slidesPerColumn: 1,
autoplay: false,
simulateTouch: false,
loop: false,
breakpoints: {
479: {
  slidesPerView: 3
},
767: {
  slidesPerView: 4
},
991: {
  slidesPerView: 4
  
},
1199: {
  slidesPerView: 3
  
}
}
});



$(".swiper-container-pimg-56 .img-slide").on('click', function() {
var img = $(this).data('img');
$('.img-main-56').attr('src', img);

$(".swiper-container-pimg-56 .img-slide").removeClass('active');
$(this).addClass('active');
});
$(".swiper-container-pimg-54").swiper({
spaceBetween: 0,
nextButton: '.pimg-button-next-54',
prevButton: '.pimg-button-prev-54',
speed: 300,
slidesPerView: 3,
slidesPerColumn: 1,
autoplay: false,
simulateTouch: false,
loop: false,
breakpoints: {
479: {
  slidesPerView: 3
},
767: {
  slidesPerView: 4
},
991: {
  slidesPerView: 4
  
},
1199: {
  slidesPerView: 3
  
}
}
});



$(".swiper-container-pimg-54 .img-slide").on('click', function() {
var img = $(this).data('img');
$('.img-main-54').attr('src', img);

$(".swiper-container-pimg-54 .img-slide").removeClass('active');
$(this).addClass('active');
});
$(".swiper-container-pimg-51").swiper({
spaceBetween: 0,
nextButton: '.pimg-button-next-51',
prevButton: '.pimg-button-prev-51',
speed: 300,
slidesPerView: 3,
slidesPerColumn: 1,
autoplay: false,
simulateTouch: false,
loop: false,
breakpoints: {
479: {
  slidesPerView: 3
},
767: {
  slidesPerView: 4
},
991: {
  slidesPerView: 4
  
},
1199: {
  slidesPerView: 3
  
}
}
});



$(".swiper-container-pimg-51 .img-slide").on('click', function() {
var img = $(this).data('img');
$('.img-main-51').attr('src', img);

$(".swiper-container-pimg-51 .img-slide").removeClass('active');
$(this).addClass('active');
});
$(".swiper-container-pimg-138").swiper({
spaceBetween: 0,
nextButton: '.pimg-button-next-138',
prevButton: '.pimg-button-prev-138',
speed: 300,
slidesPerView: 3,
slidesPerColumn: 1,
autoplay: false,
simulateTouch: false,
loop: false,
breakpoints: {
479: {
  slidesPerView: 3
},
767: {
  slidesPerView: 4
},
991: {
  slidesPerView: 4
  
},
1199: {
  slidesPerView: 3
  
}
}
});



$(".swiper-container-pimg-138 .img-slide").on('click', function() {
var img = $(this).data('img');
$('.img-main-138').attr('src', img);

$(".swiper-container-pimg-138 .img-slide").removeClass('active');
$(this).addClass('active');
});
$(".swiper-container-pimg-53").swiper({
spaceBetween: 0,
nextButton: '.pimg-button-next-53',
prevButton: '.pimg-button-prev-53',
speed: 300,
slidesPerView: 3,
slidesPerColumn: 1,
autoplay: false,
simulateTouch: false,
loop: false,
breakpoints: {
479: {
  slidesPerView: 3
},
767: {
  slidesPerView: 4
},
991: {
  slidesPerView: 4
  
},
1199: {
  slidesPerView: 3
  
}
}
});



$(".swiper-container-pimg-53 .img-slide").on('click', function() {
var img = $(this).data('img');
$('.img-main-53').attr('src', img);

$(".swiper-container-pimg-53 .img-slide").removeClass('active');
$(this).addClass('active');
});
$(".swiper-container-pimg-52").swiper({
spaceBetween: 0,
nextButton: '.pimg-button-next-52',
prevButton: '.pimg-button-prev-52',
speed: 300,
slidesPerView: 3,
slidesPerColumn: 1,
autoplay: false,
simulateTouch: false,
loop: false,
breakpoints: {
479: {
  slidesPerView: 3
},
767: {
  slidesPerView: 4
},
991: {
  slidesPerView: 4
  
},
1199: {
  slidesPerView: 3
  
}
}
});



$(".swiper-container-pimg-52 .img-slide").on('click', function() {
var img = $(this).data('img');
$('.img-main-52').attr('src', img);

$(".swiper-container-pimg-52 .img-slide").removeClass('active');
$(this).addClass('active');
});
$(".swiper-container-pimg-57").swiper({
spaceBetween: 0,
nextButton: '.pimg-button-next-57',
prevButton: '.pimg-button-prev-57',
speed: 300,
slidesPerView: 3,
slidesPerColumn: 1,
autoplay: false,
simulateTouch: false,
loop: false,
breakpoints: {
479: {
  slidesPerView: 3
},
767: {
  slidesPerView: 4
},
991: {
  slidesPerView: 4
  
},
1199: {
  slidesPerView: 3
  
}
}
});



$(".swiper-container-pimg-57 .img-slide").on('click', function() {
var img = $(this).data('img');
$('.img-main-57').attr('src', img);

$(".swiper-container-pimg-57 .img-slide").removeClass('active');
$(this).addClass('active');
});
$(".swiper-container-pimg-59").swiper({
spaceBetween: 0,
nextButton: '.pimg-button-next-59',
prevButton: '.pimg-button-prev-59',
speed: 300,
slidesPerView: 3,
slidesPerColumn: 1,
autoplay: false,
simulateTouch: false,
loop: false,
breakpoints: {
479: {
  slidesPerView: 3
},
767: {
  slidesPerView: 4
},
991: {
  slidesPerView: 4
  
},
1199: {
  slidesPerView: 3
  
}
}
});



$(".swiper-container-pimg-59 .img-slide").on('click', function() {
var img = $(this).data('img');
$('.img-main-59').attr('src', img);

$(".swiper-container-pimg-59 .img-slide").removeClass('active');
$(this).addClass('active');
});
$(".swiper-container-pimg-62").swiper({
spaceBetween: 0,
nextButton: '.pimg-button-next-62',
prevButton: '.pimg-button-prev-62',
speed: 300,
slidesPerView: 3,
slidesPerColumn: 1,
autoplay: false,
simulateTouch: false,
loop: false,
breakpoints: {
479: {
  slidesPerView: 3
},
767: {
  slidesPerView: 4
},
991: {
  slidesPerView: 4
  
},
1199: {
  slidesPerView: 3
  
}
}
});



$(".swiper-container-pimg-62 .img-slide").on('click', function() {
var img = $(this).data('img');
$('.img-main-62').attr('src', img);

$(".swiper-container-pimg-62 .img-slide").removeClass('active');
$(this).addClass('active');
});
$(".swiper-container-pimg-55").swiper({
spaceBetween: 0,
nextButton: '.pimg-button-next-55',
prevButton: '.pimg-button-prev-55',
speed: 300,
slidesPerView: 3,
slidesPerColumn: 1,
autoplay: false,
simulateTouch: false,
loop: false,
breakpoints: {
479: {
  slidesPerView: 3
},
767: {
  slidesPerView: 4
},
991: {
  slidesPerView: 4
  
},
1199: {
  slidesPerView: 3
  
}
}
});



$(".swiper-container-pimg-55 .img-slide").on('click', function() {
var img = $(this).data('img');
$('.img-main-55').attr('src', img);

$(".swiper-container-pimg-55 .img-slide").removeClass('active');
$(this).addClass('active');
});
$(".swiper-container-pimg-61").swiper({
spaceBetween: 0,
nextButton: '.pimg-button-next-61',
prevButton: '.pimg-button-prev-61',
speed: 300,
slidesPerView: 3,
slidesPerColumn: 1,
autoplay: false,
simulateTouch: false,
loop: false,
breakpoints: {
479: {
  slidesPerView: 3
},
767: {
  slidesPerView: 4
},
991: {
  slidesPerView: 4
  
},
1199: {
  slidesPerView: 3
  
}
}
});



$(".swiper-container-pimg-61 .img-slide").on('click', function() {
var img = $(this).data('img');
$('.img-main-61').attr('src', img);

$(".swiper-container-pimg-61 .img-slide").removeClass('active');
$(this).addClass('active');
});
$(".swiper-container-pimg-60").swiper({
spaceBetween: 0,
nextButton: '.pimg-button-next-60',
prevButton: '.pimg-button-prev-60',
speed: 300,
slidesPerView: 3,
slidesPerColumn: 1,
autoplay: false,
simulateTouch: false,
loop: false,
breakpoints: {
479: {
  slidesPerView: 3
},
767: {
  slidesPerView: 4
},
991: {
  slidesPerView: 4
  
},
1199: {
  slidesPerView: 3
  
}
}
});



$(".swiper-container-pimg-60 .img-slide").on('click', function() {
var img = $(this).data('img');
$('.img-main-60').attr('src', img);

$(".swiper-container-pimg-60 .img-slide").removeClass('active');
$(this).addClass('active');
});
</script>
																												  <div class="banner-static static-middle-smartbooks4">
<div class="image">
<a href="index.php?route=product/special"><img src="image/catalog/cmsblock/img-middle-smartbooks4.jpg" alt="img-middle-smartbooks4"></a>
</div>
</div> 									
<script >
var product_owlCarousel = $("#product_module817 .tt-product");
product_owlCarousel.owlCarousel({
	loop:  false ,
	margin:  0 ,
	nav:  false ,
	dots:  true ,
	autoplay:   false ,
	autoplayTimeout:  1000 ,
	autoplayHoverPause: true,
	autoplaySpeed:  1000 ,
	navSpeed:  1000 ,
	dotsSpeed:  1000 ,
	lazyLoad: true,
	responsive:{
		0:{
			items: 1,
			nav: false
		},
		480:{
			items: 2,
			nav: false
		},
		768:{
			items: 2
		},
		992:{
			items: 1
		},
		1200:{
			items: 1
		},
		1600:{
			items: 1
		}
	},
	onInitialized: function() {
		owlAction();
		var i = 0;
		$('.owl-dots > .owl-dot').each(function() {
			$(this).addClass('clk-' + i);
			i++;
		});
	},
	onTranslated: function() {
		owlAction();
		
	}
});
function owlAction() {
	$("#product_module817 .tt-product .owl-item").removeClass('first');
	$("#product_module817 .tt-product .owl-item").removeClass('last');
	$("#product_module817 .tt-product .owl-item").removeClass('before-active');
	$("#product_module817 .tt-product .owl-item.active:first").addClass('first');
	$("#product_module817 .tt-product .owl-item.active:last").addClass('last');
	$('#product_module817 .tt-product .owl-item.active:first').prev().addClass('before-active');
}
</script>
<script>


$(".swiper-container-pimg-52").swiper({
spaceBetween: 0,
nextButton: '.pimg-button-next-52',
prevButton: '.pimg-button-prev-52',
speed: 300,
slidesPerView: 3,
slidesPerColumn: 1,
autoplay: false,
simulateTouch: false,
loop: false,
breakpoints: {
479: {
  slidesPerView: 3
},
767: {
  slidesPerView: 4
},
991: {
  slidesPerView: 4
  
},
1199: {
  slidesPerView: 3
  
}
}
});



$(".swiper-container-pimg-52 .img-slide").on('click', function() {
var img = $(this).data('img');
$('.img-main-52').attr('src', img);

$(".swiper-container-pimg-52 .img-slide").removeClass('active');
$(this).addClass('active');
});
$(".swiper-container-pimg-53").swiper({
spaceBetween: 0,
nextButton: '.pimg-button-next-53',
prevButton: '.pimg-button-prev-53',
speed: 300,
slidesPerView: 3,
slidesPerColumn: 1,
autoplay: false,
simulateTouch: false,
loop: false,
breakpoints: {
479: {
  slidesPerView: 3
},
767: {
  slidesPerView: 4
},
991: {
  slidesPerView: 4
  
},
1199: {
  slidesPerView: 3
  
}
}
});



$(".swiper-container-pimg-53 .img-slide").on('click', function() {
var img = $(this).data('img');
$('.img-main-53').attr('src', img);

$(".swiper-container-pimg-53 .img-slide").removeClass('active');
$(this).addClass('active');
});
$(".swiper-container-pimg-54").swiper({
spaceBetween: 0,
nextButton: '.pimg-button-next-54',
prevButton: '.pimg-button-prev-54',
speed: 300,
slidesPerView: 3,
slidesPerColumn: 1,
autoplay: false,
simulateTouch: false,
loop: false,
breakpoints: {
479: {
  slidesPerView: 3
},
767: {
  slidesPerView: 4
},
991: {
  slidesPerView: 4
  
},
1199: {
  slidesPerView: 3
  
}
}
});



$(".swiper-container-pimg-54 .img-slide").on('click', function() {
var img = $(this).data('img');
$('.img-main-54').attr('src', img);

$(".swiper-container-pimg-54 .img-slide").removeClass('active');
$(this).addClass('active');
});
$(".swiper-container-pimg-56").swiper({
spaceBetween: 0,
nextButton: '.pimg-button-next-56',
prevButton: '.pimg-button-prev-56',
speed: 300,
slidesPerView: 3,
slidesPerColumn: 1,
autoplay: false,
simulateTouch: false,
loop: false,
breakpoints: {
479: {
  slidesPerView: 3
},
767: {
  slidesPerView: 4
},
991: {
  slidesPerView: 4
  
},
1199: {
  slidesPerView: 3
  
}
}
});



$(".swiper-container-pimg-56 .img-slide").on('click', function() {
var img = $(this).data('img');
$('.img-main-56').attr('src', img);

$(".swiper-container-pimg-56 .img-slide").removeClass('active');
$(this).addClass('active');
});
$(".swiper-container-pimg-140").swiper({
spaceBetween: 0,
nextButton: '.pimg-button-next-140',
prevButton: '.pimg-button-prev-140',
speed: 300,
slidesPerView: 3,
slidesPerColumn: 1,
autoplay: false,
simulateTouch: false,
loop: false,
breakpoints: {
479: {
  slidesPerView: 3
},
767: {
  slidesPerView: 4
},
991: {
  slidesPerView: 4
  
},
1199: {
  slidesPerView: 3
  
}
}
});



$(".swiper-container-pimg-140 .img-slide").on('click', function() {
var img = $(this).data('img');
$('.img-main-140').attr('src', img);

$(".swiper-container-pimg-140 .img-slide").removeClass('active');
$(this).addClass('active');
});
</script>				
<script >
$(document).ready(function() {
$("#slides").owlCarousel({
autoPlay :  1 ,

loop: false,
margin: 0,
navSpeed : 1000,
dotsSpeed : 1000,
autoplaySpeed : 1000,
nav :  false ,
dots : true ,
lazyLoad: true,
navText : ['<i class="ion-ios-arrow-left"></i>','<i class="ion-ios-arrow-right"></i>'],
responsive:{
0:{
	items: 1
},
480:{
	items: 1
},
640:{
	items: 2
},
992:{
	items: 1
},
1200:{
	items : 1
}
}
});
});
</script>

<div class="testimonial-container">
	<div class="module-title">
		<h2>
			Müştəri Rəyləri
		</h2>
	</div>				
	<div class="block-content">
		<div class="owl-container">
		<div id="slides" class="owl-carousel owl-theme owl-loaded owl-drag">								
											<div class="owl-stage-outer">
												<div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2400px;">
													
													@foreach ($reviews as $review)
													
													<div class="owl-item active" style="width: 300px;">
														<div class="row_items">
														<div class="testimonial-content">
										<div class="item">
									<div class="item-inner">
						<div class="testimonial-caption">
															<div class="testimonial-box">																							
								<a href="{{ route('BooksProduct',$review->ReviewBooks($review->books_id)->slug) }}">{{ $review->review }}</a>
							</div>
							<p class="testimonial-author">{{ $review->name }}</p>
						</div>
					</div>
					</div>
				</div><!--testimonial-content-->
										</div>
									</div>

										@endforeach
										
									</div></div></div>
		</div>
	</div><!--block-content-->



</div>


<script>
	$(document).ready(function() {
		$("#slides").owlCarousel({
			autoPlay :  1 ,
				
			loop: false,
			margin: 0,
			navSpeed : 1000,
			dotsSpeed : 1000,
			autoplaySpeed : 1000,
			nav :  false ,
			dots : true ,
			lazyLoad: true,
			navText : ['<i class="ion-ios-arrow-left"></i>','<i class="ion-ios-arrow-right"></i>'],
			responsive:{
				0:{
					items: 1
				},
				480:{
					items: 1
				},
				640:{
					items: 2
				},
				992:{
					items: 1
				},
				1200:{
					items : 1
				}
			}
		});
	});
	</script>
																								</div>
												<div class="sub-col col-sm-12 col-md-9">
																											<div class="tt_tabsproduct_module multi-rows product-tabs-container-slider" id="product_module610">
<div class="module-title">
	
	  <h2>Product Tabs</h2>
						<div class="box-tab">	
	<ul class="tab-heading tabs-categorys">
											<li>
			<a data-toggle="pill" href="#tab-6100">
				<span>Yeni Məhsullar</span>
			</a>
		</li>
											  <li>
			<a data-toggle="pill" href="#tab-6101">
				<span>Çox Satılan Məhsullar</span>
			</a>
		</li>
											  <li>
			<a data-toggle="pill" href="#tab-6102">
				<span>Yüksək Qiymətləndirilən Məhsullar</span>
			</a>
		</li>
										  </ul>
</div>
<div class="clearfix"></div>

</div>



	  <div class="box-style">
		<div class="col-product">
<div class="owl-container">
<div class="tt-product ">
<div class="tab-content">


	{{-- Birinci Təbəqə --}}
						
	<div class="tab-container-610  owl-carousel owl-theme  tab-pane tab-product-container  fade " id="tab-6100">		

		@foreach ($books as $book)

  <div class="row_items">		
	<div class="product-layout grid-style ">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="caption-top">
						<p class="manufacture-product">
							<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=7">{{ $book->Writers($book->writer_id)->writer_name }}</a>
						</p>
						<h4 class="product-name"><a href="{{ route('BooksProduct',$book->slug) }}">{{ $book->books_name }}</a></h4>
					</div>
					<div class="box-border">
						<div class="image images-container">
							<a href="{{ route('BooksProduct',$book->slug) }}" class="product-image">
							<img src="{{ asset($book->books_img) }}" alt="{{ $book->books_name }}" title="{{ $book->books_name }}" class="img-responsive " />
							</a>
							<div class="box-label">	
							</div>											
							<form action="{{ route('ShopCartAdd',$book->id) }}" method="POST">
								@csrf
								<div class="action-links">
								<input type="hidden" name="quantity" value="1" />
								<button type="submit" class="button btn-cart" title="Səbətə Əlavə Et"><span>Səbətə Əlavə Et</span></button>												
								<button class="button btn-wishlist" type="button"  title="Add to Wish List" onclick="wishlist.add('52');"><span>Add to Wish List</span></button>																																	
							</div>	
							</form>															
						</div><!-- image -->
						<div class="caption">
							<div class="inner">
								<div class="ratings">
									<div class="rating-box">
									<div class="rating0">rating</div>																																																																																																																																																	</div>
								</div>	
								<div class="price-box">
									<label>Price:</label>
										<p class="special-price"><span class="price">{{ $book->price }}</span></p>
										<p class="old-price"><span class="price">{{ $book->old_price }}</span></p>						  
								</div>
								<div class="label-product label_sale"><span>-{{ $book->price_cut }}% </span></div>																																														
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>  

@endforeach

</div>
			{{-- İkinci təbəqə --}}

		<div class="tab-container-610  owl-carousel owl-theme  tab-pane tab-product-container  fade " id="tab-6101">		
	
							<!-- Grid -->
						
			@foreach ($best_sellings as $item)
				
	
			<div class="row_items ">
								
	<div class="product-layout grid-style ">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="caption-top">
															<p class="manufacture-product">
							<a href="">{{ $item->Writers($item->writer_id)->writer_name }}</a>
						</p>
															<h4 class="product-name"><a href="{{ route('BooksProduct',$item->slug) }}">{{ $item->books_name }}</a></h4>
						
					</div>
					<div class="box-border">
						<div class="image images-container">
							<a href="{{ route('BooksProduct',$item->slug) }}" class="product-image">
																			<img src="{{ asset($item->books_img) }}" alt="{{ $item->books_name }}" title="{{ $item->books_name }}" class="img-responsive " />
							</a>
							<div class="box-label">	
																			
							
							</div>
																		
								<div class="action-links">
									<form action="{{ route('ShopCartAdd',$item->id) }}" method="POST">
										@csrf
										<div class="action-links">
										<input type="hidden" name="quantity" value="1" />
										<button type="submit" class="button btn-cart" title="Səbətə Əlavə Et"><span>Səbətə Əlavə Et</span></button>												
										<button class="button btn-wishlist" type="button"  title="Add to Wish List" onclick="wishlist.add('52');"><span>Add to Wish List</span></button>																																	
									</div>	
									</form>	
																																																
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
									<label>Price:</label>
																						<p class="regular-price"><span class="price">{{ $item->price }} AZN</span></p>
																																	</div>
																																																																											
							</div>
						</div><!-- caption -->
					</div>
				</div>
			</div>
		</div><!-- product-thumb -->
							</div><!-- product-layout -->
					</div>
					@endforeach
			</div>


			{{-- Üçüncü təbəqə --}}

			<div class="tab-container-610  owl-carousel owl-theme  tab-pane tab-product-container  fade " id="tab-6102">		
	
				<!-- Grid -->
			
@foreach ($best_sellings as $item)
	

<div class="row_items ">
					
<div class="product-layout grid-style ">
<div class="product-thumb transition">
<div class="item">
	<div class="item-inner">
		<div class="caption-top">
												<p class="manufacture-product">
				<a href="">{{ $item->Writers($item->writer_id)->writer_name }}</a>
			</p>
												<h4 class="product-name"><a href="{{ route('BooksProduct',$item->slug) }}">{{ $item->books_name }}</a></h4>
			
		</div>
		<div class="box-border">
			<div class="image images-container">
				<a href="{{ route('BooksProduct',$item->slug) }}" class="product-image">
																<img src="{{ asset($item->books_img) }}" alt="{{ $item->books_name }}" title="{{ $item->books_name }}" class="img-responsive " />
				</a>
				<div class="box-label">	
																
				
				</div>
															
					<div class="action-links">
						<form action="{{ route('ShopCartAdd',$item->id) }}" method="POST">
							@csrf
							<div class="action-links">
							<input type="hidden" name="quantity" value="1" />
							<button type="submit" class="button btn-cart" title="Səbətə Əlavə Et"><span>Səbətə Əlavə Et</span></button>												
							<button class="button btn-wishlist" type="button"  title="Add to Wish List" onclick="wishlist.add('52');"><span>Add to Wish List</span></button>																																	
						</div>	
						</form>	
																																													
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
						<label>Price:</label>
																			<p class="regular-price"><span class="price">{{ $item->price }} AZN</span></p>
																														</div>
																																																																								
				</div>
			</div><!-- caption -->
		</div>
	</div>
</div>
</div><!-- product-thumb -->
				</div><!-- product-layout -->
		</div>
		@endforeach
</div>
	
	
</div>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>

<script >
$(document).ready(function() {
$('a[href="#tab-6100"]').trigger( "click" );
$(".tab-container-610").owlCarousel({
items: 3,
loop:  false ,
margin:  0 ,
nav:  false ,
dots:  true ,
autoplay:   false ,
autoplayTimeout:  1000 ,
autoplayHoverPause: true,
autoplaySpeed:  1000 ,
navSpeed:  1000 ,
dotsSpeed:  1000 ,
lazyLoad: true,
responsive:{
0:{
	items: 1,
	nav: false
},
480:{
	items: 2,
	nav: false
},
768:{
	items: 2
},
992:{
	items: 2
},
1200:{
	items: 3
},
1600:{
	items: 3
}
},
onInitialized: function() {
var count = $(".tab-container-610 .owl-item.active").length;
if(count == 1) {
	$(".tab-container-610 .owl-item").removeClass('first');
	$(".tab-container-610 .owl-item.active").addClass('first');
} else {
	$(".tab-container-610 .owl-item").removeClass('first');
	$(".tab-container-610 .owl-item.active:first").addClass('first');
}
},
onTranslated: function() {
var count = $(".tab-container-610 .owl-item.active").length;
if(count == 1) {
	$(".tab-container-610 .owl-item").removeClass('first');
	$(".tab-container-610 .owl-item.active").addClass('first');
} else {
	$(".tab-container-610 .owl-item").removeClass('first');
	$(".tab-container-610 .owl-item.active:first").addClass('first');
}
}
});


});
</script>


																												  <div class="banner-static static-bottom-smartbooks4">
<div class="inner">
<div class="col">
<div class="image">
<a href="index.php?route=product/category&amp;path=20"><img src="image/catalog/cmsblock/img1-bottom-smartbooks4.jpg" alt="img1-bottom-smartbooks4"></a>
</div>
</div>
<div class="col">
<div class="image">
<a href="index.php?route=product/special"><img src="image/catalog/cmsblock/img2-bottom-smartbooks4.jpg" alt="img2-bottom-smartbooks4"></a>
</div>
</div>
</div>
</div> 									
																		<div class="tt_tabsproduct_module multi-rows tabs-category-slider" id="product_module811">
<div class="module-title">
	
	  <h2>Tabs Categories</h2>
						<div class="box-tab">	
	<ul class="tab-heading tabs-categorys">
											<li>
			<a data-toggle="pill" href="#tab-8110">
				<span>Bədii Ədəbiyyat</span>
			</a>
		</li>
											  <li>
			<a data-toggle="pill" href="#tab-8111">
				<span>Qeyri-Bədii Ədəbiyyat</span>
			</a>
		</li>
											  <li>
			<a data-toggle="pill" href="#tab-8112">
				<span>Uşaq Ədəbiyyatı</span>
			</a>
		</li>
										  </ul>
</div>
<div class="clearfix"></div>

</div>



	  <div class="box-style">
		<div class="col-product">
<div class="owl-container">
<div class="tt-product ">
<div class="tab-content">
  
						{{--agabala  --}}
	<div class="tab-container-811  owl-carousel owl-theme  tab-pane tab-product-container  fade " id="tab-8110">		
	
							<!-- Grid -->
							@foreach ($fictions as $fiction)
			<!-- List -->
			<div class="row_items ">
		<div class="product-layout list-style ">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="image images-container">
						<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=189" class="product-image">
						<img src="" alt="" title="" class="img-responsive" />
						</a>
						<div class="box-label">			
						</div>
					</div><!-- image -->
					<div class="caption">
						<div class="inner">
							<p class="manufacture-product">
							<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=10">{{ $fiction->Writers($fiction->writer_id)->writer_name }}</a>
							</p>
							<h4 class="product-name"><a href="">
								@foreach ($fiction->child(26) as $a)
									{{ $a->category_name }}
								@endforeach
							</a></h4> 
							<div class="ratings">
							<div class="rating-box">
							<div class="rating0">rating</div>																																																																																																																																								</div>
							</div>	
								<div class="price-box">
								<label>Price:</label>
								<p class="regular-price"><span class="price">$1,000.00</span></p>
							</div>	
						</div>
					</div><!-- caption -->
				</div>
			</div>
		</div><!-- product-thumb -->
							</div><!-- product-layout -->
					</div>	 
					@endforeach 
			</div>
	
		<div class="tab-container-811  owl-carousel owl-theme  tab-pane tab-product-container  fade " id="tab-8111">		
	
							<!-- Grid -->
			<!-- List -->
			<div class="row_items ">
							<div class="product-layout list-style ">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="image images-container">
						<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=143" class="product-image">
																	<img src="http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/14-600x600.jpg" alt="Nokia Steel HR Hybrid  Smartwatch" title="Nokia Steel HR Hybrid  Smartwatch" class="img-responsive" />
						</a>
						<div class="box-label">			
																	
							
						</div>
						
					</div><!-- image -->
					<div class="caption">
						<div class="inner">
																	<p class="manufacture-product">
								<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
							</p>
																	<h4 class="product-name"><a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=143">Nokia Steel HR Hybrid  Smartwatch</a></h4> 
							<div class="ratings">
								<div class="rating-box">
																																																																																																																																																															<div class="rating5">rating</div>
																															</div>
							</div>	
																												<div class="price-box">
								<label>Price:</label>
																				<p class="regular-price"><span class="price">$95.00</span></p>
																														</div>
																																									
							
																																				</div>
					</div><!-- caption -->
					
				</div>
			</div>
		</div><!-- product-thumb -->
							</div><!-- product-layout -->
								
					  <!-- Grid -->
			<!-- List -->
							<div class="product-layout list-style ">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="image images-container">
						<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=140" class="product-image">
																	<img src="http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/13-600x600.jpg" alt="Marshall Portable  Bluetooth Speaker" title="Marshall Portable  Bluetooth Speaker" class="img-responsive" />
						</a>
						<div class="box-label">			
																	
							
						</div>
						
					</div><!-- image -->
					<div class="caption">
						<div class="inner">
																	<p class="manufacture-product">
								<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
							</p>
																	<h4 class="product-name"><a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=140">Marshall Portable  Bluetooth Speaker</a></h4> 
							<div class="ratings">
								<div class="rating-box">
																																																																																																																																								<div class="rating4">rating</div>
																																																						</div>
							</div>	
																												<div class="price-box">
								<label>Price:</label>
																				<p class="special-price"><span class="price">$65.00</span></p>
									<p class="old-price"><span class="price">$70.00</span></p>						  
																														</div>
																																									
							
																																				</div>
					</div><!-- caption -->
					
				</div>
			</div>
		</div><!-- product-thumb -->
							</div><!-- product-layout -->
								
					  <!-- Grid -->
			<!-- List -->
							<div class="product-layout list-style ">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="image images-container">
						<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=139" class="product-image">
																	<img src="http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/9-600x600.jpg" alt="JBL Flip 3 Splashproof  Portable Bluetooth" title="JBL Flip 3 Splashproof  Portable Bluetooth" class="img-responsive" />
						</a>
						<div class="box-label">			
																	
							
						</div>
						
					</div><!-- image -->
					<div class="caption">
						<div class="inner">
																	<p class="manufacture-product">
								<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
							</p>
																	<h4 class="product-name"><a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=139">JBL Flip 3 Splashproof  Portable Bluetooth</a></h4> 
							<div class="ratings">
								<div class="rating-box">
																																																																																																																	<div class="rating3">rating</div>
																																																																													</div>
							</div>	
																												<div class="price-box">
								<label>Price:</label>
																				<p class="regular-price"><span class="price">$500.00</span></p>
																														</div>
																																									
							
																																				</div>
					</div><!-- caption -->
					
				</div>
			</div>
		</div><!-- product-thumb -->
							</div><!-- product-layout -->
					</div>
								
					  <!-- Grid -->
			<!-- List -->
			<div class="row_items ">
							<div class="product-layout list-style ">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="image images-container">
						<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=53" class="product-image">
																	<img src="http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/15-600x600.jpg" alt="Sony KD55X72 55-Inch  4k Ultra HD" title="Sony KD55X72 55-Inch  4k Ultra HD" class="img-responsive" />
						</a>
						<div class="box-label">			
																	
							
						</div>
						
					</div><!-- image -->
					<div class="caption">
						<div class="inner">
																	<p class="manufacture-product">
								<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=5">HTC</a>
							</p>
																	<h4 class="product-name"><a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=53">Sony KD55X72 55-Inch  4k Ultra HD</a></h4> 
							<div class="ratings">
								<div class="rating-box">
																																																																																																																	<div class="rating3">rating</div>
																																																																													</div>
							</div>	
																												<div class="price-box">
								<label>Price:</label>
																				<p class="special-price"><span class="price">$64.00</span></p>
									<p class="old-price"><span class="price">$65.00</span></p>						  
																														</div>
																																									
							
																																				</div>
					</div><!-- caption -->
					
				</div>
			</div>
		</div><!-- product-thumb -->
							</div><!-- product-layout -->
								
					  <!-- Grid -->
			<!-- List -->
							<div class="product-layout list-style ">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="image images-container">
						<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=54" class="product-image">
																	<img src="http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/12-600x600.jpg" alt="Koss Porta Pro On Ear  Headphones " title="Koss Porta Pro On Ear  Headphones " class="img-responsive" />
						</a>
						<div class="box-label">			
																	
							
						</div>
						
					</div><!-- image -->
					<div class="caption">
						<div class="inner">
																	<p class="manufacture-product">
								<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
							</p>
																	<h4 class="product-name"><a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=54">Koss Porta Pro On Ear  Headphones </a></h4> 
							<div class="ratings">
								<div class="rating-box">
																																																																																																																																																															<div class="rating5">rating</div>
																															</div>
							</div>	
																												<div class="price-box">
								<label>Price:</label>
																				<p class="special-price"><span class="price">$65.00</span></p>
									<p class="old-price"><span class="price">$70.00</span></p>						  
																														</div>
																																									
							
																																				</div>
					</div><!-- caption -->
					
				</div>
			</div>
		</div><!-- product-thumb -->
							</div><!-- product-layout -->
								
					  <!-- Grid -->
			<!-- List -->
							<div class="product-layout list-style ">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="image images-container">
						<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=56" class="product-image">
																	<img src="http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/11-600x600.jpg" alt="Koss KPH7 Lightweight  Portable Headphone" title="Koss KPH7 Lightweight  Portable Headphone" class="img-responsive" />
						</a>
						<div class="box-label">			
																	
							
						</div>
						
					</div><!-- image -->
					<div class="caption">
						<div class="inner">
																	<p class="manufacture-product">
								<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
							</p>
																	<h4 class="product-name"><a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=56">Koss KPH7 Lightweight  Portable Headphone</a></h4> 
							<div class="ratings">
								<div class="rating-box">
																																																																																										<div class="rating2">rating</div>
																																																																																																				</div>
							</div>	
																												<div class="price-box">
								<label>Price:</label>
																				<p class="special-price"><span class="price">$70.00</span></p>
									<p class="old-price"><span class="price">$75.00</span></p>						  
																														</div>
																																									
							
																																				</div>
					</div><!-- caption -->
					
				</div>
			</div>
		</div><!-- product-thumb -->
							</div><!-- product-layout -->
					</div>
								
					  <!-- Grid -->
			<!-- List -->
			<div class="row_items ">
							<div class="product-layout list-style ">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="image images-container">
						<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=60" class="product-image">
																	<img src="http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/10-600x600.jpg" alt="Kodak PIXPRO Astro Zoom AZ421 16 MP" title="Kodak PIXPRO Astro Zoom AZ421 16 MP" class="img-responsive" />
						</a>
						<div class="box-label">			
																	
							
						</div>
						
					</div><!-- image -->
					<div class="caption">
						<div class="inner">
																	<p class="manufacture-product">
								<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
							</p>
																	<h4 class="product-name"><a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=60">Kodak PIXPRO Astro Zoom AZ421 16 MP</a></h4> 
							<div class="ratings">
								<div class="rating-box">
																																																																																																																																								<div class="rating4">rating</div>
																																																						</div>
							</div>	
																												<div class="price-box">
								<label>Price:</label>
																				<p class="regular-price"><span class="price">$95.00</span></p>
																														</div>
																																									
							
																																				</div>
					</div><!-- caption -->
					
				</div>
			</div>
		</div><!-- product-thumb -->
							</div><!-- product-layout -->
								
					  <!-- Grid -->
			<!-- List -->
							<div class="product-layout list-style ">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="image images-container">
						<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=51" class="product-image">
																	<img src="http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/8-600x600.jpg" alt="Bose SoundLink Micro  Bluetooth Speaker" title="Bose SoundLink Micro  Bluetooth Speaker" class="img-responsive" />
						</a>
						<div class="box-label">			
																	
							
						</div>
						
					</div><!-- image -->
					<div class="caption">
						<div class="inner">
																	<p class="manufacture-product">
								<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=9">Canon</a>
							</p>
																	<h4 class="product-name"><a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=51">Bose SoundLink Micro  Bluetooth Speaker</a></h4> 
							<div class="ratings">
								<div class="rating-box">
																																																																																																																	<div class="rating3">rating</div>
																																																																													</div>
							</div>	
																												<div class="price-box">
								<label>Price:</label>
																				<p class="regular-price"><span class="price">$100.00</span></p>
																														</div>
																																									
							
																																				</div>
					</div><!-- caption -->
					
				</div>
			</div>
		</div><!-- product-thumb -->
							</div><!-- product-layout -->
								
					  <!-- Grid -->
			<!-- List -->
							<div class="product-layout list-style ">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="image images-container">
						<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=55" class="product-image">
																	<img src="http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/7-600x600.jpg" alt="Beats Solo3 Wireless  On-Ear Headphones" title="Beats Solo3 Wireless  On-Ear Headphones" class="img-responsive" />
						</a>
						<div class="box-label">			
																	
							
						</div>
						
					</div><!-- image -->
					<div class="caption">
						<div class="inner">
																	<p class="manufacture-product">
								<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=10">Sony</a>
							</p>
																	<h4 class="product-name"><a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=55">Beats Solo3 Wireless  On-Ear Headphones</a></h4> 
							<div class="ratings">
								<div class="rating-box">
																																																																																																																																								<div class="rating4">rating</div>
																																																						</div>
							</div>	
																												<div class="price-box">
								<label>Price:</label>
																				<p class="regular-price"><span class="price">$1,000.00</span></p>
																														</div>
																																									
							
																																				</div>
					</div><!-- caption -->
					
				</div>
			</div>
		</div><!-- product-thumb -->
							</div><!-- product-layout -->
					</div>
								
				  
			</div>
	
		<div class="tab-container-811  owl-carousel owl-theme  tab-pane tab-product-container  fade " id="tab-8112">		
	
							<!-- Grid -->
			<!-- List -->
			<div class="row_items ">
							<div class="product-layout list-style ">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="image images-container">
						<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=140" class="product-image">
																	<img src="http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/13-600x600.jpg" alt="Marshall Portable  Bluetooth Speaker" title="Marshall Portable  Bluetooth Speaker" class="img-responsive" />
						</a>
						<div class="box-label">			
																	
							
						</div>
						
					</div><!-- image -->
					<div class="caption">
						<div class="inner">
																	<p class="manufacture-product">
								<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
							</p>
																	<h4 class="product-name"><a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=140">Marshall Portable  Bluetooth Speaker</a></h4> 
							<div class="ratings">
								<div class="rating-box">
																																																																																																																																								<div class="rating4">rating</div>
																																																						</div>
							</div>	
																												<div class="price-box">
								<label>Price:</label>
																				<p class="special-price"><span class="price">$65.00</span></p>
									<p class="old-price"><span class="price">$70.00</span></p>						  
																														</div>
																																									
							
																																				</div>
					</div><!-- caption -->
					
				</div>
			</div>
		</div><!-- product-thumb -->
							</div><!-- product-layout -->
								
					  <!-- Grid -->
			<!-- List -->
							<div class="product-layout list-style ">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="image images-container">
						<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=139" class="product-image">
																	<img src="http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/9-600x600.jpg" alt="JBL Flip 3 Splashproof  Portable Bluetooth" title="JBL Flip 3 Splashproof  Portable Bluetooth" class="img-responsive" />
						</a>
						<div class="box-label">			
																	
							
						</div>
						
					</div><!-- image -->
					<div class="caption">
						<div class="inner">
																	<p class="manufacture-product">
								<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
							</p>
																	<h4 class="product-name"><a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=139">JBL Flip 3 Splashproof  Portable Bluetooth</a></h4> 
							<div class="ratings">
								<div class="rating-box">
																																																																																																																	<div class="rating3">rating</div>
																																																																													</div>
							</div>	
																												<div class="price-box">
								<label>Price:</label>
																				<p class="regular-price"><span class="price">$500.00</span></p>
																														</div>
																																									
							
																																				</div>
					</div><!-- caption -->
					
				</div>
			</div>
		</div>
							</div>
							<div class="product-layout list-style ">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="image images-container">
						<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=138" class="product-image">
																	<img src="http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/4-600x600.jpg" alt="Beats EP Wired On-Ear  Headphone-Black" title="Beats EP Wired On-Ear  Headphone-Black" class="img-responsive" />
						</a>
						<div class="box-label">			
						</div>
					</div>
					<div class="caption">
						<div class="inner">
																	<p class="manufacture-product">
								<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=9">Canon</a>
							</p>
																	<h4 class="product-name"><a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=138">Beats EP Wired On-Ear  Headphone-Black</a></h4> 
							<div class="ratings">
								<div class="rating-box">
																																																																																																																																								<div class="rating4">rating</div>
																																																						</div>
							</div>	
																												<div class="price-box">
								<label>Price:</label>
																<p class="regular-price"><span class="price">$100.00</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
					</div>
					</div>
			<div class="row_items ">
							<div class="product-layout list-style ">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="image images-container">
						<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=54" class="product-image">
																	<img src="http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/12-600x600.jpg" alt="Koss Porta Pro On Ear  Headphones " title="Koss Porta Pro On Ear  Headphones " class="img-responsive" />
						</a>
						<div class="box-label">
						</div>
					</div>
					<div class="caption">
						<div class="inner">
																	<p class="manufacture-product">
								<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
							</p>
																	<h4 class="product-name"><a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=54">Koss Porta Pro On Ear  Headphones </a></h4> 
							<div class="ratings">
								<div class="rating-box">
																																																																																																																																																															<div class="rating5">rating</div>
																															</div>
							</div>	
									<div class="price-box">
								<label>Price:</label>
																				<p class="special-price"><span class="price">$65.00</span></p>
						<p class="old-price"><span class="price">$70.00</span></p>						  
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
							</div>
							<div class="product-layout list-style ">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="image images-container">
						<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=56" class="product-image">
						<img src="http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/11-600x600.jpg" alt="Koss KPH7 Lightweight  Portable Headphone" title="Koss KPH7 Lightweight  Portable Headphone" class="img-responsive" />
						</a>
						<div class="box-label">			
						</div>
					</div>
					<div class="caption">
						<div class="inner">
																	<p class="manufacture-product">
								<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
							</p>
													<h4 class="product-name"><a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=56">Koss KPH7 Lightweight  Portable Headphone</a></h4> 
							<div class="ratings">
								<div class="rating-box">
								<div class="rating2">rating</div>																																																																																												</div>
							</div>	
								<div class="price-box">
								<label>Price:</label>
								<p class="special-price"><span class="price">$70.00</span></p>
								<p class="old-price"><span class="price">$75.00</span></p>						  
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
							</div>
							<div class="product-layout list-style ">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="image images-container">
						<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=60" class="product-image">
																	<img src="http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/10-600x600.jpg" alt="Kodak PIXPRO Astro Zoom AZ421 16 MP" title="Kodak PIXPRO Astro Zoom AZ421 16 MP" class="img-responsive" />
						</a>
						<div class="box-label">
						</div>
					</div>
					<div class="caption">
						<div class="inner">
																	<p class="manufacture-product">
								<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
							</p>
					<h4 class="product-name"><a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=60">Kodak PIXPRO Astro Zoom AZ421 16 MP</a></h4> 
							<div class="ratings">
								<div class="rating-box">																																						</div>
						</div>	
					<div class="price-box">
					<label>Price:</label>
						<p class="regular-price"><span class="price">$95.00</span></p>
					</div>
					</div>
					</div>
				</div>
			</div>
		</div>
							</div>
					</div>
			<div class="row_items ">
							<div class="product-layout list-style ">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="image images-container">
						<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=55" class="product-image">
						<img src="http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/7-600x600.jpg" alt="Beats Solo3 Wireless  On-Ear Headphones" title="Beats Solo3 Wireless  On-Ear Headphones" class="img-responsive" />
						</a>
						<div class="box-label">			
						</div>
					</div>
					<div class="caption">
						<div class="inner">
								<p class="manufacture-product">
								<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=10">Sony</a>
							</p>
							<h4 class="product-name"><a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=55">Beats Solo3 Wireless  On-Ear Headphones</a></h4> 
							<div class="ratings">
								<div class="rating-box">																																																																																																																																<div class="rating4">rating</div>
					</div>
					</div>	
					<div class="price-box">
					<label>Price:</label>
					<p class="regular-price"><span class="price">$1,000.00</span></p>
					</div>
					</div>
					</div>		
				</div>
			</div>
		</div>
							</div>
							<div class="product-layout list-style ">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="image images-container">
						<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=61" class="product-image">
																	<img src="http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/6-600x600.jpg" alt="Beats Solo2 Solo 2  Wired On-Ear Headphone" title="Beats Solo2 Solo 2  Wired On-Ear Headphone" class="img-responsive" />
						</a>
						<div class="box-label">
						</div>	
					</div>
					<div class="caption">
						<div class="inner">
																	<p class="manufacture-product">
								<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
							</p>
																	<h4 class="product-name"><a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=61">Beats Solo2 Solo 2  Wired On-Ear Headphone</a></h4> 
							<div class="ratings">
								<div class="rating-box">
						<div class="rating3">rating</div>																																																																			</div>
					</div>	
					<div class="price-box">
					<label>Price:</label>
					<p class="regular-price"><span class="price">$500.00</span></p>
					</div>					
					</div>
					</div>
				</div>
			</div>
		</div>
							</div>
							<div class="product-layout list-style ">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="image images-container">
						<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=59" class="product-image">
																	<img src="http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/3-600x600.jpg" alt="Apple iPhone SE 16GB  Factory Unlocked" title="Apple iPhone SE 16GB  Factory Unlocked" class="img-responsive" />
						</a>
						<div class="box-label">			
						</div>
					</div>
					<div class="caption">
						<div class="inner">
																	<p class="manufacture-product">
								<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
							</p>
																	<h4 class="product-name"><a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=59">Apple iPhone SE 16GB  Factory Unlocked</a></h4> 
					<div class="ratings">
					<div class="rating-box">
					<div class="rating3">rating</div>																																																																					</div>
					</div>	
					<div class="price-box">
					<label>Price:</label>
					<p class="regular-price"><span class="price">$85.00</span></p>
					</div>
					</div>
					</div>
				</div>
			</div>
		</div>
					</div>
					</div>
			<div class="row_items ">
							<div class="product-layout list-style ">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="image images-container">
						<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=52" class="product-image">
																	<img src="http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/2-600x600.jpg" alt="Apple iPad with Retina  Display MD510LL/A " title="Apple iPad with Retina  Display MD510LL/A " class="img-responsive" />
						</a>
						<div class="box-label">			
						</div>
					</div>
					<div class="caption">
						<div class="inner">
																	<p class="manufacture-product">
								<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=7">Hewlett-Packard</a>
							</p>
							<h4 class="product-name"><a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=52">Apple iPad with Retina  Display MD510LL/A </a></h4> 
							<div class="ratings">
								<div class="rating-box">
			<div class="rating0">rating</div>																																																																																																																																													</div>
			</div>	
			<div class="price-box">
						<label>Price:</label>
					<p class="special-price"><span class="price">$55.00</span></p>
					<p class="old-price"><span class="price">$60.00</span></p>						  
					</div>
					</div>
					</div>
				</div>
			</div>
		</div>
							</div>
							<div class="product-layout list-style ">
		<div class="product-thumb transition">
			<div class="item">
				<div class="item-inner">
					<div class="image images-container">
						<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=57" class="product-image">
								<img src="http://smartbook4.demo.towerthemes.com/image/cache/catalog/product/1-600x600.jpg" alt="Amazon Cloud Cam  Security Camera" title="Amazon Cloud Cam  Security Camera" class="img-responsive" />
						</a>
						<div class="box-label">			
						</div>
					</div>
					<div class="caption">
						<div class="inner">
					<p class="manufacture-product">
								<a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
							</p>
						<h4 class="product-name"><a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/product&amp;product_id=57">Amazon Cloud Cam  Security Camera</a></h4> 
							<div class="ratings">
		<div class="rating-box">
	<div class="rating4">rating</div>																																														</div>
							</div>	
				<div class="price-box">
		<label>Price:</label>
		<p class="regular-price"><span class="price">$80.00</span></p>
</div>
</div>
</div>	
</div>
</div>
</div>
</div>
</div>				 
</div>
</div>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>



<script >
$(document).ready(function() {
$('a[href="#tab-8110"]').trigger( "click" );
$(".tab-container-811").owlCarousel({
items: 3,
loop:  false ,
margin:  0 ,
nav:  false ,
dots:  true ,
autoplay:   false ,
autoplayTimeout:  1000 ,
autoplayHoverPause: true,
autoplaySpeed:  1000 ,
navSpeed:  1000 ,
dotsSpeed:  1000 ,
lazyLoad: true,
responsive:{
0:{
	items: 1,
	nav: false
},
480:{
	items: 2,
	nav: false
},
768:{
	items: 2
},
992:{
	items: 2
},
1200:{
	items: 3
},
1600:{
	items: 3
}
},
onInitialized: function() {
var count = $(".tab-container-811 .owl-item.active").length;
if(count == 1) {
	$(".tab-container-811 .owl-item").removeClass('first');
	$(".tab-container-811 .owl-item.active").addClass('first');
} else {
	$(".tab-container-811 .owl-item").removeClass('first');
	$(".tab-container-811 .owl-item.active:first").addClass('first');
}
},
onTranslated: function() {
var count = $(".tab-container-811 .owl-item.active").length;
if(count == 1) {
	$(".tab-container-811 .owl-item").removeClass('first');
	$(".tab-container-811 .owl-item.active").addClass('first');
} else {
	$(".tab-container-811 .owl-item").removeClass('first');
	$(".tab-container-811 .owl-item.active:first").addClass('first');
}
}
});
});
</script>
<div id="blog_home" class="menu-recent module-nav2">
<div>
<div class="blog-title module-title">
<h2>Son Bloqlar</h2>
</div>
		<div class="owl-container">
<div class="articles-container owl-carousel owl-theme">

	{{-- Bloq yeri --}}

	@foreach ($blogs as $blog)

		<div class="row_items">
			<div class="articles-inner ">
			<div class="articles-image">
				<a href="{{ route('BloqContent',$blog->slug) }}"><img src="{{ asset($blog->img) }}" alt="{{ $blog->title }}"/><span class="icon-view"></span></a>
			</div>	
			<div class="aritcles-content">
				<div class="content-inner">
					<div class="box-name">	
						<p class="date-time-post">
							<span class="date-post">{{ $blog->created_at->format('d') }}</span>
							<span class="month-post">{{ $blog->created_at->format('M') }}</span>
						</p>
						<a class="articles-name" href="{{ route('BloqContent',$blog->slug) }}">{{ $blog->title }}</a>
					</div>
					<p class="author-name">Yayımlayan <span>{{ $blog->author }}</span></p>
					<div class="articles-intro"><p>{!! Str::limit($blog->contents, 80, '...') !!}</p></div>								
					<a href="{{ route('BloqContent',$blog->slug) }}" class="read-more">Davamını oxu</a>	
				</div>
			</div>
		</div>
		</div>

		@endforeach

</div>
</div>
</div>
</div>
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
<script >
$(document).ready(function() {
$(".articles-container").owlCarousel({
autoPlay :  true ,
items : 1,
margin: 0,
loop: false,			
navSpeed : 1000,
dotsSpeed : 1000,
autoplaySpeed : 1000,
nav :  false ,
dots :  true ,

responsive:{
	0:{
		items: 1,
		nav: false
	},
	480:{
		items: 1,
		nav: false
	},
	768:{
		items: 1
	},
	992:{
		items: 1
	},
	1200:{
		items: 1
	}
}
});
});
</script>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection
<style>
	.url:hover {
		background-color: #fff !important;
	}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>