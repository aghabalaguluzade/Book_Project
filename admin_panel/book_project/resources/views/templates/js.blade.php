<!-- Use Minified Plugins Version For Fast Page Load -->
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/ajax-mail.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
<script>
    document.addEventListener( 'DOMContentLoaded', function() {
      var splide = new Splide( '.splide', {
        type         : 'loop',
  autoplay     : 'start',
  arrows       : 'slider',
  perPage      : 1,
  pauseOnHover : false,
  resetProgress: false,
      });
      splide.mount();
    });

  </script>