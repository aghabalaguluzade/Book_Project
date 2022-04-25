<footer>
	<div class="container">
	    <div class="brand-slider">
			
  <div id="banner0" class="swiper-container">
	<div class="swiper-wrapper">

		
			@foreach ($partners as $partner)
				<div class="swiper-slide">

					<img src="{{ asset($partner->img) }}" alt="{{ $partner->title }}" class="img-responsive" style="width:170px;height:58px;" />

				</div>
			@endforeach
		
	</div>
	</div>
</div>
<script ><!--
$('#banner0').swiper({
	slidesPerView: 6,
	spaceBetween: 30,
	autoplay: false,
	loop: false,
    autoplayDisableOnInteraction: false,
	// Responsive breakpoints
	breakpoints: {
		479: {
		  slidesPerView: 2
		},
		767: {
		  slidesPerView: 3
		},
		991: {
		  slidesPerView: 4
		  
		},
		1199: {
		  slidesPerView: 5
		  
		}
	}
});
--></script> 
  
			</div>
			
			@foreach ($settings as $setting)
			
	<div class="footer-top ">
	  <div class="container">
		<div class="container-inner">
		<div class="row">
			<div class="col1  col-md-3 col-sm-6 col-xs-12 col-footer">
									    										  										  										  										  										  										  										  										  										  										  										  										  										  <div class="footer-contact">

<div class="footer-content">
<a class="logo-footer" href="#"><img src="{{ asset($setting->logo) }}" alt="{{ $setting->seo_title }}"></a>

<ul class="list-unstyled text-content">
<li class="address"><p>Ünvan:</p><p>{{ $setting->contact_address }}</p></li>

<li class="phone"><p>Telefon:</p><p>{{ $setting->contact_phone }}</p></li>
<li class="email"><p>E-poçt:</p><p>{{ $setting->contact_email }}</p></li>
</ul>
</div> 		
</div>							 									 									 									 									 									 									 									 									 									 									 									 									 									
  
													
			</div>
			<div class="col2 col-md-3 col-sm-6 col-xs-12 col-footer">
				<div class="footer-title"><h5>İnformasiya</h5></div>
				<div class="footer-content">
					<ul class="list-unstyled text-content">
						<li><a href="">About Us</a></li>
					  	<li><a href="{{ route('contact') }}">Əlaqə</a></li>
					  	<li><a href="{{ route('faq') }}">Suallar</a></li>
					</ul>
				</div>
			  </div>
			  <div class="col3 col-md-3 col-sm-6 col-xs-12 col-footer">
				<div class="footer-title"><h5>Extras</h5></div>
				<div class="footer-content">
					<ul class="list-unstyled text-content">
						<li><a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/manufacturer">Brands</a></li>
						<li><a href="http://smartbook4.demo.towerthemes.com/index.php?route=account/voucher">Gift Certificates</a></li>
						<li><a href="http://smartbook4.demo.towerthemes.com/index.php?route=affiliate/login">Affiliate</a></li>
						<li><a href="http://smartbook4.demo.towerthemes.com/index.php?route=product/special">Specials</a></li>
						<li><a href="http://smartbook4.demo.towerthemes.com/index.php?route=account/return/add">Returns</a></li>
						<li><a href="http://smartbook4.demo.towerthemes.com/index.php?route=account/order">Order History</a></li>
						<li><a href="http://smartbook4.demo.towerthemes.com/index.php?route=account/wishlist">Wish List</a></li>
						
					</ul>
				</div>
			  </div>	
			  
			<div class="col4  col-md-3 col-sm-6 col-xs-12 col-footer">
									    <div class="newletter-subscribe-container">
<div class="container-inner">
<div class="newletter-subscribe">
	<div id="boxes-normal" class="newletter-container">
		<div style="" id="dialog-normal" >
			<div class="box">
				<div class="newletter-title">
					<h5>Newsletter Subscribe</h5>
					<p class="des">We’ll never share your email address with a third-party.</p>
				</div>
				<div class="box-content newleter-content">
					
					<div id="frm_subscribe-normal">
						<form name="subscribe" id="subscribe-normal">
							<input type="text" value="" name="subscribe_email" id="subscribe_email-normal" placeholder="Enter you email address here...">
							<input type="hidden" value="" name="subscribe_name" id="subscribe_name" />
							<a class="btn" onclick="email_subscribe()" title="Subscribe"><span>Subscribe</span></a>
							 
							<div id="notification-normal"></div>  
						</form>
						
					</div><!-- /#frm_subscribe -->
					
				</div><!-- /.box-content -->
			</div>
		</div>
<script >
function email_subscribe(){
	$.ajax({
		type: 'post',
		url: 'index.php?route=extension/module/newslettersubscribe/subscribe',
		dataType: 'html',
		data:$("#subscribe-normal").serialize(),
		success: function (html) {
			try {
				eval(html);
			} 
			catch (e) {
			}				
		}});
}
function email_unsubscribe(){
	$.ajax({
		type: 'post',
		url: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',
		dataType: 'html',
		data:$("#subscribe").serialize(),
		success: function (html) {
			try {
				eval(html);
			} catch (e) {
			}
		}}); 
	$('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow'); 
}
</script>
<script >
    $(document).ready(function() {
		$('#subscribe_email').keypress(function(e) {
            if(e.which == 13) {
                e.preventDefault();
                email_subscribe();
            }
			var name= $(this).val();
		  	$('#subscribe_name').val(name);
        });
		$('#subscribe_email').change(function() {
		 var name= $(this).val();
		  		$('#subscribe_name').val(name);
		});
    });
</script>
</div>
</div>
</div>
</div>
  
													    										  										  										  <div class="follow">
<label>Sosial Şəbəkələr</label>
<ul class="link-follow">
<li><a class="facebook ion-social-facebook" title="Facebook" href="{{ $setting->social_facebook }}"><span>Facebook</span></a></li>
<li><a class="twitter ion-social-twitter" title="Twitter" href="{{ $setting->social_twitter }}"><span>Twitter</span></a></li>
<li><a class="google ion-social-instagram-outline" title="İnstagram" href="{{ $setting->social_instagram }}"><span>İnstagram</span></a></li>
</ul>
</div> 									 									 									
  
								
			</div>
		</div>
		</div>
	  </div>
	</div>

	@endforeach

	<div class="footer-bottom ">
		<div class="container">
			<div class="container-inner">
									    										  										  										  <div class="payment">
<p>Suspendisse in auctor augue. Cras fermentum est ac fermentum tempor. Etiam vel magna volutpat, posuere eros</p>
<a href="#"><img src="image/catalog/cmsblock/payment.png" alt="payment"></a>
</div> 									 									 									
  
								<div class="footer-copyright">
					<p>Copyright &copy; {{ date("Y") }} <a href="/">Book House</a>. Bütün Hüquqlar Qorunur.<span>Design by Quluzadə Ağabala</span></p>
				</div>
			</div>
		</div>
	</div>
	<div id="back-top"><i class="ion-ios-arrow-up"></i></div>
</footer>
<script >
$(document).ready(function(){
	// hide #back-top first
	$("#back-top").hide();
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > $('body').height()/3) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#back-top').click(function () {
			$('body,html').animate({scrollTop: 0}, 800);
			return false;
		});
	});
});
</script>