    <script src="{{ asset('catalog/view/javascript/jquery/jquery-2.1.1.min.js') }}" ></script>
    <script src="{{ asset('catalog/view/javascript/jquery/owl-carousel/js/owl.carousel.min.js') }}" ></script>
    <script src="{{ asset('catalog/view/javascript/opentheme/countdown/jquery.plugin.min.js') }}" ></script>
    <script src="{{ asset('catalog/view/javascript/opentheme/countdown/jquery.countdown.min.js') }}" ></script>
    <script src="{{ asset('catalog/view/javascript/ocmegamenu/menu.js') }}" ></script>
    <script src="{{ asset('catalog/view/javascript/opentheme/ocslideshow/jquery.nivo.slider.js') }}" ></script>
    <script src="{{ asset('catalog/view/javascript/cloudzoom/cloud-zoom.1.0.2.min.js') }}" ></script>
    <script src="{{ asset('catalog/view/javascript/cloudzoom/zoom.js') }}" ></script>
    <script src="{{ asset('catalog/view/javascript/opentheme/jquery.bpopup.min.js') }}" ></script>
    <script src="{{ asset('catalog/view/javascript/opentheme/jquery.cookie.js') }}" ></script>
    <script src="{{ asset('catalog/view/javascript/opentheme/ocajaxlogin/ocajaxlogin.js') }}" ></script>
    <script src="{{ asset('catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js') }}" ></script>
    <script src="{{ asset('catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js') }}" ></script>
    <script src="{{ asset('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js') }}" ></script>
    <script src="{{ asset('catalog/view/javascript/jquery/swiper/js/swiper.jquery.js') }}" ></script>
    <script src="{{ asset('catalog/view/javascript/common.js') }}" ></script>
    <script src="{{ asset('catalog/view/javascript/bootstrap/js/bootstrap.min.js') }}" ></script>

<script>
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
  @yield('addjs')