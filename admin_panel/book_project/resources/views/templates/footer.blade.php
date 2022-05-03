<footer>
	<div class="container">
	    <div class="brand-slider">
			
  <div id="banner0" class="swiper-container">
	<div class="swiper-wrapper" style="height: 58px !important;">

		
			@foreach ($partners as $partner)
				<div class="swiper-slide" style="height: 58px !important">

					<a href="{{ $partner->url }}" target="_blank" rel="noopener noreferrer">
						<img src="{{ asset($partner->img) }}" alt="{{ $partner->title }}" class="img-responsive" style="width:170px;height:58px;" />
					</a>

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
<li class="address"><p>Ünvan:</p><strong><p>{{ $setting->contact_address }}</p></strong></li>

<li class="phone"><p>Telefon:</p><a href="tel:{{ $setting->contact_phone }}"><p>{{ $setting->contact_phone }}</p></a></li>
<li class="email"><p>E-poçt:</p><a href="mailto:{{ $setting->contact_email }}"><p>{{ $setting->contact_email }}</p></a></li>
</ul>
</div> 		
</div>							 									 									 									 									 									 									 									 									 									 									 									 									 									
  
													
			</div>
			<div class="col2 col-md-3 col-sm-6 col-xs-12 col-footer">
				<div class="footer-title"><h5>İnformasiya</h5></div>
				<div class="footer-content">
					<ul class="list-unstyled text-content">
						<li><a href="{{ route('AboutUs') }}">About Us</a></li>
					  	<li><a href="{{ route('contact') }}">Əlaqə</a></li>
					  	<li><a href="{{ route('faq') }}">Suallar</a></li>
					</ul>
				</div>
			  </div>
			  <div class="col3 col-md-3 col-sm-6 col-xs-12 col-footer">
				<div class="footer-title"><h5>ƏLAVƏLƏR</h5></div>
				<div class="footer-content">
					<ul class="list-unstyled text-content">
						<li><a href="{{ route('Bloq') }}">Bloq</a></li>
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
					<h5>XƏBƏRLƏRƏ ABUNƏ OLUN</h5>
				</div>
				<div class="box-content newleter-content">
					
 
					<div id="frm_subscribe-normal">
							<input type="email" name="subscribe_email" id="subscribe_email-normal" placeholder="E-poçtunuzu daxil edin..." />
							<button class="btn btn-outline-primary" style="width: 100%" onclick="email_subscribe()">Göndər</button>
							<div id="notification-normal"></div>
					</div><!-- /#frm_subscribe -->
					
				</div><!-- /.box-content -->
			</div>
		</div>
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
<a href="{{ route('AboutUs') }}"><p>{!! Str::limit($setting->about_us,144,'...') !!}</p></a>
<a href="#"><img src="image/catalog/cmsblock/payment.png" alt="payment"></a>
</div> 									 									 									
  
								<div class="footer-copyright">
					<p>Copyright &copy; {{ date("Y") }} <a href="{{ route('templates') }}">Book House</a>. Bütün Hüquqlar Qorunur.<span>Hazırladı Quluzadə Ağabala</span></p>
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
<script src="{{ asset('plugins/main/newsletter_subscribe.js') }}"></script>