<script>
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
      <script><!--
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
        <script><!--
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
        <script><!--
        $('.date').datetimepicker({
        language: document.cookie.match(new RegExp('language=([^;]+)')),
        pickTime: false
        });
        
        $('.time').datetimepicker({
        language: document.cookie.match(new RegExp('language=([^;]+)')),
        pickDate: false
        });
        
        $('.datetime').datetimepicker({
        language: document.cookie.match(new RegExp('language=([^;]+)')),
        pickDate: true,
        pickTime: true
        });
        //--></script>
        <script>
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
      <script>
        var product_owlCarousel = $("#product_module752 .tt-product");
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
            $("#product_module752 .tt-product .owl-item").removeClass('first');
            $("#product_module752 .tt-product .owl-item").removeClass('last');
            $("#product_module752 .tt-product .owl-item").removeClass('before-active');
            $("#product_module752 .tt-product .owl-item.active:first").addClass('first');
            $("#product_module752 .tt-product .owl-item.active:last").addClass('last');
            $('#product_module752 .tt-product .owl-item.active:first').prev().addClass('before-active');
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
         <script>
          $(document).ready(function () {
          $('#Countdown52-1').countdown({
          until: new Date(2024, 03-1, 30, 00, 00, 00),
          labels: ['years', 'months ', 'weeks', 'days', 'hours', 'mins', 'secs'],
          labels1: ['years', 'months ', 'weeks', 'days', 'hours', 'mins', 'secs'],
          });
          //$('#Countdown52-1').countdown('pause');
          });
          </script>
          <script>
            $(document).ready(function () {
            $('#Countdown53-2').countdown({
            until: new Date(2024, 06-1, 12, 00, 00, 00),
            labels: ['years', 'months ', 'weeks', 'days', 'hours', 'mins', 'secs'],
            labels1: ['years', 'months ', 'weeks', 'days', 'hours', 'mins', 'secs'],
            });
            //$('#Countdown53-2').countdown('pause');
            });
            </script>
            <script>
              $(document).ready(function () {
              $('#Countdown54-3').countdown({
              until: new Date(2024, 05-1, 08, 00, 00, 00),
              labels: ['years', 'months ', 'weeks', 'days', 'hours', 'mins', 'secs'],
              labels1: ['years', 'months ', 'weeks', 'days', 'hours', 'mins', 'secs'],
              });
              //$('#Countdown54-3').countdown('pause');
              });
              </script>
               <script>
                $(document).ready(function () {
                $('#Countdown56-4').countdown({
                until: new Date(2024, 05-1, 08, 00, 00, 00),
                labels: ['years', 'months ', 'weeks', 'days', 'hours', 'mins', 'secs'],
                labels1: ['years', 'months ', 'weeks', 'days', 'hours', 'mins', 'secs'],
                });
                //$('#Countdown56-4').countdown('pause');
                });
                </script>
                 <script>
                  $(document).ready(function () {
                  $('#Countdown140-5').countdown({
                  until: new Date(2024, 05-1, 08, 00, 00, 00),
                  labels: ['years', 'months ', 'weeks', 'days', 'hours', 'mins', 'secs'],
                  labels1: ['years', 'months ', 'weeks', 'days', 'hours', 'mins', 'secs'],
                  });
                  //$('#Countdown140-5').countdown('pause');
                  });
                  </script>
                  <script>
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
                      <script>
                        $(document).ready(function() {
                        $('a[href="#tab-8400"]').trigger( "click" );
                        $(".tab-container-840").owlCarousel({
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
                        var count = $(".tab-container-840 .owl-item.active").length;
                        if(count == 1) {
                            $(".tab-container-840 .owl-item").removeClass('first');
                            $(".tab-container-840 .owl-item.active").addClass('first');
                        } else {
                            $(".tab-container-840 .owl-item").removeClass('first');
                            $(".tab-container-840 .owl-item.active:first").addClass('first');
                        }
                        },
                        onTranslated: function() {
                        var count = $(".tab-container-840 .owl-item.active").length;
                        if(count == 1) {
                            $(".tab-container-840 .owl-item").removeClass('first');
                            $(".tab-container-840 .owl-item.active").addClass('first');
                        } else {
                            $(".tab-container-840 .owl-item").removeClass('first');
                            $(".tab-container-840 .owl-item.active:first").addClass('first');
                        }
                        }
                        });
                        
                        
                        });
                        </script>
                        <script>
                          $(document).ready(function() {
                          $('a[href="#tab-8050"]').trigger( "click" );
                          $(".tab-container-805").owlCarousel({
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
                          var count = $(".tab-container-805 .owl-item.active").length;
                          if(count == 1) {
                              $(".tab-container-805 .owl-item").removeClass('first');
                              $(".tab-container-805 .owl-item.active").addClass('first');
                          } else {
                              $(".tab-container-805 .owl-item").removeClass('first');
                              $(".tab-container-805 .owl-item.active:first").addClass('first');
                          }
                          },
                          onTranslated: function() {
                          var count = $(".tab-container-805 .owl-item.active").length;
                          if(count == 1) {
                              $(".tab-container-805 .owl-item").removeClass('first');
                              $(".tab-container-805 .owl-item.active").addClass('first');
                          } else {
                              $(".tab-container-805 .owl-item").removeClass('first');
                              $(".tab-container-805 .owl-item.active:first").addClass('first');
                          }
                          }
                          });
                          
                          
                          });
                          </script>
                          <script>
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